<?php
$x=5; // 全局变量

function myTest()
{
$y=10; // 局部变量
echo "<p>Test variables inside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";
} 

myTest();

echo "<p>Test variables outside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";
?>