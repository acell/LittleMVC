<?php

	namespace LittleMvc\Http\Response;

	use LittleMvc\Http\Response\Header;
	use LittleMvc\Http\Response\MasterResponse;
	use LittleMvc\Application\Debug as pd;

	class JSONResponse extends MasterResponse
	{
		public function __toString()
		{
			return json_encode($this->getResponse());
		}
	}