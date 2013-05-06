<?php 

	namespace myApp\Controllers;

	use LittleMvc\Application\Debug as pd;
	use LittleMvc\Controller\LittleController;
	use LittleMvc\Http\Response\JSONResponse;


	class IndexController extends LittleController{
		
		public function indexAction($id,$second)
		{
			return new JSONResponse(array($id, $second));
		}

		public function homeAction()
		{
			return new JSONResponse(array('home'));
		}
	}