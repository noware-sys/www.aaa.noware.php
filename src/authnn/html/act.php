<?php
	//require_once (__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '.lib' . 'usr.php');
	require_once (__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'usr.init.php');
	
	if (isset ($_GET ['id'], $_GET ['key']))
		if ($_SESSION ['usr'] -> authnt ($_GET ['id'], $_GET ['key']))
			include (__DIR__ . DIRECTORY_SEPARATOR . 'success.html');
		else
			include (__DIR__ . DIRECTORY_SEPARATOR . 'failure.html');
	else if (isset ($_POST ['id'], $_POST ['key']))
		if ($_SESSION ['usr'] -> authnt ($_POST ['id'], $_POST ['key']))
			include (__DIR__ . DIRECTORY_SEPARATOR . 'success.html');
		else
			include (__DIR__ . DIRECTORY_SEPARATOR . 'failure.html');
	
	//include (__DIR__ . DIRECTORY_SEPARATOR . 'form.html');
