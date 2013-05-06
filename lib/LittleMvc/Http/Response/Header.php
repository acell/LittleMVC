<?php 

	namespace LittleMvc\Http\Response;

	class Header
	{
		public function set404(){}
		public function setJSON()
		{
			header('Content-Type: application/json');
		}

		public function setJSONP()
		{
			header('Content-Type: application/jsonp');
		}

		public function setXML()
		{
			
		}
		public function redirect($to,$type='301')
		{}
	}