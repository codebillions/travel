<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>airways</title>
    <link rel="stylesheet" href="ticket.css">
    <link rel="stylesheet"
        href="file:///C:/Users/James%20Niyi/Documents/JamesNiyi/font-awesome-4.7.0/css/font-awesome.css">
</head>

<body>
    <section class="ticketmenu">
        <div class="navbar">
            <div class="logo">
                <img src="images/airlogo.png">
            </div>
            <nav>
                <ul id="menuList">
                    <li><a href="travle.html">HOME</a></li>
                    <li><a href="travle.html">ABOUT</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="#">DEALLERS</a></li>
                    <li><a href="signin.html">SIGNIN</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
            <div class="menuicon" onclick="togglemenu()">
                <img src="images/icon.png">
            </div>
        </div>

    </section>

    <!--TICKETS-->
    <section class="tickets">

        <div class="ticketbox">

            <div class="ticket1">

                <div class="Timage1">
                    <img src="images/airticket.jpg">
                </div>

                <div class="Ttext1">
                    <h1>TRAVEL (On Air)</h1><br>
                    <p>Get your ticket to travel to any country of your choice for $2</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, laborum! Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Reiciendis, sequi.</p>
                </div>

                <div class="btn1">
                    <a href="#">Buy Now</a>
                </div>
            </div>


            <div class="ticket2">

                <div class="Ttext2">
                    <h1>SHIPPING</h1><br>
                    <p>Get your ticket to ship all kind of goods to any country of your choice for $3</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, laborum! Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Reiciendis, sequi. Lorem ipsum dolor sit amet.</p>
                </div>

                <div class="Timage2">
                    <img src="images/shipticket.jpg">
                </div>

                <div class="btn2">
                    <a href="#">Buy Now</a>
                </div>
            </div>


            <div class="ticket3">
                <div class="Timage3">
                    <img src="images/airgoodsticket.jpg">
                </div>

                <div class="Ttext3">
                    <h1>AIR GOODS</h1><br>
                    <p>Get your ticket to transport all kind of goods to any country of your choice on air for $2.5</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, laborum! Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Reiciendis, sequi. Lorem ipsum dolor sit amet.</p>
                </div>

                <div class="btn3">
                    <a href="#">Buy Now</a>
                </div>
            </div>

        </div>
    </section>

    <!--CONTACT-->
    <section id="contact">
        <h1 class="contacthead">CONTAT US</h1>

        <div class="contactbox">

            <div class="contactphone">
                <h1>MEET US</h1>
                <a class="number" style=" width: 50%; margin-left: 25%; display:flex;" href="#"> <i
                        style="width: 30px; color:white;" class="fas fa-phone"></i>+44
                    7911 123456</a><br>
                <a href="#">COMPANY</a> <br><br>
                <a href="#about">ABOUT US</a><br><br>
                <a href="#news">NEWS</a><br><br>
                <a href="#">SERVICES</a><br><br>
                <a href="#">sign in</a><br><br>
                <a href="#">MEET WITH DEALLERS</a><br><br>
                <a href="#">HOME</a>

            </div>

            <div class="contactmail">
                <H1>OUR MAILS</H1>
                <a href="#">contact@airwys.com</a><br><br>
                <a href="#">support@airways.com</a><br><br>
                <a href="#">help@airways.com</a><br><br>
                <h1>OFFCIAL MAILL</h1>
                <a href="#">airways@gmail.com</a><br><br>
                <a href="#">travelairaways@gmil.com</a>
            </div>

            <div class="contactprivacy">
                <h1>PRIVACY AND POLICY</h1>
                <a href="#">Privacy and Policy</a><br><br>
                <a href="#">Refund Policy</a><br><br>
                <a href="#">airwaysrefund@gmail.com</a>
            </div>

        </div>

        <div class="social">

            <a href="#"><i class="fab fa-facebook"></i></a>

            <a href="#"><i class="fab fa-linkedin"></i></a>

            <a href="#"><i class="fab fa-instagram"></i></a>

            <a href="#"><i class="fab fa-twitter"></i></a>

        </div>

        <div class="copyright">
            <a href="#">&copy:SmartXJ niyi's website tech designed 2022 CEO Agrommerce All rights reserved</a>
        </div>

    </section>





    <script>

        var menuList = document.getElementById("menuList")

        menuList.style.maxHeight = "0px"

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "30vh";
            }
            else {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>
</body>

</html>
