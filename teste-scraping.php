<?php
include('simple_html_dom.php');

$html = file_get_html('http://profdanielbrandao.wordpress.com');

foreach($html->find('img') as $imagem)
foreach($html->find('a') as $url)
	echo "<a href=". $url->href . ">". "<img src=" .$imagem->src . "/><br>" ."</a><br>";


//foreach($html->find('p') as $p)
 //   echo $p;
?>