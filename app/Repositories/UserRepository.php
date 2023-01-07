<?php

namespace App\Repositories;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
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
            tb1.*,
         ',
         'table' => $this->table.' as tb1',
         'where' => [
            $field => $value,
            'tb1.deleted_at' => 0
         ]
      ]);
   }
   public function getAccount($value, string $field){
      return $this->model->_get_where([
         'select' => '
            tb1.id,
            tb1.image,
            tb1.fullname,
            tb1.*,
            tb2.title as name_cat,
         ',
         'table' => $this->table.' as tb1',
         'join' => [
            ['user_catalogues as tb2','tb1.user_catalogue_id = tb2.id','inner'],
         ],
         'where' => [
            $field => $value,
            'tb1.deleted_at' => 0
         ]
      ]);
   }

   public function count(array $condition,  string $keyword, array $query){
      return $this->model->_get_where([
         'select' => 'tb1.id',
         'table' => $this->table.' as tb1',
         'where' => $condition,
         'query' => $query,
         'keyword' => $keyword,
         'count' => TRUE
      ]);
   }

   public function paginate(array $condition, string $keyword, array $query, array $config, int $page){
      return  $this->model->_get_where([
         'select' => '
            tb1.*,
            tb2.title as name_faculty,
            tb3.title as name_class,
            tb4.title as name_cat,
         ',
         'table' => $this->table.' as tb1',
         'where' => $condition,
         'query' => $query,
         'keyword' => $keyword,
         'join' => [
            ['faculties as tb2','tb1.faculty_id = tb2.id','inner'],
            ['classes as tb3','tb1.class_id = tb3.id','inner'],
            ['user_catalogues as tb4','tb1.user_catalogue_id = tb4.id','inner'],
         ],
         'limit' => $config['per_page'],
         'start' => $page * $config['per_page'],
         'order_by'=> 'id desc'
      ], TRUE);
   }

   public function softDeleteUserByCatalogueID(int $catID){
      return $this->model->_update([
         'table' => $this->table,
         'where' => [
            'user_catalogue_id' => $catID
         ],
         'data' => [
            'deleted_at' => 1,
         ]
      ]);
   }
   public function getSynthesis($table){
      return $this->model->_get_where([
         'select' => '
            id,name
         ',
         'table' => $table,
         'order_by'=> 'id asc'
      ],TRUE);
   }
   public function getProvince($table){
      return $this->model->_get_where([
         'select' => '
         provinceid,name
         ',
         'table' => $table,
         'order_by'=> 'provinceid asc'
      ],TRUE);
   }

}
