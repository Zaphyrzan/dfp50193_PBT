<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Details Result</title>
</head>

<body>
    <h1 class="titleColor">Kenari Travel Agency</h1>
    <div class="navbar">
        <a href="index.php">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Service</button>
            <div class="dropdown-content">
                <a href="#Langkawi">Langkawi</a>
                <a href="#Penang">Penang</a>
                <a href="#Japan">Japan</a>
            </div>
        </div>
        <a href="#Contact">Contact Us</a>
    </div>
    <h2>Package Details</h2>
    <div class="resultcard">
        <?php
        if ($rad == 'Langkawi Package') {
            $price = 300;
        ?>
            Service Selected: <br>
            <div class="textColorResult">
                <?php echo $rad; ?> <br><br>
            </div>
            Add On: <br>
            <div class="textAddOn">
                <?php echo $op1 ?> <br> <?php echo $op2 ?> <br> <?php echo $op3; ?> <br><br>
            </div>
            Total Price:
            <div class="textColorResult">
            RM<?php echo calcTotal($cb1, $cb2, $cb3, $price);
                                ?>
            </div>
        <?php
        } else if ($rad == 'Penang Package') {
            $price = 600
        ?>
            Service Selected: <br>
            <div class="textColorResult">
                <?php echo $rad; ?> <br><br>
            </div>
            Add On: <br>
            <div class="textAddOn">
                <?php echo $op4 ?> <br> <?php echo $op5 ?> <br> <?php echo $op6; ?> <br><br>
            </div>
            Total Price:
            <div class="textColorResult">
            RM<?php echo calcTotal($cb4, $cb5, $cb6, $price);
                                ?>
            </div>
        <?php
        } else if ($rad == 'Japan Package') {
            $price = 4300
        ?>
            Service Selected: <br>
            <div class="textColorResult">
                <?php echo $rad; ?> <br><br>
            </div>
            Add On: <br>
            <div class="textAddOn">
                <?php echo $op7 ?> <br> <?php echo $op8 ?> <br> <?php echo $op9; ?> <br><br>
            </div>
            Total Price: 
            <div class="textColorResult">
            RM<?php echo calcTotal($cb7, $cb8, $cb9, $price);
                                ?>
            </div>
        <?php
        } else {
        ?>
            <script>
                alert('Please select a package');
                window.location = 'index.php';
            </script>
        <?php
        }
        ?>
    </div>
    <p></p>

    <div id="Contact">
        <div class="copyrightcard">
            <a>KL International Airport (KLIA) 64000 KLIA, Sepang Selangor Darul Ehsan, Malaysia</a>
            <p></p>
            <a>Call us at</a>
            <a>+60 11 6554 6909</a>
        </div>
    </div>

    <div class="copyright">
        &copy; 2021 All Right Reserved | Kenari Travel Agency
    </div>

</body>

</html>