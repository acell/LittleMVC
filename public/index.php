<?php 
	require '../lib/LittleMvc/lib/SplClassLoader.php';
	
	
	$LittleMvcLoader = new SplClassLoader('LittleMvc',__DIR__ . '/../lib');
	$LittleMvcLoader->register();

	$LittleMvc = new LittleMvc\Bootstrap();
	$LittleMvc = $LittleMvc->getApplication();
	
	require '../myApp/myApp.php';

	$LittleMvc->route()
			  ->run();

?>