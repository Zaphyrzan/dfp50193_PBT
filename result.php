<?php
session_start();
$langkawi1 = $_SESSION['langkawi1'];
$langkawi2 = $_SESSION['langkawi2'];
$langkawi3 = $_SESSION['langkawi3'];
$langkawiTotal = $_SESSION['langkawiTotal'];
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
        <tr>
            <td>Family Breakfast:</td>
            <td><?php echo $langkawi1; ?></td>
        </tr>
        <tr>
            <td>Cable Car:</td>
            <td><?php echo $langkawi2; ?></td>
        </tr>
        <tr>
            <td>Hot Air Balloon:</td>
            <td><?php echo $langkawi3; ?></td>
        </tr>
        <tr>
            <td>Total Cost:</td>
            <td><?php echo $langkawiTotal; ?></td>
        </tr>


    </table>

   <!-- <br><br> <a href="editdata.php">Edit information</a>-->
</body>

</html>