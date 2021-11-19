<?php
$x = 100;
$y = 100;
$z = '100';

echo "<h1>PHP Arithmetic Operators</h1>";
echo "<h1>x = $x and y = $y<br /></h1>";
echo "<hr color='red' size='4px' />";

echo "x == z : ", var_dump($x == $z),"<br />";
echo "x === z : ", var_dump($x === $z),"<br />";
echo "x <=> z : ", var_dump($x <=> $z),"<br />";
echo "x <=> y : ", var_dump($x <=> $y),"<br />";
echo "x > y : ", var_dump($x > $y),"<br />";
echo "x < y : ", var_dump($x < $y),"<br />";
echo "x >= y : ", var_dump($x >= $y),"<br />";
echo "x <= y : ", var_dump($x <= $y),"<br />";
echo "x != y : ", var_dump($x != $y),"<br />";
echo "x !== z : ", var_dump($x !== $z),"<br />";

?>