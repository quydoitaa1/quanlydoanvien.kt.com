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
         ',
         'table' => $this->table.' as tb1',
         'where' => [
            $field => $value,
            'tb1.deleted_at' => 0,
            'tb1.publish' => 1,
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

   public function eventRelate($semester_id = 0, $limit){
      return $this->model->_get_where([
         'select' => '
            tb1.id,
            tb1.image,
            tb1.title,
            tb1.canonical,
            tb1.description,
         ',
         'table' => $this->table.' as tb1',
         'where' => [
            'tb1.semester_id' => $semester_id,
            'tb1.publish' => 1,
            'tb1.deleted_at' => 0
         ],
         'limit' => $limit,
         'order_by' => 'RAND()'
      ], TRUE);
   }

   public function getHome(){
      return $this->model->_get_where([
         'select' => '
            tb1.title,
            tb1.image,
            tb1.description,
            tb1.canonical,
            tb1.day_start,
            tb1.day_end
         ',
         'table' => $this->table.' as tb1',
         'where' => [
            'tb1.publish' => 1,
            'tb1.deleted_at' => 0
         ]
      ],TRUE);
   }
   public function createEventUser(array $payload = []){
      return $this->model->_insert([
         'data' => $payload,
         'table' => 'event_user',
      ]);
   }
   public function updateEventUser(array $payload, int $id){
      return $this->model->_update([
         'data' => $payload,
         'table' =>'event_user',
         'where' => [
            'id' => $id
         ]
      ]);
   }
   public function checkEventUser(array $condition){
      return $this->model->_get_where([
         'select' => 'tb1.id',
			'table' => 'event_user as tb1',
			'where' => $condition,
			'count' => TRUE,
      ]);
   }
   public function paginateEventUser(array $condition, string $keyword,  array $query , array $config, int $page){
      return  $this->model->_get_where([
         'select' => '
            tb1.id,
            tb1.event_id,
            tb1.user_id,
            tb1.image,
            tb1.note,
            tb1.created_at,
            tb1.publish,
            tb2.title as title_event,
            tb2.score,
            tb3.fullname,
            tb3.id_student,
            tb4.title as name_faculty,
            tb5.title as name_class,
         ',
         'table' => 'event_user as tb1',
         'keyword' => $keyword,
			'where' => $condition,
			'query' => $query,
			'join' => [
            ['events as tb2', 'tb1.event_id = tb2.id', 'inner'],
            ['users as tb3', 'tb1.user_id = tb3.id', 'inner'],
            ['faculties as tb4','tb3.faculty_id = tb4.id','inner'],
            ['classes as tb5','tb3.class_id = tb5.id','inner'],
			],
         'limit' => $config['per_page'],
         'start' => $page * $config['per_page'],
         'group_by' => 'tb1.id',
         'order_by'=> 'tb1.id desc'
      ], TRUE);
   }
   public function getEventUser($value, string $field, $id){
      return  $this->model->_get_where([
         'select' => '
            tb1.id,
            tb1.event_id,
            tb1.user_id,
            tb1.image,
            tb1.note,
            tb1.note_reviewer,
            tb1.created_at,
            tb1.publish,
            tb2.title as title_event,
            tb2.score,
            tb2.canonical,
            tb3.fullname,
            tb3.id_student,
            tb4.title as name_faculty,
            tb5.title as name_class,
            tb6.title as name_semester,
         ',
         'table' => 'event_user as tb1',
			'where' => [
            $field => $value,
            'user_id' => $id,
         ],
			'join' => [
            ['events as tb2', 'tb1.event_id = tb2.id', 'inner'],
            ['users as tb3', 'tb1.user_id = tb3.id', 'inner'],
            ['faculties as tb4','tb3.faculty_id = tb4.id','inner'],
            ['classes as tb5','tb3.class_id = tb5.id','inner'],
            ['semesters as tb6','tb2.semester_id = tb6.id','inner'],
			],
         'order_by'=> 'tb1.id desc'
      ], TRUE);
   }
   public function countEventUser(array $condition,  string $keyword, array $query){
      return $this->model->_get_where([
         'select' => 'tb1.id',
			'table' => 'event_user as tb1',
			'keyword' => $keyword,
			'where' => $condition,
			'query' => $query,
			'join' => [
            ['events as tb2', 'tb1.event_id = tb2.id', 'inner'],
            ['users as tb3', 'tb1.user_id = tb3.id', 'inner'],
            ['faculties as tb4','tb3.faculty_id = tb4.id','inner'],
            ['classes as tb5','tb3.class_id = tb5.id','inner'],

			],
			'group_by' => 'tb1.id',
			'count' => TRUE,
      ]);
   }


}
