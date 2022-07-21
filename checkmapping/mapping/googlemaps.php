<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('https://wego.here.com/directions/mix/Lavender-Tower/Sharjah,-United-Arab-Emirates');

// find all p
$ar=array();
foreach($html->find('div') as $e) 
    echo $e->plaintext;
	

?>