<?php
$num1 = intval($_REQUEST['num1']);
$num2 = intval($_REQUEST['num2']);


IF(isset($_REQUEST['b1'])){
    $data = $num1 + $num2;
    echo $data;
}
IF(isset($_REQUEST['b2'])){
    $data = $num1 - $num2;
    echo $data;
}
IF(isset($_REQUEST['b3'])){
    $data = $num1 * $num2;
    echo $data;
}
IF(isset($_REQUEST['b4'])){
    $data = $num1 / $num2;
    echo $data;
}