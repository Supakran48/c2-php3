<?php
$x = 10;
$y = 10;
$z = 20;
$m = 20;

echo "<h1>PHP Arithmetic Operators</h1>";
echo "<h1>x = $x and y = $y and z = $z and z = $m<br /></h1>";
echo "<hr color='red' size='4px' />";

echo "*****Pre ++x = $x *****<br />";
echo " ++x : ", ++$x,"<br />";//Pre, 10
echo " ++x : ", ++$x,"<br />";//Pre, 11
echo " ++x : ", ++$x,"<br />";//Pre, 12

echo "*****Post y++ = $x *****<br />";
echo " y++ : ", $y++,"<br />";//Post, 10
echo " y++ : ", $y++,"<br />";//Post, 12
echo " y++ : ", $y++,"<br />";//Post, 13

echo "*****Pre --z = $z *****<br />";
echo " --z : ", --$z,"<br />";//Pre, 19
echo " --z : ", --$z,"<br />";//Pre, 18
echo " --z : ", --$z,"<br />";//Pre, 17

echo "*****Pre m-- = $m *****<br />";
echo " m-- : ", $m--,"<br />";//Pre, 20 = 20
echo " m-- : ", $m--,"<br />";//Pre, 20 - 19
echo " m-- : ", $m--,"<br />";//Pre, 19 = 18
echo " m-- : ", $m--,"<br />";//Pre, 18 = 17
?>