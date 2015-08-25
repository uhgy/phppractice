<?php

  $lib=simplexml_load_file("books.xml");
  
  //var_dump($lib);
  //get books
  $books=$lib->book;
  echo count($books)."<br/>";
  $book=$books[0];
  //echo $book->title."||".$book->author."||".$book->code;
  for($i=0;$i<count($books);$i++){
    $book=$books[$i];
    echo $book['house']."--".$book["house2"]."--";
    echo $book->title."||".$book->author."||".$book->code."<br/>";
    
  }
  // combined with xpath
  
  $titles=$lib->xpath("//title");
  
  foreach($titles as $val){
    echo "<br/>".$val;
  }
  
?>