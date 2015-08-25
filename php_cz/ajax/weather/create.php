<?php
$code = $_POST ['code'];
$file = "http://m.weather.com.cn/atad/" . $code . ".html";
$content = file_get_contents ( $file );
echo $content;
