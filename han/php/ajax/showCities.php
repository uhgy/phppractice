<html>
<head>
  <meta http-equiv="content-type" content="text/html";charset=utf-8/>
  <script type="text/javascript">
  
  //create ajax engine
    function getXmlHttpObject(){
    var xmlhttp;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }else{// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      
    }
    return xmlhttp;
  }
  
  
  var myXmlHttpRequest="";
  
  function getCities(){
      myXmlHttpRequest=getXmlHttpObject();
      
      if(myXmlHttpRequest){
        
        var url="showCitiesPro.php";
        var data="province="+$('sheng').value;
        
        myXmlHttpRequest.open("post",url,true);//asyncronize
        
        myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        //callback
        myXmlHttpRequest.onreadystatechange=chuli;
        //send
        myXmlHttpRequest.send(data);
        
      }
  }

  function $(id){
    return document.getElementById(id);
  }
  
  function chuli(){
    if(myXmlHttpRequest.readyState==4){
      
      if(myXmlHttpRequest.status==200){
        //get the data returned by server
        window.alert(myXmlHttpRequest.responseXML);      
      }
    }
  }
  


  </script>
</head>
<body>
    <select id="sheng" onchange="getCities();">
    <option value="ooo">---sheng---</option>
    <option value="zhejiang">zhejiang</option>
    <option value="jiangsu" >jiangsu</option>
    </select>
    <select id="city">
    <option value="">--city--</option>
    </select>
    
     <select id="county">
    <option value="">--county--</option>
    </select>
    

    
</body>

</html>