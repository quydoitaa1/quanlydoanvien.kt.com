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

   public function count(array $condition,  string $keyword){
      return $this->model->_get_where([
         'select' => 'tb1.id',
         'table' => $this->table.' as tb1',
         'where' => $condition,
         'keyword' => $keyword,
         'count' => TRUE
      ]);
   }

   public function paginate(array $condition, string $keyword, array $config, int $page){
      return  $this->model->_get_where([
         'select' => '
            *
         ',
         'table' => $this->table,
         'where' => $condition,
         'keyword' => $keyword,
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
