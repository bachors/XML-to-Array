<?php

// Just4Fun
// Small & simple easy PHP function to convert xml to array using YQL.
// Code by iBacor.com 2016

function xmltoarray($urlxml = ""){
	$yql = "http://query.yahooapis.com/v1/public/yql";
	$yql_query = "SELECT content FROM data.headers WHERE url='$urlxml' and ua='#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36'";  
	$yql_query_url = $yql . "?q=" . urlencode($yql_query). "&format=json&env=http://datatables.org/alltables.env";	
	$session = curl_init($yql_query_url);  
	curl_setopt($session, CURLOPT_RETURNTRANSFER,true);      
	$json = curl_exec($session);
	$array = json_decode($json);
	return $array;
}
	
?>
