<?php
	//require_once (__DIR__ . DIRECTORY_SEPARATOR . '.lib' . DIRECTORY_SEPARATOR . 'usr.php');
	require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/lib/db.noware.php/www.db.php');
	require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/lib/aaa.noware.php/www.usr.php');
	require_once (__DIR__ . DIRECTORY_SEPARATOR . '.cfg' . DIRECTORY_SEPARATOR . 'db.php');
	//require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/aaa.noware.php/.cfg/www.db.php');
	//require_once ($db_src);
	
	session_start ();
	
	//echo '<pre>';
	
	if (!isset ($_SESSION ['usr']))
	{
		$_SESSION ['usr'] = new noware\usr ();
		
		$_SESSION ['usr'] -> db -> connect ($exception, $db ['dsn'], $db ['usr'], $db ['key'], $db ['cfg']);
		
		$_SESSION ['usr'] -> authnt ('guest');
	}
	
	//var_dump ($_SESSION);
	
	//echo '</pre>';
