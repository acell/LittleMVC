<?php

	namespace LittleMvc\Http\Request;

	class Request
	{
		private $requestUrl;
		public function __construct()
		{
			$this->requestUrl = str_replace('?' . $_SERVER['QUERY_STRING'],'',$_SERVER['REQUEST_URI']);
		}
		public function getRequestUrl()
		{
			return $this->requestUrl;
		}
	}