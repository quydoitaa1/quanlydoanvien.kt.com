<?php
namespace App\Controllers\Backend\Dashboard;
use App\Controllers\BaseController;

class Dashboard extends BaseController{

	protected $data;

	public function __construct(){
		$this->data = [];
		$this->authentication = service('Auth');
	}


	public function index( $page = 0){

		if(!$this->authentication->gate('backend.dashboard.dashboard.index')){
			$this->session->setFlashdata('message-danger', 'Bạn không có quyền truy cập vào chức năng này!');
			return redirect()->to(BASE_URL);
		 }

		$this->data['template'] = 'backend/dashboard/home/index';
		return view('backend/dashboard/layout/home', $this->data);
	}

}
