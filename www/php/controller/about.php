<?php

$settings->setPage("About");
$class = "about"; 
$content = 'SG example content for about';



if ($detect->isMobile()){
	$class = "mobile about"; 
} else {
	$class = "about"; 
}
include DIR_VIEW.'/about.php';

?>
