<?php
namespace App\Controllers\Backend\CheckEvent;
use App\Controllers\BaseController;

class CheckEvent extends BaseController{
   protected $eventService;
   protected $nestedsetbie;
   protected $authentication;
   protected $language;
   protected $eventRepository;
   protected $semesterRepository;
   protected $facultyRepository;



	public function __construct(){
      $this->language = $this->currentLanguage();
      $this->module = 'events';
      $this->eventService = service('EventService',
         ['language' => $this->language, 'module' => $this->module]
      );

      $this->authentication = service('Auth');
      $this->eventRepository = service('eventRepository', $this->module);
      $this->semesterRepository = service('semesterRepository', 'semesters');
      $this->facultyRepository = service('facultyRepository', 'faculties');

	}

	public function index($page = 1){
      if(!$this->authentication->gate('backend.checkevent.checkevent.index')){
         $this->session->setFlashdata('message-danger', 'Bạn không có quyền truy cập vào chức năng này!');
         return redirect()->to(BASE_URL.route('backend.dashboard.dashboard.index'));
      }
      // dd(123);
		$event = $this->eventService->paginate($page);
      // dd($event);
      // $countEvent = $this->eventService->countEventUser($page);
      $catalogue = $this->semesterRepository->getAllCatalogue('semesters');
      $dropdown = dropdown_no_language($catalogue);
      
      $module = $this->module;
      $title = 'Danh sách chương trình, sự kiện cần duyệt';
      $template = route('backend.event.checkevent.index');
		return view(route('backend.dashboard.layout.home'),
         compact(
            'template', 'event', 'module', 'dropdown','title','countEvent'
         )
      );
	}

	public function checkUser($id = 0,$page = 1){
      $id = (int)$id;
      
      if(!$this->authentication->gate('backend.checkevent.checkevent.checkuser')){
         $this->session->setFlashdata('message-danger', 'Bạn không có quyền truy cập vào chức năng này!');
         return redirect()->to(BASE_URL.route('backend.dashboard.dashboard.index'));
      }
      $eventUser = $this->eventService->paginateEventUser($id,$page);
      // dd($eventUser);
      

		// if(!isset($event) || is_array($event) == false || count($event) == 0){
		// 	$this->session->setFlashdata('message-danger', 'Bản ghi không tồn tại');
 		// 	return redirect()->to(BASE_URL.route('backend.event.catalogue.index'));
		// }

		// if($this->request->getMethod() == 'post'){
		// 	$validate = $this->validation();
      //    if ($this->validate($validate['validate'], $validate['errorValidate'])){
      //       if($this->eventService->update($id)){
      //          $this->session->setFlashdata('message-success', 'Cập nhật bản ghi thành công!');
      //          return redirect()->to(BASE_URL.route('backend.event.event.index'));
      //       }else{
      //          $this->session->setFlashdata('message-danger', 'Cập nhật bản ghi không thành công!');
      //          return redirect()->to(BASE_URL.route('backend.event.event.index'));
      //       }
      //    }else{
      //       $validate = $this->validator->listErrors();
      //    }
		// }
      $method = 'update';
      $title = 'Duyệt minh chứng tham gia';
      $catalogue = $this->semesterRepository->getAllCatalogue('semesters');
      $dropdown = dropdown_no_language($catalogue);
      // $faculty = $this->facultyRepository->getAllCatalogue('faculties');
      // $scales = dropdown_no_language($faculty);
      $template = route('backend.event.checkevent.checkevent');
      $module = 'event';
      return view(route('backend.dashboard.layout.home'),
         compact('dropdown', 'method', 'validate', 'template', 'title', 'eventUser', 'module','scales')
      );
	}


}
