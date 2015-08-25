<?php

  $xmldoc=new DOMDocument();
  $xmldoc->load("test.xml");
  $domXPath=new DOMXPath($xmldoc);
  
  $node_list=$domXPath->query("/AAA/DDD/BBB");
  
  echo $node_list->length;
  
  for($i=0;$i<$node_list->length;$i++){
    $node=$node_list->item($i);
    echo $node->tagName."<br/>";
  }
  
?>