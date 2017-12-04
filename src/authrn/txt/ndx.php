<?php
	//require_once (__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '.lib' . 'usr.php');
	require_once (__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'usr.init.php');
	
	//session_start ();
	
	$success = false;
	
	if (isset ($_GET ['target_id'], $_GET ['target_key'], $_GET ['action']))
	{
		if (isset ($_GET ['actor']))
			$success = $_SESSION ['usr'] -> may ($_GET ['actor'], $_GET ['target_id'], $_GET ['target_key'], $_GET ['action']);
		else
			$success = $_SESSION ['usr'] -> may ($_GET ['target_id'], $_GET ['target_key'], $_GET ['action']);
	}
	else if (isset ($_POST ['target_id'], $_POST ['target_key'], $_POST ['action']))
	{
		if (isset ($_POST ['actor']))
			$success = $_SESSION ['usr'] -> may ($_POST ['actor'], $_POST ['target_id'], $_POST ['target_key'], $_POST ['action']);
		else
			$success = $_SESSION ['usr'] -> may ($_POST ['target_id'], $_POST ['target_key'], $_POST ['action']);
	}
	
	if ($success)
		include (__DIR__ . DIRECTORY_SEPARATOR . 'true.txt');
	else
		include (__DIR__ . DIRECTORY_SEPARATOR . 'false.txt');
	
	//include (__DIR__ . DIRECTORY_SEPARATOR . 'form.html');
