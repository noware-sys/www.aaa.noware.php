<?php
	include (__DIR__ . DIRECTORY_SEPARATOR . 'form.html');
	require_once (__DIR__ . DIRECTORY_SEPARATOR . 'act.php');
	
	echo 'User ID: ' . $_SESSION ['usr'] -> id . '<br></br>' . PHP_EOL;