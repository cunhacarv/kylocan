<?php
$x = $_GET[“num1”];
$y = $_GET[“num2”];
$op = $_GET[“operacao”];
if($op==”soma”)
$z = $x + $y;
elseif($op==”subtracao”)
$z = $x – $y;
elseif($op==”multiplicacao”)
$z = $x*$y;
elseif($op==”divisao”)
$z = $x/$y;
else
$z = pow($x, $y);
echo “O resultado e: $z”;