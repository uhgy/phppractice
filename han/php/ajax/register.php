<html>
<head>
<title> user register</title>
<meta http-equip="content-type" content="text/html;charset=utf-8"/>
<script type="text/javascript">

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
  
  //check if username exists
  function checkName(){
    
    myXmlHttpRequest=getXmlHttpObject();//line1
    if(myXmlHttpRequest){

      //first parameter :"get"/"post"
      //second parameter: url,which page to send ajax request(http, however no refresh)
      //third : true asyncronize ;false syncronize
      var url="registerProcess.php";
      var data="username="+$('username').value;
      
      
      myXmlHttpRequest.open("post",url,true);
      
      myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
      //callback
      myXmlHttpRequest.onreadystatechange=chuli;
      //if the request is get, then fill in null
      //if post, then fill in actual data 
      myXmlHttpRequest.send(data);//line 2

    }
  }
  
  function $(id){
    return document.getElementById(id);
  }
  
  //line4
  function chuli(){
    //window.alert("callback"+myXmlHttpRequest.readyState);
    //get out the data returned by registerPro.php page
    if(myXmlHttpRequest.readyState==4){
      //window.alert("server return "+myXmlHttpRequest.responseText);
      //$('myres').value=myXmlHttpRequest.responseText;
      //window.alert(myXmlHttpRequest.responseXML);
      //var mes=myXmlHttpRequest.responseXML.getElementsByTagName("mes");
      //window.alert(mes.length);
      //mes[0]->first mes node
      //childNode[0]first subnode of first mes node
      //var mes_val=mes[0].childNodes[0].nodeValue;
      //$('myres').value=mes_val;
      var mes=myXmlHttpRequest.responseText;
      //transfer to array
      var mes_obj=eval("("+mes+")");
      $('myres').value=mes_obj[1].id;

    }
  }
  
</script>
</head>

<body>
  <form action="???" method="post">
    username:<input type="text"  onkeyup="checkName()" name="username1" id="username"/>
    <input type="button"  onclick="checkName();" value="authenticate user name">
    <input style="border-width: 0;color: red" type="text" id="myres">
    <br/>
    password:<input type="password" name="password"><br/>
    email:<input type="text" name="email"><br/>
    <input type="submit" value="register">
  </form>
  <form action="??" method="post">
    username:<input type="text" name="username2">
    
    <br/>
    password:<input type="password" name="password"><br>
    email:<input type="text" name="email"><br/>
    <input type="submit" value="register">
  </form>

</body>
</html>