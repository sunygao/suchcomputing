<?php


$class = "home"; 
$content = 'SG example content';



if ($detect->isMobile()){
	$class = "mobile"; 
	$settings->setPage("Projects");
	include DIR_VIEW.'/mobile.php';


} else {
	$class = "home"; 
	$settings->setPage("Home");
	include DIR_VIEW.'/index.php';
}

?>
