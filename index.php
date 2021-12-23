<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kenari Travel Agency</title>
</head>

<body>
    <h1>Kenari Travel Agency</h1>
    <div class="navbar">
        <a href="#Home">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Service</button>
            <div class="dropdown-content">
                <a href="#Japan">Japan</a>
                <a href="#China">China</a>
                <a href="#Taiwan">Taiwan</a>
            </div>
        </div>
        <a href="#Contact">Contact Us</a>
    </div>
    <h4>KL International Airport (KLIA) 64000 KLIA, Sepang Selangor Darul Ehsan, Malaysia</h4>
    <h2>Travel & Promotion</h2>

    <form action="function.php" method="post">
        <table>
            <div class="promotion">
            <tr>
                <td>
                    <h1>Langkawi Island Of Wonders</h1>
                    <ul >
                        <li>Package for the Whole Family!</li>
                        <li>Included Hotel reservation, transport and travel guide.</li>
                        <li>3 Days and 2 Nights</li>
                        <li>RM300</li>
                </td>
                <td>
                <input type="checkbox" id="langkawi1" name="langkawi1" value="langkawi1">
                <label for="langkawi1">Breakfast at hotel - RM40</label><br>
                <input type="checkbox" id="langkawi2" name="langkawi2" value="langkawi2">
                <label for="langkawi2">Cable Car ticket - RM50</label><br>
                <input type="checkbox" id="langkawi3" name="langkawi3" value="langkawi3">
                <label for="langkawi3">Hot Air Balloon Trip - RM100</label><br>
                <input type="submit" value="Submit">
                </td>
            </tr>
            <!-- <tr>
                <td>
                    <h1>Penang Island Of Technology</h1>
                <td>
                    <ul>
                        <li>Package for the Whole Family!</li>
                        <li>Included Hotel reservation, transport and travel guide.</li>
                        <li>3 Days and 2 Nights</li>
                        <li>RM200</li>
                </td>
                <td>
                    <input type="checkbox" id="penang1" name="penang1" value="penang1">
                    <label for="penang1">Breakfast at hotel</label><br>
                    <input type="checkbox" id="penang2" name="penang2" value="penang2">
                    <label for="penang2">Cable Car ticket</label><br>
                    <input type="checkbox" id="penang3" name="penang3" value="penang3">
                    <label for="penang3">Hot Air Balloon Trip</label><br>
                    <input type="submit" value="Submit">
                </td>
            </tr> -->
        </table>
    </form>

    <div class="copyright">
        &copy; 2021 All Right Reserved | Kenari Travel Agency
    </div>
</body>

</html>