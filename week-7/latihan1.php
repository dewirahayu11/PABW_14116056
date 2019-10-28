<?php 
$x = 10;
$y = 60;

function tukar(&$x,&$y){
$temp = $x;
$x = $y;
$y = $temp;
}
echo '$x = ', $x, ', $y =',$y,'<br/>';

 ?>