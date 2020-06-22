<?php
$name = 'yusuke';
if ($name =='yusuke') {
    echo '私はあなたの名前です';
}   else {
    echo 'あなたの名前ではありません';
}
?>

<?php
for ($ii = 1; $ii <= 10000; $ii++) {
    echo $ii;
}

?>

<?php
$fruits = array('orange','apple','banana','pineapple','cherry');
foreach ($fruits as $f){
    echo $f;
}
?>

<?php
for ($i = 1; $i <= 100; $i++){
    if ($i % 5 == 0){
    echo $i;
    }
}

?>
