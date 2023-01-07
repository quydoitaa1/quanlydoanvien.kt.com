<?php
namespace App\Controllers\Ajax;
use App\Controllers\BaseController;

class Event extends BaseController{
	public function __construct(){

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
}
