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
    $op3 = 'Hot Air Balloon Trip';
} else {
    $cb3 = 0;
    $op3 = '';
}
if (isset($_POST['penang1'])) {
    $cb4 = $_POST['penang1'];
    $op4 = 'THE TOP Theme Park - RM70';
} else {
    $cb4 = 0;
    $op4 = '';
}
if (isset($_POST['penang2'])) {
    $cb5 = $_POST['penang2'];
    $op5 = 'Butterfly Farm Tickets - RM50';
} else {
    $cb5 = 0;
    $op5 = '';
}
if (isset($_POST['penang3'])) {
    $cb6 = $_POST['penang3'];
    $op6 = 'The Habitat Penang Hill - RM55';
} else {
    $cb6 = 0;
    $op6 = '';
}
if (isset($_POST['japan1'])) {
    $cb7 = $_POST['japan1'];
    $op7 = '7 Day JR Bullet Train Pass - RM1000';
} else {
    $cb7 = 0;
    $op7 = '';
}
if (isset($_POST['japan2'])) {
    $cb8 = $_POST['japan2'];
    $op8 = 'Trip to The Island Shrine - RM1200';
} else {
    $cb8 = 0;
    $op8 = '';
}
if (isset($_POST['japan3'])) {
    $cb9 = $_POST['japan3'];
    $op9 = 'Trip to Mount Fuji - RM800';
} else {
    $cb9 = 0;
    $op9 = '';
}
function calcTotal($cb1, $cb2, $cb3, $price)
{
    $total = $price + $cb1 + $cb2 + $cb3;
    return $total;
}
?>