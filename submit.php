<?php

require_once './vsword/VsWord.php';
VsWord::autoLoad();

$doc = new VsWord(); 
$parser = new HtmlParser($doc);
$parser->parse($_POST['content']);

$doc->saveAs('htmlparser.docx'); 

?>