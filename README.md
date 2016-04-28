# XML-to-Array
Small &amp; simple easy PHP function/helper to convert xml to array using YQL.
<h2>Usage:</h2>
<pre>
// include xmltoarray.php
require('xmltoarray.php');
</pre>
<h3>How to convert XML to Array:</h3>
<pre>
$xml = 'http://anu.kom/data.xml';
$array = xmltoarray($xml);
print_r($array);
</pre>
<h3>How to convert XML to JSON:</h3>
<pre>
$xml = 'http://anu.kom/data.xml';
$array = xmltoarray($xml);
echo json_encode($array);
</pre>
