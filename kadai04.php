<?php
function double($num){
    $result = $num *2;
    return $result;
}
echo  double(10);
?>

<?php
function f($a,$b) {
    $result = $a + $b;
    return $result;
}
echo f(30,10);
?>

<?php
$arr = array(1,3,5,7,9);

$total=1;
foreach ($arr as $n){
    $total *= $n;
}
echo $total;
?>

<?php
echo max($arr);
?>

