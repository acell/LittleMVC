<?php

	namespace LittleMvc\Application;

	class Debug{
		public static function p(){
		
			foreach (func_get_args() as $arg ){
				echo '<pre>';
				echo var_dump( $arg );
				echo '---</pre>';
			}
		}

		public static function d( ){
			
			foreach (func_get_args() as $arg ){
				echo "<pre>	";
				echo var_dump( $arg );
				echo "\n\r---</pre>\n\r";
			}
			
			die();
		}
	}