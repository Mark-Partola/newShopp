<?php

require_once  __DIR__.'/../application/Application.php';
require_once  __DIR__.'/../application/Request.php';

function __autoload($classname) {
	//Ctrl или Base
	if($classname[0] == 'C' || $classname[0] == 'B'){
		require_once '../application/controllers/' . $classname .'.php';
	} else
		require_once '../application/models/' . $classname .'.php';
}

Application::init();

Request('GET', '/shoppingNew/public', 'Ctrl_index');

//Request('GET', '/shoppingNew/public/qwerty/{name}', 'Ctrl_test');

Request('POST', '/shoppingNew/public', 'Ctrl_index:post');

/*Request('GET', '/shoppingNew/public/{name}/{id}/', 'Ctrl_index:hi')
->assert('name', '|^[a-z]+$|')
->assert('id', '|^[0-9]+$|');*/

Request('GET', '/shoppingNew/public/test', 'Ctrl_index:getNew');

Application::run();

?>
