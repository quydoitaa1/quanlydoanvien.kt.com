<?php
namespace App\Controllers\Frontend\Event;
use App\Controllers\FrontendController;

class Event extends FrontendController{
   protected $eventService;
   protected $language;
   protected $systemRepository;
   protected $eventRepository;
   protected $promotionRepository;
   protected $reviewRepository;
   protected $reviewService;
   protected $cartBie;



	public function __construct(){
      $this->language = $this->currentLanguage();
      $this->module = 'event_catalogues';
      $this->eventCatalogueRepository = service('EventCatalogueRepository', $this->module);
      $this->eventService = service('EventService',
         ['language' => $this->language, 'module' => 'events']
      );
      $this->reviewService = service('ReviewService',
         ['language' => $this->language, 'module' => 'event_reviews']
      );
      $this->systemRepository = service('SystemRepository', 'systems');
      $this->eventRepository = service('EventRepository', 'events');
      $this->promotionRepository = service('PromotionRepository', 'promotions');
      $this->reviewRepository = service('ReviewRepository', 'event_reviews');
      $this->cartBie = service('cartbie');

	}

	public function index($id = 0, $page = 1){
      // $event = $this->eventRepository->findByField($id, 'tb1.id');
      // $eventCatalogue =  $this->eventCatalogueRepository->findByField($event['event_catalogue_id'], 'tb1.id');
      // $event['promotion'] = $this->promotionRepository->findPromotionByEventId($event['id']);


      // // $canonical = $event['canonical'];
      // $canonical = write_url($event['canonical'], TRUE, TRUE);
      // $general = convertGeneral($this->systemRepository->all('keyword, content'));
      // $event['count'] = $this->eventRepository->count(['deleted_at' => 0]);
      // $eventCatalogueList = $this->eventCatalogueRepository->allEventCatalogue($this->language);
      // $eventCatalogueList = recursive($eventCatalogueList);
      // /* event relate and promotion  */
      // $eventRelate = $this->eventRepository->eventRelate($event['event_catalogue_id'], 5);
      // if(isset($eventRelate) && is_array($eventRelate) && count($eventRelate)){
      //    foreach($eventRelate as $key => $val){
      //       $eventRelate[$key]['promotion'] = $this->promotionRepository->findPromotionByEventId($val['id']);
      //       $eventRelate[$key]['review'] = $this->reviewRepository->averateReviewByEventId($val['id']);
      //    }
      // }
      // $eventReview = $this->reviewRepository->findReviewByEventId($event['id']);
      // $eventReviewStatistic = $this->reviewRepository->averateReviewByEventId($event['id']);

      // $seo = seo($event, $canonical, 'event');
      // $cart = $this->cartBie->formatCart($this->cart);
      $template = route('frontend.event.event.index');
      // $js = ['review','cart','core'];
		return view(route('frontend.homepage.layout.home'),
         compact(
            'template', 'eventCatalogueList','canonical', 'event', 'general','eventCatalogue','eventRelate', 'js', 'eventReview', 'eventReviewStatistic', 'seo','cart'
         )
      );
	}




}
