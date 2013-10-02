<?php


$class = "home"; 
$content = 'SG example content';



if ($detect->isMobile()){
	$class = "mobile"; 
	include DIR_VIEW.'/mobile.php';
} else {
	$class = "home"; 
	$settings->setPage("Home");
	include DIR_VIEW.'/index.php';
}

?>
