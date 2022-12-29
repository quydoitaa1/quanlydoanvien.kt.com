<?php

namespace App\Services;
use App\Libraries\Authentication as Auth;
use App\Libraries\Nestedsetbie;


class SemesterService
{

   protected $module;
   protected $language;
   protected $db;
   protected $request;
   protected $model;
	protected $nestedsetbie;
   protected $pagination;
   protected $semesterRepository;

   public function __construct($param){
      $this->module = $param['module'];
      $this->language = $param['language'];
      $this->db = \Config\Database::connect();
      $this->request = \Config\Services::request();
      $this->pagination = service('Pagination');
      $this->semesterRepository = service('SemesterRepository', $this->module);
      $this->routerRepository = service('routerRepository', 'routers');
   }




   public function paginate($page){
      helper(['mypagination']);
		$page = (int)$page;
		$perpage = ($this->request->getGet('perpage')) ? $this->request->getGet('perpage') : 20;
      $keyword = $this->keyword();
      $condition = $this->condition();

      $config['total_rows'] = $this->semesterRepository->count($condition, $keyword);
      
		if($config['total_rows'] > 0){
			$config = pagination_config_bt(['url' => route('backend.organization.semester.index'),'perpage' => $perpage], $config);
			$this->pagination->initialize($config);
			$pagination = $this->pagination->create_links();
			$totalPage = ceil($config['total_rows']/$config['per_page']);
			$page = ($page <= 0)?1:$page;
			$page = ($page > $totalPage)?$totalPage:$page;
			$page = $page - 1;
			$semester = $this->semesterRepository->paginate($condition, $keyword, $config, $page);
		}

      return [
         'pagination' => ($pagination) ?? '',
         'list' => ($semester) ?? '',
      ];
   }

   public function create(){
      $this->db->transBegin();
      try{
         $payload = requestAccept(['title','day_start','day_end','publish'], Auth::id());
         $id = $this->semesterRepository->create($payload);

         $this->db->transCommit();
         $this->db->transComplete();
         return true;

      }catch(\Exception $e ){
         $this->db->transRollback();
         $this->db->transComplete();
         echo $e->getMessage();die();
         return false;
      }
   }

   public function update($id){
      $this->db->transBegin();
      try{
         $payload = requestAcceptUpdate(['title','image','founding','description','publish'], Auth::id());
         $flag = $this->semesterRepository->update($payload, $id);

         $this->db->transCommit();
         $this->db->transComplete();
         return true;

      }catch(\Exception $e ){
         $this->db->transRollback();
         $this->db->transComplete();
         dd($e);
         return false;
      }
   }

   public function delete($id){
      $id = (int)$id;
      $this->db->transBegin();
      try{
         $flag = $this->semesterRepository->softDelete($id);
         
         $this->db->transCommit();
         $this->db->transComplete();
         return true;

      }catch(\Exception $e ){
         $this->db->transRollback();
         $this->db->transComplete();
         dd($e);
         return false;
      }

   }

   private function condition(){
      $condition = [];
      if($this->request->getGet('publish')){
         $condition['tb1.publish'] = $this->request->getGet('publish');
      }
      $condition['tb1.deleted_at'] = 0;
      // $condition['tb2.language_id'] = $this->language;

      return $condition;
   }

   private function keyword(): string{
      $search = '';
      if(!empty($this->request->getGet('keyword'))){
         $fieldSearch = ['title','description'];

         $keyword = $this->request->getGet('keyword');
         if(isset($fieldSearch) && is_array($fieldSearch) && count($fieldSearch)){
            foreach($fieldSearch as $key => $val){
               if(empty($search)){
                  $search = '(tb1.'.$val.' LIKE \'%'.$keyword.'%\')';
               }else{
                  $search = $search.' OR '.'(tb1.'.$val.' LIKE \'%'.$keyword.'%\')';
               }

            }
         }
      }
      return $search;
   }

}