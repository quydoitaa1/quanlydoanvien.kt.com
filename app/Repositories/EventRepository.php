<?php

namespace App\Repositories;
use App\Repositories\Interfaces\EventRepositoryInterface;

class EventRepository extends BaseRepository implements EventRepositoryInterface
{
   protected $table;
   protected $model;

   public function __construct($table){
      $this->table = $table;
      $this->model = model('App\Models\AutoloadModel');
   }

   public function findByField($value, string $field){
      return $this->model->_get_where([
         'select' => '
            tb1.id,
            tb1.semester_id,
            tb1.album,
            tb1.image,
            tb1.publish,
            tb1.created_at,
            tb1.title,
            tb1.day_start,
            tb1.day_end,
            tb1.score,
            tb1.canonical,
            tb1.description,
            tb1.content,
            tb1.scales,
            tb1.canonical
         ',
         'table' => $this->table.' as tb1',
         'where' => [
            $field => $value,
            'tb1.deleted_at' => 0
         ]
      ]);
   }

   public function countIndex($eventCatalogue){
      return $this->model->_get_where([
         'select' => '
            tb1.id
         ',
			'table' => $this->table.' as tb1',
			'where' => [
            'tb1.publish' => 1,
            'tb1.deleted_at' => 0,
         ],
         'query' => '
            tb3.event_catalogue_id IN (
               SELECT pc.id
               FROM event_catalogues as pc
               WHERE pc.lft >= '.$eventCatalogue['lft'].' AND pc.rgt <= '.$eventCatalogue['rgt'].'
            )
         ',
			'join' => [
				[
					'event_catalogue_event as tb3', 'tb1.id = tb3.event_id', 'inner'
				],
			],
			'group_by' => 'tb1.id',
			'count' => TRUE,
      ]);
   }

   public function paginateIndex(array $eventCatalogue, array $config, int $page){
      return  $this->model->_get_where([
         'select' => '
            tb1.id,
            tb1.event_catalogue_id,
            tb1.catalogue,
            tb1.image,
            tb1.viewed,
            tb1.order,
            tb1.created_at,
            tb1.album,
            tb1.publish,
            tb2.title,
            tb2.canonical,
            tb2.description,
         ',
         'table' => $this->table.' as tb1',
         'where' => [
            'tb1.publish' => 1,
            'tb1.deleted_at' => 0,
         ],
         'query' => '
            tb3.event_catalogue_id IN (
               SELECT pc.id
               FROM event_catalogues as pc
               WHERE pc.lft >= '.$eventCatalogue['lft'].' AND pc.rgt <= '.$eventCatalogue['rgt'].'
            )
         ',
			'join' => [
            [
               'event_translate as tb2', 'tb1.id = tb2.event_id', 'inner'
            ],
				[
					'event_catalogue_event as tb3', 'tb1.id = tb3.event_id', 'inner'
				],
			],
         'limit' => $config['per_page'],
         'start' => $page * $config['per_page'],
         'group_by' => 'tb1.id',
         'order_by'=> 'tb1.id desc'
      ], TRUE);
   }

   public function count(array $condition,  string $keyword, string $query = ''){
      return $this->model->_get_where([
         'select' => 'tb1.id',
			'table' => $this->table.' as tb1',
			'keyword' => $keyword,
			'where' => $condition,
			'query' => $query,
			'join' => [
            // [
            //    'event_translate as tb2', 'tb1.id = tb2.event_id', 'inner'
            // ],
				// [
				// 	'event_catalogue_event as tb3', 'tb1.id = tb3.event_id', 'inner'
				// ],
			],
			'group_by' => 'tb1.id',
			'count' => TRUE,
      ]);
   }

   public function paginate(array $condition, string $keyword,  string $query = '', array $config, int $page){
      return  $this->model->_get_where([
         'select' => '
            tb1.id,
            tb1.semester_id,
            tb1.title,
            tb1.score,
            tb1.day_start,
            tb1.day_end,
            tb1.image,
            tb1.created_at,
            tb1.publish,
            tb1.canonical,
            tb2.title as cat_title,
            (SELECT fullname FROM users WHERE users.id = tb1.userid_created) as creator,
         ',
         'table' => $this->table.' as tb1',
         'keyword' => $keyword,
			'where' => $condition,
			'query' => $query,
			'join' => [
            [
               'semesters as tb2', 'tb1.semester_id = tb2.id', 'inner'
            ],
			],
         'limit' => $config['per_page'],
         'start' => $page * $config['per_page'],
         'group_by' => 'tb1.id',
         'order_by'=> 'tb1.id desc'
      ], TRUE);
   }

   public function search($keyword, $start, $language = 2){
      return  $this->model->_get_where([
         'select' => '
            tb1.id,
            tb2.title,
            tb1.image,
            tb2.canonical,
            tb2.description,
            tb2.content,

         ',
         'table' => $this->table.' as tb1',
         'keyword' => '(tb2.title LIKE \'%'.$keyword.'%\')',
         'where' => [
            'tb1.deleted_at' => 0,
            'tb2.language_id' => $language
         ],
			'join' => [
            [
               'event_translate as tb2', 'tb1.id = tb2.event_id', 'inner'
            ],
			],
         'limit' => 15,
         'start' => $start,
         'group_by' => 'tb1.id',
         'order_by'=> 'tb1.id desc'
      ], TRUE);

   }

   public function findProductByIdArray($id){
      return  $this->model->_get_where([
         'select' => '
            tb1.id,
            tb2.title,
            tb1.image,
            tb2.canonical,
            tb2.description,
            tb2.content,
         ',
         'table' => $this->table.' as tb1',
			'where' => [
            'tb1.deleted_at' => 0,
         ],
         'where_in' => $id,
         'where_in_field' => 'tb1.id',
			'join' => [
            [
               'event_translate as tb2', 'tb1.id = tb2.event_id', 'inner'
            ],
				[
					'event_catalogue_event as tb3', 'tb1.id = tb3.event_id', 'inner'
				],
			],
         'group_by' => 'tb1.id',
      ], TRUE);
   }

   public function eventRelate($event_catalogue_id = 0, $limit){
      return $this->model->_get_where([
         'select' => '
            tb1.id,
            tb1.image,
            tb2.title,
            tb2.canonical,
            tb2.description,
         ',
         'table' => $this->table.' as tb1',
         'join' => [
            [
               'event_translate as tb2', 'tb1.id = tb2.event_id', 'inner'
            ],
			],
         'where' => [
            'tb1.event_catalogue_id' => $event_catalogue_id
         ],
         'limit' => $limit,
         'order_by' => 'RAND()'
      ], TRUE);
   }


}
