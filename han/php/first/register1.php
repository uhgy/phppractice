<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>

<h1>Regisration</h1>
<form action="request1.php" method="post">
username：<input type="text" name="username"/><br/>
password：<input type="password" name="password"/><br/>
sex：<input type="radio" name="sex" value="female"/>female <input type="radio" name="sex" value="male" />male<br/>

what do you like?<br/>
<input type="checkbox" name="hobby[]" value="sing">sing
<input type="checkbox" name="hobby[]" value="dance">dance
<input type="checkbox" name="hobby[]" value="swim">swim
<input type="checkbox" name="hobby[]" value="ride">ride
<br/>

where are you from:
<select name="city">
<option value="beijing">beijing</option>
<option value="tianjin">tianjin</option>
<option value="nanjing">nanjing</option>
<select>
<br/>
personal introduction<br/>
<textarea rows="10" name="intro"cols="20">
</textarea><br/>

please choose pictures<br/>
<input type="file" name="myphoto"/><br />

<input type="submit" value="submit"/>
</form>
</html>