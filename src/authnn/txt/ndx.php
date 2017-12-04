<?php
	//require_once (__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '.lib' . 'usr.php');
	require_once (__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'usr.init.php');
	
	if (isset ($_GET ['id'], $_GET ['key']))
		if ($_SESSION ['usr'] -> authnt ($_GET ['id'], $_GET ['key']))
			include (__DIR__ . DIRECTORY_SEPARATOR . 'success.txt');
		else
			include (__DIR__ . DIRECTORY_SEPARATOR . 'failure.txt');
	else if (isset ($_POST ['id'], $_POST ['key']))
		if ($_SESSION ['usr'] -> authnt ($_POST ['id'], $_POST ['key']))
			include (__DIR__ . DIRECTORY_SEPARATOR . 'success.txt');
		else
			include (__DIR__ . DIRECTORY_SEPARATOR . 'failure.txt');
	
	//include (__DIR__ . DIRECTORY_SEPARATOR . 'form.html');
