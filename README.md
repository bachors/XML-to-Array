# XML-to-Array
Small &amp; simple easy PHP function/helper to convert xml to array using YQL.
<h2>Usage:</h2>
<pre>
// include xmltoarray.php
require('xmltoarray.php');
</pre>
<h3>How to convert XML to Array <a href="http://ibacor.com/tools/xml-converter?xml=http://ibacor.com/rss.xml&format=array">DEMO</a>:</h3>
<pre>
$xml = 'http://anu.kom/data.xml';
$array = xmltoarray($xml);
print_r($array);
</pre>
<h3>How to convert XML to JSON <a href="http://ibacor.com/tools/xml-converter?xml=http://ibacor.com/rss.xml&format=json">DEMO</a>:</h3>
<pre>
$xml = 'http://anu.kom/data.xml';
$array = xmltoarray($xml);
echo json_encode($array);
</pre>
