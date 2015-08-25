<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  </head>
    <img src="1.png" width="200px"/>
    <h1>query word</h1>
    <form action="wordProcess.php" method="post">
        please input english word:<input type="text" name="engword"/>
        <input type="hidden" name="type" value="query"/>
        <input type="submit" value="cha"/>
    </form>
    <h1>add word</h1>
    <form action="wordProcess.php" method="post">
    input english<input type="text" name="enword"/><br/>
    input chinese<input type="text" name="chword"/><br/>
    <input type="hidden" name="type" value="add"/>
    <input type="submit" value="jia"/>
</html>