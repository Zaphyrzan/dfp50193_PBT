<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Result</title>
</head>

<body>
    <h1>Information</h1>

    <table>
        <?php
        if ($rad == 'Langkawi Package') {
            $price = 300;
        ?>
            Service Selected: <br> <?php echo $rad; ?> <br><br>
            Add On: <br> <?php echo $op1 ?> <br> <?php echo $op2 ?> <br> <?php echo $op3; ?> <br><br>
            Total Price: RM<?php echo calcTotal($cb1, $cb2, $cb3, $price);
        } 
        else if ($rad == 'Penang Package'){
            $price = 600
            ?>
            Service Selected: <br> <?php echo $rad; ?> <br><br>
            Add On: <br> <?php echo $op4 ?> <br> <?php echo $op5 ?> <br> <?php echo $op6; ?> <br><br>
            Total Price: RM<?php echo calcTotal($cb4, $cb5, $cb6, $price);
        }
        else if ($rad == 'Japan Package'){
            $price = 4300
            ?>
            Service Selected: <br> <?php echo $rad; ?> <br><br>
            Add On: <br> <?php echo $op7 ?> <br> <?php echo $op8 ?> <br> <?php echo $op9; ?> <br><br>
            Total Price: RM<?php echo calcTotal($cb7, $cb8, $cb9, $price);
        } else{

        }
        ?>


    </table>

</body>

</html>