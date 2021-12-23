<?php
// $langkawi1 = $_POST['langkawi1'];
// $langkawi2 = $_POST['langkawi2'];
// $langkawi3 = $_POST['langkawi3'];

// $total = $price * $quantity;

//function to calculate choices that user pick from checkbox
function calculate()
{
    $langkawiTotal = 0;

    if (isset($_POST['langkawi1'])) {
        $langkawi1 = $_POST['langkawi1'];
        $langkawiPrice1 = 40;
        if (isset($_POST['langkawi2'])) {
            $langkawi2 = $_POST['langkawi2'];
            $langkawiPrice2 = 50;

            if (isset($_POST['langkawi3'])) {
                $langkawi3 = $_POST['langkawi3'];
                $langkawiPrice3 = 100;
                $langkawiTotal = $langkawiPrice1 + $langkawiPrice2 + $langkawiPrice3;

            }else{
                $langkawiTotal = $langkawiPrice1 + $langkawiPrice2;
            }

        }
        $langkawiTotal = $langkawiPrice1;
    } else{
        $langkawiTotal = 0;
        
    }

        session_start();
        $_SESSION['langkawi1'] = $langkawi1;
        $_SESSION['langkawi2'] = $langkawi2;
        $_SESSION['langkawi3'] = $langkawi3;
        $_SESSION['langkawiTotal'] =  $langkawiTotal;
        header('location: result.php');

    
}
