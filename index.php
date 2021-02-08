<?php
$txt = "Java Python C++ PHP!";
echo strrev($txt)."<br>";
echo  $txt;
echo "<br>";
echo "<br>";
$favcolor = "blue";
switch ($favcolor) {
case 'red':
echo "You favorite color is red";
break;
case 'blue':
echo "You favorite color is blue!";
break;
case 'green':
echo "You favorite color is green!";
break;
default:
echo "You favorite color is neither red, blue, nor green!";
break;
}
echo date("Y/m/d/h:i:s");
?>
