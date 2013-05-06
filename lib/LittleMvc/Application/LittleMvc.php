<?php
	namespace LittleMvc\Application;
	
	use LittleMvc\Http\Request\Request;
	use LittleMvc\Http\Request\Router;
	use LittleMvc\Controller\ControllerLoader;
	
	class LittleMvc{
		private $bootstrap,
				$router,
				$request;

		public function __construct(\LittleMvc\Bootstrap $bootstrap)
		{
			$this->bootstrap = $bootstrap;
			$this->request = new Request();
			$this->router = new Router();
		}

		public function getRouter()
		{
			return $this->router;
		}

		public function route()
		{
			$this->getRouter()->processRequestPath($this->request);
			return $this;
		}

		public function run()
		{
			$res = new ControllerLoader($this->getRouter()->getControllerCallback());
			echo $res->getResponse();
		}
	}