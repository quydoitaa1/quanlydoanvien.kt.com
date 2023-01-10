<?php
namespace App\Controllers\Frontend\Event;
use App\Controllers\FrontendController;

class Catalogue extends FrontendController{
   protected $productService;
   protected $language;
   protected $systemRepository;
   protected $productRepository;
   protected $cartBie;



	public function __construct(){
      $this->language = $this->currentLanguage();
      $this->module = 'semesters';
      $this->eventService = service('EventService',
         ['language' => $this->language, 'module' => 'events']
      );
      $this->systemRepository = service('SystemRepository', 'systems');
      $this->cartBie = service('cartbie');
      $this->userRepository = service('UserRepository', 'users');
      $this->facultyRepository = service('FacultyRepository', 'faculties');
      $this->semesterRepository = service('SemesterRepository', 'semesters');
      $this->eventRepository = service('EventRepository', 'events');
	}

	public function index( $page = 1, $id = 0){
      $module = $this->module;
      // dd($id);
      if($id == 0){
         $Catalogue = $this->semesterRepository->getAll();
         $event = $this->eventService->indexAll($Catalogue, $page);
      }else{
         $Catalogue = $this->semesterRepository->findByField($id, 'tb1.id');
         $event = $this->eventService->index($Catalogue, $page);
      }
      // dd($event);
      $semester =  $this->semesterRepository->getAll();
      $faculties = $this->facultyRepository->getHome();
      $general = convertGeneral($this->systemRepository->all('keyword, content'));

      $faculties = $this->facultyRepository->getHome();
      $template = route('frontend.event.catalogue.index');
      if(isset($_COOKIE['QLDVKT_backend'])){
         $id = json_decode($_COOKIE['QLDVKT_backend'], true)['id'];
         $user = $this->userRepository->getAccount($id,'tb1.id');
      }
      // $cart = $this->cartBie->formatCart($this->cart);
      // $js = ['cart','core'];

		return view(route('frontend.homepage.layout.home'),
         compact(
            'template', 'product', 'general','user','faculties','event'
         )
      );
	}


}
