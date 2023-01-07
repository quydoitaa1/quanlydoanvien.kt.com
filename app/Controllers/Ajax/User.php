<?php
namespace App\Controllers\Ajax;
use App\Controllers\BaseController;

use App\Models\AutoloadModel;
use App\Libraries\Authentication as Auth;

class User extends BaseController{
	public function __construct(){

	}

    public function resetKey()
    {
        $id = $this->request->getPost('id');
        $update = $this->store();
		$flag = $this->AutoloadModel->_update([
            'table'=>'users',
            'data' => $update, 
            'where' => ['id' => $id, 'deleted_at' => 0]]);
        if($flag > 0){
            $data = "Reset mật khẩu thành công! <br> (Mật khẩu mặc định là 'dvkt@123')";
        }else{
            $data = "Reset mật khẩu thất bại!";
        }

        echo $data; die();
    }
    private function store(){
		helper('text');
		$salt = random_string('alnum', 168);
        $password = 'dvkt@123';

        $store['password'] = password_encode($password,$salt);
        $store['salt'] = $salt;
        $store['publish'] = 1;
		$store['updated_at'] = currentTime();
		$store['userid_updated'] = Auth::id();
		
		return $store;
	}




	public function delete_all(){
		$id = $this->request->getPost('id');
		$module = $this->request->getPost('module');
		$flag = $this->AutoloadModel->_update([
			'table' => $module,
			'data' => ['deleted_at' => 1],
			'where_in' => $id,
			'where_in_field' => 'id',
		]);
		echo $flag;die();
	}



	public function update_field(){
		$post['id'] = $this->request->getPost('id');
		$post['module'] = $this->request->getPost('module');
		$post['field'] = $this->request->getPost('field');
		$module = $post['module'];
		$object = $this->AutoloadModel->_get_where([
			'select' => 'id, '.$post['field'],
			'table' => $post['module'],
			'where' => ['id' => $post['id']],
		]);
		if(!isset($object) || is_array($object) == false || count($object) == 0){
			echo 0;
			die();
		}

		$_update[$post['field']] = (($object[$post['field']] == 1)?0:1);
		$flag = $this->AutoloadModel->_update([
			'data' => $_update,
			'table' => $post['module'],
			'where' => ['id' => $post['id']]
		]);
		echo json_encode([
			'flag' => $flag,
			'value' => $_update[$post['field']],
		]);
		die();
	}


}
