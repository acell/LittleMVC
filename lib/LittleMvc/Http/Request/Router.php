<?php

	namespace LittleMvc\Http\Request;

	class Router{
		private $POST = array(),
				$GET = array(),
				$DELETE = array(),
				$PUT	= array(),
				$callback = array(),
				$method;

		public function __construct()
		{	
			if ( $_SERVER['REQUEST_METHOD'] === 'POST') {
				$this->method = 'POST';
			} elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){
				$this->method = 'GET';
			}
		}

		public function processRequestPath(\LittleMvc\Http\Request\Request $request)
		{
			$method = $this->method;
		    foreach($this->$method as $route) {
		        // convert urls like '/users/:uid/posts/:pid' to regular expression
		        $pattern = "@^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route[0])) . "$@D";
		        $matches = array();

		        // check if the current request matches the expression
		        if ( preg_match($pattern, $request->getRequestUrl(), $matches)) {
		            // remove the first match
		            array_shift($matches);
		            // call the callback with the matched positions as params
		             $this->callback = array($route[1], $matches);
		            return;
		        } else {
		        	 throw new \Exception('Not Route found');
		        }
		    }
		}

		public function getControllerCallback()
		{
			return $this->callback;
		}

		public function add($method = false, $route,$controller)
		{
			if (!$method) throw new \Error('No Method supplied for route');
			switch ($method){
				case 'GET';
					$this->GET[] = array($route,$controller);
					break;
				case 'POST';
					$this->POST[] = array($route,$controller);
					break;
				case 'DELETE';
					$this->DELETE[] = array($route,$controller);
					break;
				case 'PUT';
					$this->PUT[] = array($route,$controller);
					break;
			}
			return $this;
		}
	}