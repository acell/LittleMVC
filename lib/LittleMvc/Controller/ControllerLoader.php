<?php
	namespace LittleMvc\Controller;

	class ControllerLoader
	{
		
		private $controller,
				$action,
				$response;

		public function __construct($callback)
		{
			
			$this->buildControllerAndAction(explode(':',array_shift($callback)));
			$this->response = call_user_func_array(array(new $this->controller, $this->action), $callback[0]);
		}

		private function buildControllerAndAction($caa)
		{
			$this->controller = '\myApp\Controllers\\'.ucfirst($caa[0]) .'Controller';
			$this->action = $caa[1].'Action';
		}

		public function getResponse()
		{
			return $this->response;
		}
	}