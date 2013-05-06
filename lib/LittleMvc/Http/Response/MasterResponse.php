<?php

	namespace LittleMvc\Http\Response;

	use LittleMvc\Http\Response\Header;
	

	abstract class MasterResponse
	{
		private $response,
				$header;
		public function __construct($response)
		{
			
			$this->response = $response;
			$this->header = new Header();
		}

		public function getHeader()
		{
			return $this->header;
		}

		public function getResponse()
		{
			return $this->response;
		}

	
	}