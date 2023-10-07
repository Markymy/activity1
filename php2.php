<?php
function SquareRoots($N){
   return array_map('SquareRoots',range(1,$N));
}

$N = 10;
$SquareRootsarry = SquareRoots($N);
print($SquareRootsarry);
?>