<?php
namespace App\Controllers\Backend\Dashboard;
use App\Controllers\BaseController;

class Dashboard extends BaseController{

	protected $userRepository;

	public function __construct(){
		$this->authentication = service('Auth');
		$this->language = $this->currentLanguage();
		$this->module = 'faculties';
		$this->userService = service('UserService',
			['language' => $this->language, 'module' => $this->module]
		);
		$this->userRepository = service('UserRepository', $this->module);
	}


	public function index( $page = 0){

		if(!$this->authentication->gate('backend.dashboard.dashboard.index')){
			$this->session->setFlashdata('message-danger', 'Bạn không có quyền truy cập vào chức năng này!');
			return redirect()->to(BASE_URL);
		}
		$users = $this->userRepository->getDashboard();
		$userFaculty = $this->userRepository->getDashboardFaculty();
		$userEvent = $this->userRepository->getDashboardEvent();
		// dd($userEvent);
		$template = route('backend.dashboard.home.index');
			return view(route('backend.dashboard.layout.home'),
			compact(
				'template', 'module', 'users' ,'userFaculty','userEvent'
			)
		);
	}

}
