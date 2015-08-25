<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  </head>
<?php

  //receive the word user submit
  $type=$_REQUEST['type'];
  //what to do
  $xmldoc = new DOMDocument();
  $xmldoc->load("words.xml");
  
  if($type=="query"){
    //receive new word
    $query_word=$_REQUEST['engword'];
    //query xml
    $words=$xmldoc->getElementsByTagName("word");
    $isEnter=false;
    
    for($i=0;$i<$words->length;$i++)
    {
      //get word
      $word=$words->item($i);
      $word_en=getNodeVal($word,"en");
      if($query_word==$word_en)
      {
        $isEnter=true;
        echo $query_word."&nbsp;respond chinese is:".getNOdeVal($word,"ch")."<br/>";
      }
    }
    if(!$isEnter){
      echo "<br/>query no this word";
    }
    echo "<a href='wordView.php'>return mainpage</a>";
  }else if($type=="add"){
    //echo "add success";
    
    $eng_word=$_REQUEST['enword'];
    $ch_word=$_REQUEST['chword'];
    //add to xml file
    //get root element
    $root=$xmldoc->getElementsByTagName("words")->item(0);
    //create word node
    $new_word=$xmldoc->createElement("word");
    //create new_word_en node
    $new_word_en=$xmldoc->createElement("en");
    $new_word_en->nodeValue=$eng_word;
    $new_word_ch=$xmldoc->createElement("ch");
    $new_word_ch->nodeValue=$ch_word;
    //mount follow the layer relationship
    $new_word->appendChild($new_word_en);
    $new_word->appendChild($new_word_ch);
    $root->appendChild($new_word);
    $root->appendChild($new_word);
    $b=$xmldoc->save("words.xml");
    if(!$b){
      echo "add failure";
    }else{
      echo "add success";
      echo "<a href='wordView.php'>return mainpage</a>";
    }
  }

  function getNodeVal(&$MyNode,$tagName){
    return $MyNode->getElementsByTagName($tagName)->item(0)->nodeValue;
  }
?>

</html>