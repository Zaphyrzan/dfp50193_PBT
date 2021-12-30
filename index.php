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
    <h1 class="titleColor">Kenari Travel Agency</h1>
    <div class="navbar">
        <a href="#Home">Home</a>
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
    <h2>Travel & Promotion</h2>

    <div id="Langkawi">
        <form action="result.php" method="post">
            <table>
                <div class="promotion">
                    <tr>
                        <td>
                            <div class="cardnew">
                                <h1>Langkawi Island Of Wonders</h1>

                                <ul>
                                    <h3>Package Details</h3>
                                    <li>Package for the Whole Family!</li>
                                    <li>Included Hotel reservation, transport and travel guide.</li>
                                    <li>3 Days and 2 Nights</li>
                                    <li>RM300</li>

                                    <p></p>
                                    <label for="">Select Package</label>
                                    <input type="radio" name="rad" id="rad1" value="Langkawi Package">

                                    <p></p>
                                    <label for="">Additional Option</label><br>
                                    <input type="checkbox" id="langkawi1" name="langkawi1" value="40">
                                    <label for="langkawi1">Breakfast at hotel - RM40</label><br>

                                    <input type="checkbox" id="langkawi2" name="langkawi2" value="50">
                                    <label for="langkawi2">Cable Car ticket - RM50</label><br>

                                    <input type="checkbox" id="langkawi3" name="langkawi3" value="100">
                                    <label for="langkawi3">Hot Air Balloon Trip - RM100</label><br>

                                    <p></p>
                                    <input type="submit" value="Book Now!">
                            </div>
                        </td>
                    </tr>
            </table>
        </form>
    </div>
    <p></p>

    <div id="Penang">
        <form action="result.php" method="post">
            <table>
                <div class="promotion">
                    <tr>
                        <td>
                            <div class="cardnew">
                                <h1>Penang The Lively Island</h1>

                                <ul>
                                    <h3>Package Details</h3>
                                    <li>Package for the Whole Family!</li>
                                    <li>Included Hotel reservation, transport and travel guide.</li>
                                    <li>3 Days and 2 Nights</li>
                                    <li>RM600</li>

                                    <p></p>
                                    <label for="">Select Package</label>
                                    <input type="radio" name="rad" id="rad2" value="Penang Package">

                                    <p></p>
                                    <label for="">Additional Option</label><br>
                                    <input type="checkbox" id="penang1" name="penang1" value="70">
                                    <label for="penang1">THE TOP Theme Park - RM70</label><br>

                                    <input type="checkbox" id="penang2" name="penang2" value="50">
                                    <label for="penang2">Butterfly Farm Tickets - RM50</label><br>

                                    <input type="checkbox" id="penang3" name="penang3" value="55">
                                    <label for="penang3">The Habitat Penang Hill - RM55</label><br>

                                    <p></p>
                                    <input type="submit" value="Book Now!">
                            </div>
                        </td>
                    </tr>
            </table>
        </form>
    </div>
    <p></p>

    <div id="Japan">
        <form action="result.php" method="post">
            <table>
                <div class="promotion">
                    <tr>
                        <td>
                            <div class="cardnew">
                                <h1>Japan The Land of The Rising Sun</h1>

                                <ul>
                                    <h3>Package Details</h3>
                                    <li>Family Package Round Trip</li>
                                    <li>Included Hotel reservation, transport and travel guide.</li>
                                    <li>5 Days and 4 Nights</li>
                                    <li>RM4300</li>

                                    <p></p>
                                    <label for="">Select Package</label>
                                    <input type="radio" name="rad" id="rad3" value="Japan Package">

                                    <p></p>
                                    <label for="">Additional Option</label><br>
                                    <input type="checkbox" id="japan1" name="japan1" value="1000">
                                    <label for="japan1">7 Day JR Bullet Train Pass - RM1000</label><br>

                                    <input type="checkbox" id="japan2" name="japan2" value="50">
                                    <label for="japan2">Trip to The Island Shrine - RM1200</label><br>

                                    <input type="checkbox" id="japan3" name="japan3" value="100">
                                    <label for="japan3">Trip to Mount Fuji - RM800</label><br>

                                    <p></p>
                                    <input type="submit" value="Book Now!">
                            </div>
                        </td>
                    </tr>
            </table>
        </form>
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