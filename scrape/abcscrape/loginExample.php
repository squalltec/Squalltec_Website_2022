<?php
	include "simple_html_dom.php";

	$postFields = array(
		"checkLogin" => "1",
		"email" => "senaidbacinovic@gmail.com",
		"password" => "enter",
		"courseID" => "1"
	);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://codingpassiveincome.com/students/login.php");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postFields));
	curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
	$response = json_decode(curl_exec($ch));

	if ($response->status) {
		curl_setopt($ch, CURLOPT_URL, "https://codingpassiveincome.com/students/viewLesson.php?id=".$response->firstLesson);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
		$response = curl_exec($ch);

		$html = new simple_html_dom();
		$html->load($response);

		foreach($html->find('a[href^=viewLesson.php?id=]') as $link)
			echo $link->plaintext . "<br>";
	}

	curl_close($ch);
?>
