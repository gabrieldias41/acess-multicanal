<?php 
$page = filter_input(INPUT_GET, 'page');
$service = filter_input(INPUT_GET, 'service');

session_start();
require_once 'config/config.php';
require_once 'includes/auth_validate.php';
require_once('includes/header.php');

if($service != "") {
	if (file_exists('services/'.$service.'.php')) {
		require_once('services/'.$service.'.php');
	}
	else {
		require_once('services/ERROR.php');
	}
}

if($page != "") {
	if (file_exists($page.'.php')) {
		require_once($page.'.php');
	}
	else {
		require_once('services/ERROR.php');
	}
}

if($page !="" && $service !="") {
	require_once('services/ERROR.php');
}


?>
