<?php 
$simplexml=new SimpleXmlElement('<?xml version="1.0"?><books/>');
$book1=$simplexml->addChild('book');
$book1->addChild("book");
$book1->addChild("booktitle","bookno1");
$book1->addChild("publicationdate",2007);
$mybook1=$book1->addChild("author");
$mybook1->addChild("name","helen");
$book2=$simplexml->addChild('book');
$book2->addChild("book");
$book2->addChild("booktitle","bookno2");
$book2->addChild("publicationdate",2007);
file_put_contents("books.xml", $simplexml->asXML());
?>