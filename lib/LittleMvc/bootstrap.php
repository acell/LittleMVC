<?php

	namespace LittleMvc;

	use LittleMvc\Application\LittleMvc;

	class Bootstrap{
		
		private $router,
				$request;

		public function __construct()
		{
			$myApp = new \SplClassLoader('myApp',__DIR__.'/../..'); 
			$myApp->register();
			$log = new \SplClassLoader('Psr', __DIR__. '/../../lib'); 
			$log->register();
		}

		public function getApplication()
		{
			return new LittleMvc($this);
		}
	}