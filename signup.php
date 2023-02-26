<?php

session_start()

?>

<style>
    * {
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 100%;
}

.signinmenu {
    width: 100%;
    height: 20vh;
    background-image: url(images/menubg.jpg);
    background-size: cover;
    background-position: center;
}

.navbar {
    width: 100%;
    height: 20vh;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.logo {
    width: 27%;
    margin: 0 0 0 -20px;
    cursor: pointer;
    animation: movedown 0.5s linear 1s;
    animation-fill-mode: forwards;
    animation-delay: 1s;
    visibility: hidden;
}

@keyframes movedown {
    0% {
        visibility: visible;
        transform: translateY(-100%);
    }

    100% {
        visibility: visible;
        transform: translateY(0%);
    }
}


.menuicon {
    width: 120px;
    cursor: pointer;
    display: none;
}

nav {
    flex: 1;
    text-align: right;
    animation: moveleft 0.5s linear 1s;
    animation-fill-mode: forwards;
    animation-delay: 3s;
    visibility: hidden;
}

@keyframes moveleft {
    0% {
        visibility: visible;
        transform: translateX(100px);
    }

    100% {
        visibility: visible;
        transform: translateX(0px);
    }
}

nav ul {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 27%;
    width: 70%;
}

nav ul li {
    list-style: none;
    display: inline-block;
    margin-right: 30px;
    right: 0;
}

nav ul li a {
    text-align: center;
    text-decoration: none;
    color: white;
    font-size: 14px;
    overflow: hidden;
}

nav ul li a:hover {
    color: rgb(182, 36, 36);
    font-size: 16px;
    transition: 0.2s;
}


/*signUp*/

.signup {
    width: 100%;
    height: 100vh;
    background-image: url(images/style.jpg);
    background-size: cover;
    background-position: center;
    padding-top: 20px;
}

.signupbox {
    width: 45%;
    height: 90vh;
    border: 2px solid yellow;
    border-radius: 30px;
    background: white;
    background-size: cover;
    display: block;
    align-items: center;
    justify-content: space-around;
    margin-left: 28%;
    margin-top: 30px;
}

.signupbox input {
    width: 50%;
    height: 7vh;
    font-size: 15px;
    background: none;
    border: 1px solid yellow;
    border-radius: 5px;
    padding-left: 10px;
    margin-left: 25%;
    margin-top: 10px;
    color: black;
}

.signupbtn {
    width: 160px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    text-align: center;
    margin-top: 35px;
    margin-left: 37%;

}

.signupbtn input{
    background: rgb(182, 36, 36);
    margin: 0;
    color: white;
    border-color: rgb(182, 36, 36);
    width: 100%;
    text-align: center;
    font-size: 18px;
    cursor: pointer;
}

.signupbtn input:hover{
    width: 98.5%;
    background: rgb(126, 22, 22);
    transition: 0.3s;
    border-color: rgb(126, 22, 22);
}

.signupbox #opt{
    width: 50%; 
    height: 7vh;
    font-size: 15px;
    background: none;
    border: 1px solid yellow; 
    border-radius: 5px; 
    padding-left: 10px; 
    margin-left: 25%; 
    margin-top: 10px; 
    color: black;
}

.signupbox h1 {
    font-size: 30px;
    color: rgb(182, 36, 36);
    text-align: center;
    padding-top: 20px;
}

.signupbox P {
    font-size: 19px;
    text-align: center;
    margin-top: 15px;
    cursor: pointer;
}

.signupbox P a {
    text-decoration: none;
    color: rgb(182, 36, 36);
}

.signupbox P a:hover {
    font-size: 20px;
    transition: 0.5s;
}

/*CONTACT*/
#contact {
    width: 100%;
    height: 100vh;
    background-image: url(images/menubg.jpg);
    background-size: cover;
    background-position: center;
}

#contact .contacthead {
    font-size: 45px;
    color: yellow;
    text-align: center;
    padding-top: 50px;
    cursor: pointer;
}

