<?php

	// include xmltoarray.php
	require('xmltoarray.php');

	$xml = 'http://ibacor.com/rss.xml';
	$array = xmltoarray($xml);
	
	/* Array
	print_r($array);
	*/
	
	// JSON
	echo json_encode($array);
	
?>
