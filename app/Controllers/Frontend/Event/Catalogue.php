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
      $this->module = 'product_catalogues';
      $this->productCatalogueRepository = service('ProductCatalogueRepository', $this->module);
      $this->productService = service('ProductService',
         ['language' => $this->language, 'module' => 'products']
      );
      $this->systemRepository = service('SystemRepository', 'systems');
      $this->productRepository = service('ProductRepository', 'products');
      $this->cartBie = service('cartbie');
      $this->userRepository = service('userRepository', 'users');
      $this->facultyRepository = service('facultyRepository', 'faculties');
	}

	public function index($id = 0, $page = 1){
	   // $productCatalogue = $this->productCatalogueRepository->findByField($id, 'tb1.id');
      // $module = $this->module;
      // $product = $this->productService->index($productCatalogue, $page);
      // // dd($product);

      // $canonical = $product['canonical'];
      // $general = convertGeneral($this->systemRepository->all('keyword, content'));
      // $product['count'] = $this->productRepository->count(['deleted_at' => 0]);
      // $productCatalogueList = $this->productCatalogueRepository->allProductCatalogue($this->language);
      // $productCatalogueList = recursive($productCatalogueList);
      // $seo = seo($productCatalogue, $canonical, 'page');

      
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
            'template', 'product', 'general','user','faculties'
         )
      );
	}


}
