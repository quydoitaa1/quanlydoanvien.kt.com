<?php
namespace App\Controllers\Ajax;
use App\Controllers\BaseController;

class Event extends BaseController{
	public function __construct(){
		$this->semesterRepository = service('semesterRepository', 'semesters');
		$this->semesterService = service('SemesterService',
         ['language' => 2, 'module' => 'semesters']
      );

	}

	public function check_event(){
		$id = $this->request->getPost('id');
		$field = $this->request->getPost('field');
		$where = $this->request->getPost('where');
		$object = $this->AutoloadModel->_get_where([
			'select' => 'id, '.$field,
			'table' => 'event_user',
			'where' => ['id' => $id],
		]);
		if(!isset($object) || is_array($object) == false || count($object) == 0){
			echo 0;
			die();
		}
		if($this->request->getPost('note')){
			$_update['note_reviewer'] = $this->request->getPost('note');
		}
		$_update[$field] = $where;
		$flag = $this->AutoloadModel->_update([
			'data' => $_update,
			'table' => 'event_user',
			'where' => ['id' => $id]
		]);
		
		echo $where;
		die();
	}
	public function get_semester(){
		$post = $this->request->getPost('param');
		$data = $this->semesterRepository->findByField($post['id'], 'tb1.id');


		$object = $this->AutoloadModel->_get_where([
			'select' => $post['select'],
			'table' => $post['table'].' as tb1',
			'where' => [
				'parentid' => $post['id'],
			],

			 'query' => '
			 tb1.id IN (
				SELECT pc.id
				FROM '.$post['table'].' as pc
				WHERE pc.lft >= '.$data['lft'].' AND pc.rgt <= '.$data['rgt'].'
			 )
		  ',
			'order_by' => 'title asc'
		], TRUE);
		// pre($object);
		


		$html = '<option value="0">'.$post['text'].'</option>';
		if(isset($object) && is_array($object) && count($object)){
			foreach($object as $key => $val){
				$html = $html . '<option value="'.$val['id'].'">'.$val['title'].'</option>';
			}
		}
		echo json_encode([
			'html' => $html
		]); die();
	}
}
