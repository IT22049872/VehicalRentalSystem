<?php

    //connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'autolanka');
    
    //check connection
    if(!$conn) {
        echo "<script>alert('Connection Fail!');</script>";
    }

    //send data
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $number = $_POST['number'];
        $street = $_POST['street'];
        $town = $_POST['town'];
        $city = $_POST['city'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_pass = $_POST['confirm-password'];

        if($password != $confirm_pass) {
            echo "<script>alert('Password not match');</script>";
        }

        $sql = "INSERT INTO user_table (Firstname, Lastname, Birthday, Number, Street, Town, City, Username, Password) 
                VALUES ('$firstname', '$lastname', '$birthday', '$number', '$street', '$town', '$city', '$username', '$password')";

        try {
            mysqli_query($conn, $sql);
            echo "<script>alert('Registration Success');";
        } 
        catch (mysqli_sql_exception) {
            echo "<script>alert('Registration Failed');</script>";
        }
    }
    mysqli_close($conn);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device- width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Autolanka</title>
</head>
<body>

    <!-- main headding row -->
    <div class="head">
        <!-- heading left -->
        <div class="headingLeft">
            <div class="headingLogoContainer">
                <img class="headingLogo" src="asset/home/logo.png" alt="">
            </div>
        </div>

        <!-- heading center -->
        <div class="headingCenter">
            <a class="headingCenterItem" href="#">Home</a>
            <a class="headingCenterItem" href="src/aboutus.html">About</a>
            <a class="headingCenterItem" href="src/services.html">Services</a>
            <a class="headingCenterItem" href="src/contactus.html">Contact</a>
            <a href="src/item.html">item page</a>
        </div>

        <!-- heading right -->
        <div class="headingRight">
            <div class="headRightItem">Hotline +94 717654324</div>
        </div>
    </div>

    <!-- main body -->
    <div class="body">

        <!-- option menu -->
        <div class="optionMenuContainer">
            <!-- video background -->
            <video autoplay muted loop src="asset/home/home-background-video.mp4"></video>

            <!-- form -->
            <form class="optionMenu" action="php/homeOption.php">
                <!-- pickup/return location -->
                <label class="optionMenuText" for="">Pickup / Return Location</label><br>
                <input type="text" placeholder="SLIIT Uni - Pittugala" class="optionMenuInput">

                <div class="optionMenuBottom">
                    <!-- pickup/return/number of days -->
                    <div class="optionMenuLeft">
                        <label class="optionMenuText" for="">Pickup Date</label><br>
                        <input class="optionMenuInput" type="date" placeholder="03/08/2023"><br>
                        <label class="optionMenuText" for="">Return Date</label><br>
                        <input class="optionMenuInput" type="date" placeholder="06/08/2023"><br>
                        <label class="optionMenuText" for="">Number of Days</label><br>
                        <input class="optionMenuInput" type="number" placeholder="03">
                    </div>
                    <!-- pickup/return time/vehicle type -->
                    <div class="optionMenuRight">
                        <label class="optionMenuText" for="">Pickup Time</label><br>
                        <input class="optionMenuInput" type="time" placeholder="08:00"><br>
                        <label class="optionMenuText" for="">Return Time</label><br>
                        <input class="optionMenuInput" type="time" placeholder="13:00"><br>
                        <label class="optionMenuText" for="">Vehicle Type</label><br>
                        <select class="optionMenuInput">
                            <option value="all">SUVs & Cabs</option>
                            <option value="suv">Cars</option>
                            <option value="suv">Vans & Busses</option>
                            <option value="suv">MotorBikes</option>
                            <option value="suv">Tuk Tuks</option>
                            <option value="suv">Utility Vehicles</option>
                        </select>
                        <div class="optionMenuSubmitBtn">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- why choose us -->
        <div class="chooseContainer">
            <div class="chooseBox">
                <!-- title -->
                <span class="chooseBoxTitle">Why Choose Us ?</span>
                <!-- body items -->
                <div class="chooseBoxBody">
                    <div class="chooseBoxBodyItem">
                        <img src="asset/home/car.png" class="chooseBoxBodyItemImage">
                        <div class="chooseBoxBodyItemText">Over 500 Vehicles</div>
                    </div>
                    <div class="chooseBoxBodyItem">
                        <img src="asset/home/person.png" class="chooseBoxBodyItemImage">
                        <div class="chooseBoxBodyItemText">Our Strength</div>
                    </div>
                    <div class="chooseBoxBodyItem">
                        <img src="asset/home/star.png" class="chooseBoxBodyItemImage">
                        <div class="chooseBoxBodyItemText">Insurance</div>
                    </div>
                    <div class="chooseBoxBodyItem">
                        <img src="asset/home/person.png" class="chooseBoxBodyItemImage">
                        <div class="chooseBoxBodyItemText">24/7 Breakdown Service</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact us -->
        <div class="bodyContactUsContainer">
            <div class="bodyContactUs">
                <span class="bodyContactUsTitle">You have any questions or need additional information ?</span>
                <!-- contact options -->
                <div class="bodyContactUsOptions">
                    <button onclick="location.href='src/contactus.html'" class="bodyContactUsButton">Contact Us</button>
                    <img src="asset/home/whatsapp.png" class="bodyContactUsicon" alt="">
                    <img src="asset/home/facebook-logo-2019.png" alt="" class="bodyContactUsicon">
                </div>
            </div>
        </div>

        <!-- membership -->
        <div class="bodyMembershipContainer">
            <div class="bodyMembership">
                <!-- membership left side -->
                <div class="bodyMembershipOptions">
                    <img src="asset/home/logo-black.png" alt="" class="bodyMembershipIcon">
                    <span class="bodyMembershipTitle">Stay with us for membership Benifits</span>
                </div>
                <!-- membership right side -->
                <div class="bodyMembershipOptions">
                    <button onclick="location.href = 'src/login.html'" class="bodyMembershipBtn">Login</button>
                    <a href="src/aboutus.html" class="bodyMembershipBtnTxt">Who are we ?</a>
                </div>
            </div>
        </div>
        
    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by Autolanka
    </div>
    
</body>
</html>