<?php

require_once 'vendor/autoload.php';

function parse_HTML_to_docx($content) {
  // Creates a new DOCX Object
  $phpWord = new \PhpOffice\PhpWord\PhpWord();

  // Add a empty section
  $section = $phpWord->addSection();

  // Add the HTML content to the empty section
  \PhpOffice\PhpWord\Shared\Html::addHtml($section, $content);

  // Saving the document as DOCX file
  $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
  $objWriter->save('curriculum.docx');
}

parse_HTML_to_docx($_POST['content']);

?>