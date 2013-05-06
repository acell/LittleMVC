<?php
	$router = $LittleMvc->getRouter();
	$router
		->add('GET', '/', 'Index:Home')
		->add('GET','/home/:id', 'Index:index');