.contactbox {
    width: 100%;
    height: 84vh;
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-top: -45px;

}

.contactphone {
    width: 30%;
    display: block;
    align-items: center;
    justify-content: spce;
    text-align: center;
    margin-top: 68px;
}

.contactphone h1 {
    font-size: 33px;
    color: yellow;
    cursor: pointer;
}

.contactphone a {
    text-decoration: none;
    color: white;
    display: inline-block;
    font-size: 18px;
    overflow: hidden;
}

.contactphone a:hover {
    color: rgb(182, 36, 36);
    font-size: 20px;
    transition: 0.2s;
}

.contactmail {
    width: 30%;
    display: block;
    align-items: center;
    justify-content: spce;
    text-align: center;
}

.contactmail h1 {
    font-size: 33px;
    color: yellow;
    cursor: pointer;
}

.contactmail a {
    text-decoration: none;
    color: white;
    display: inline-block;
    font-size: 19px;
    overflow: hidden;
}

.contactmail a:hover {
    color: rgb(182, 36, 36);
    font-size: 20px;
    transition: 0.2s;
}

.contactprivacy {
    width: 30%;
    display: block;
    align-items: center;
    justify-content: spce;
    text-align: center;
    margin-top: -115px;
}

.contactprivacy h1 {
    font-size: 33px;
    color: yellow;
    cursor: pointer;
}

.contactprivacy a {
    text-decoration: none;
    color: white;
    display: inline-block;
    font-size: 19px;
    overflow: hidden;
}

.contactprivacy a:hover {
    color: rgb(182, 36, 36);
    font-size: 20px;
    transition: 0.2s;
}

.social {
    width: 20%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-position: center;
    background-size: cover;
    margin-top: -70px;
    margin-left: 40%;
}

.social a {
    text-decoration: none;
    color: white;
    display: inline-block;
    overflow: hidden;
    text-align: center;
    font-size: 30px;
    visibility: visible;
}

.social a:hover {
    color: rgb(182, 36, 36);
    font-size: 43px;
    transition: 0.5s;
    transform: translateY(-8px);
}

.copyright {
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: 35px;
    margin-left: 25%;
}

.copyright a {
    text-decoration: none;
    text-align: center;
    display: inline-block;
    color: white;
    font-size: 14px;
}







