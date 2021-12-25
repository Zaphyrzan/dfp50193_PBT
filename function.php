<?php
$rad = $_POST['rad'];
if (isset($_POST['langkawi1'])) {
    $cb1 = $_POST['langkawi1'];
    $op1 = 'Breakfast at hotel';
} else {
    $cb1 = 0;
    $op1 = '';
}
if (isset($_POST['langkawi2'])) {
    $cb2 = $_POST['langkawi2'];
    $op2 = 'Cable Car ticket';
} else {
    $cb2 = 0;
    $op2 = '';
}
if (isset($_POST['langkawi3'])) {
    $cb3 = $_POST['langkawi3'];
    $cb3 = 'Hot Air Balloon Trip';
} else {
    $cb3 = 0;
    $op3 = '';
}

function calcTotal($cb1, $cb2, $cb3, $price)
{
    $total = $price + $cb1 + $cb2 + $cb3;
    return $total;
}
?>