@media all and (max-width: 500px) {
    nav {
        visibility: visible;
        animation: none;
    }

    nav ul {
        width: 100%;
        height: 30vh;
        background: rgb(217, 57, 57);
        background-size: cover;
        background-position: center;
        position: absolute;
        top: 75px;
        right: 0;
        z-index: 2;
        display: block;
    }

    nav ul:hover {
        background: rgb(212, 212, 75);
    }

    nav ul li {
        display: inline-block;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: -50px;
    }

    .logo {
        margin: -85px 50px 0 -10%;
        width: 200px;
    }

    .menuicon {
        width: 75px;
        margin: -73px 0 0 0;
        display: block;
    }

    #menuList {
        overflow: hidden;
        transition: 0.5s;
    }

    .signinmenu {
        height: 10vh;
    }

    /*signUp*/
    .signup {
        height: 60vh;
    }

    .signupbox {
        width: 93%;
        height: 50vh;
        margin: 25px 0 0 12px;
    }

    .signupbox h1 {
        font-size: 23px;
    }

    .signupbox p {
        font-size: 14px;
    }

    .signupbox p a:hover {
        font-size: 14px;
    }

    .signupbox input {
        width: 65%;
        height: 4vh;
        font-size: 12px;
        margin: 5px 0 0 16%;
    }

    .signupbox #opt{
         width: 65%;
        height: 4vh;
        font-size: 12px;
        margin: 5px 0 0 16%;
    }

  

    .signupbtn {
        margin: 20px 0 0 30%;
    }

    .signupbtn input{
        margin: 0;
    }

    

   

    /*signIn*/
    .signin {
        height: 60vh;
    }

    .signinbox {
        width: 93%;
        height: 50vh;
        margin: 25px 0 0 12px;
    }

    .signinbox h1 {
        font-size: 23px;
        padding: 45px 0 0 0;
    }

    .signinbox p {
        font-size: 14px;
        margin-top: 30px;
    }

    .signinbox p a:hover {
        font-size: 14px;
    }

    .signinbox input {
        width: 65%;
        height: 6vh;
        font-size: 12px;
        margin: 45px 0 0 16%;
        outline: none;
    }

    .signinbtn {
        margin: 15px 0 0 29%;
    }

    .signinbtn a {
        width: 110px;
    }

    .signinbtn a:hover {
        width: 110px;
    }

    /*CONTACT*/
    #contact {
        height: 143vh;
    }

    #contact .contacthead {
        font-size: 35px;
        padding-top: 50px;
    }

    .contactbox {
        display: block;
        margin-top: -5px;
    }

    .contactphone {
        width: 100%;
        margin-top: 50px;
    }

    .contactphone h1 {
        font-size: 22px;
    }

    .contactphone a {
        font-size: 14px;
    }

    .contactmail {
        width: 100%;
        margin-top: 50px;
    }

    .contactmail h1 {
        font-size: 22px;
    }

    .contactmail a {
        font-size: 14px;
    }

    .contactprivacy {
        width: 100%;
        margin-top: 50px;
    }

    .contactprivacy h1 {
        font-size: 22px;
    }

    .contactprivacy a {
        font-size: 14px;
    }

    .social {
        width: 40%;
        margin: 10px 0 0 30%;
    }

    .social a {
        font-size: 25px;
    }

    .social a:hover {
        font-size: 25px;
        transform: none;
    }

    .copyright {
        width: 100%;
        margin: 30px 0 0 0;
    }

    .copyright a {
        font-size: 12px;
    }
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>airways || SignUp</title>
    <link rel="stylesheet"
        href="file:///C:/Users/James%20Niyi/Documents/JamesNiyi/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="icon" href="images\airlogo.png">

    

    <script>
        $(document).ready(function () {
            $(".login").click(function () {
                $(".signup").hide();
                $(".signin").fadeIn(1000);
            });

            $(".reg").click(function () {
                $(".signin").hide();
                $(".signup").fadeIn(1000);
            });
        })
    </script>
</head>

<body>
    <section class="signinmenu">
        <div class="navbar">
            <div class="logo">
                <img src="images/airlogo.png">
            </div>
            <nav>
                <ul id="menuList">
                    <li><a href="travel.php">HOME</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="ticket.php">TICKET</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
            <div class="menuicon" onclick="togglemenu()">
                <img src="images/icon.png">
            </div>
        </div>

    </section>

    <!--SIGNUP-->
    <section class="signup">

        <form class="signupbox" action="data.php?mg=Register" method="POST">

            <h1>SIGNUP</h1>

            <input style="margin-top: 40px;" type="text" name="flname" placeholder="FullName">

            <input type="email" name="email" placeholder="Email"> 

            <input type="text" name="phoneNO" placeholder="PhoneNumber">

        
            <input type="password" name="pwd" placeholder="Password">

            <input type="text" name="add" placeholder="Address">

             <select name="gender" id="opt">

            <option id="ml" name="Male" value="Male">Male</option>
            <option id="Fl" name="Female" value="Female">Female</option>

          </select>


           <div class="signupbtn">
               <input type="submit" value="SIGNUP">
           </div>

            <p>You have an account? <a class="login" href="login.php">Signin</a>
            </p>

    </form>

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
            <a href="#">&copy:SmartXJ niyi's website tech designed 2022 All rights reserved</a>
        </div>

    </section>





    <script>

        var menuList = document.getElementById("menuList")

        menuList.style.maxHeight = "0px"

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "16vh";
            }
            else {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>


</body>

</html>
