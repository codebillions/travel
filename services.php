<?php



?>


<style>

    * {
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 100%;
}

/*SERVICEMENU*/
.servicemenu {
    width: 100%;
    height: 30vh;
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

.searchbar {
    width: 100%;
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-top: -20px;
}

.searchbar .search {
    width: 60%;
    height: 5vh;
    background: none;
    border: 0.1px solid white;
    border-radius: 5px;
    font-size: 19px;
    margin-left: -27%;
    color: yellow;
}

.searchbar a {
    width: 50px;
    font-size: 15px;
    text-align: center;
    text-decoration: none;
    color: rgb(182, 36, 36);
    overflow: hidden;
    margin-left: -70%;
}

.searchbar a:hover {
    color: rgb(212, 212, 75);
    font-size: 16px;
}

/*SERVICE*/
.service {
    width: 100%;
    height: 100vh;
    background: white;
    background-size: cover;
    background-position: center;
    background: white;
    padding-top: 30px;
}

.servicebox {
    width: 90%;
    height: 70vh;
    background-image: url(images/background.jpg);
    background-size: cover;
    background-position: center;
    border-radius: 30px;
    display: block;
    align-items: center;
    justify-content: space-around;
    text-align: center;
    margin-left: 65px;
    animation: moveup 0.5s linear 1s;
    animation-delay: 4s;
    animation-fill-mode: forwards;
    visibility: hidden;
    transition: 1s;
}

@keyframes moveup {
    0% {
        transform: scaleY(1.5);
        visibility: visible;
        transition: 0.5s;
    }

    100% {
        transform: scaleY(1);
        visibility: visible;
    }
}



.servicebox h1 {
    font-size: 75px;
    color: yellow;
    padding-top: 155px;
    animation: zoom-in 0.5s linear 1s;
    animation-delay: 5s;
    animation-fill-mode: forwards;
    visibility: hidden;
    transition: 1s;
    cursor: pointer;
}

@keyframes zoom-in {
    0% {
        visibility: visible;
        transform: scale(1.05);
    }

    100% {
        visibility: visible;
    }
}

.servicebox p {
    font-size: 19px;
    color: white;
    padding-top: 20px;
    animation: zoom-in 0.5s linear 1s;
    animation-delay: 6s;
    animation-fill-mode: forwards;
    visibility: hidden;
    transition: 1s;
    cursor: pointer;
}

.servicebtn {
    width: 100%;
    margin-top: 75px;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.servicebtn a {
    width: 15%;
    text-decoration: none;
    background: rgb(212, 212, 75);
    border-radius: 20px;
    border: none;
    color: rgb(182, 36, 36);
    display: inline-block;
    text-align: center;
    font-size: 23px;
    padding: 15px;
}

.servicebtn a:hover {
    background: rgb(146, 146, 57);
    font-size: 25px;
    color: red;
    transition: 0.5s;
}

#travel {
    width: 100%;
    height: 100vh;
    background-image: url(images/style.jpg);
    background-size: cover;
    background-position: center;

}

.travelbox {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.travelimage {
    width: 50%;
    height: 60vh;
    display: block;
    align-items: center;
    background-image: url(images/travel2.png);
    background-size: cover;
    background-position: center;
    margin-left: -5%;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.travelimage:hover {
    width: 45%;
    transition: 0.5s;
}

.traveltext {
    width: 43%;
    height: 35vh;
    display: block;
    align-items: center;
    text-align: left;
    justify-content: space-around;
    background-color: white;
    border-radius: 10px;
    border: none;
    margin-left: -30%;
    border: 5px solid yellow;
    cursor: pointer;
}

.traveltext h1 {
    width: 120px;
    height: 40px;
    text-align: center;
    border-radius: 5px;
    font-size: 30px;
    color: white;
    cursor: pointer;
    margin-left: 17px;
    margin-top: 20px;
    background: rgb(182, 36, 36);
}

.traveltext p {
    font-size: 20px;
    margin-left: 12px;
}

.info {
    width: 40%;
    margin-left: 50%;
    margin-top: -90px;
    font-size: 25px;
    color: white;
}

#bulky {
    width: 100%;
    height: 100vh;
    background-image: url(images/style.jpg);
    background-size: cover;
    background-position: center;

}

.bulkybox {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.bulkyimage {
    width: 50%;
    height: 60vh;
    display: block;
    align-items: center;
    background-image: url(images/ship1.png);
    background-size: cover;
    background-position: center;
    margin-left: -5%;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.bulkyimage:hover {
    width: 45%;
    transition: 0.5s;
}

.bulkytext {
    width: 43%;
    height: 35vh;
    display: block;
    align-items: center;
    text-align: left;
    justify-content: space-around;
    background-color: white;
    border-radius: 10px;
    border: none;
    margin-left: -33%;
    border: 5px solid yellow;
    cursor: pointer;
}

.bulkytext h1 {
    width: 200px;
    height: 40px;
    text-align: center;
    border-radius: 5px;
    font-size: 30px;
    color: white;
    cursor: pointer;
    margin-left: 17px;
    margin-top: 20px;
    background: rgb(182, 36, 36);
}

.bulkytext p {
    font-size: 20px;
    margin-left: 12px;
}

.bulkybtn {
    width: 160px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    text-align: center;
    margin-top: 35%;
    margin-left: -35%;
}

.bulkybtn a {
    width: 120px;
    text-decoration: none;
    display: inline-block;
    color: white;
    padding: 15px;
    font-size: 15px;
    background: rgb(182, 36, 36);
    border-radius: 10px;
}

.bulkybtn a:hover {
    width: 130px;
    font-size: 16px;
    color: rgb(182, 36, 36);
    background: rgb(212, 212, 75);
    transition: 0.5s;
}

#air {
    width: 100%;
    height: 100vh;
    background-image: url(images/style.jpg);
    background-size: cover;
    background-position: center;

}

.airbox {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.airimage {
    width: 50%;
    height: 60vh;
    display: block;
    align-items: center;
    background-image: url(images/goodsp1.png);
    background-size: cover;
    background-position: center;
    margin-left: -5%;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.airimage:hover {
    width: 45%;
    transition: 0.5s;
}

.airtext {
    width: 43%;
    height: 35vh;
    display: block;
    align-items: center;
    text-align: left;
    justify-content: space-around;
    background-color: white;
    border-radius: 10px;
    border: none;
    margin-left: -33%;
    border: 5px solid yellow;
    cursor: pointer;
}

.airtext h1 {
    width: 200px;
    height: 40px;
    text-align: center;
    border-radius: 5px;
    font-size: 30px;
    color: white;
    cursor: pointer;
    margin-left: 17px;
    margin-top: 20px;
    background: rgb(182, 36, 36);
}

.airtext p {
    font-size: 20px;
    margin-left: 12px;
}

.airbtn {
    width: 160px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    text-align: center;
    margin-top: 35%;
    margin-left: -35%;
}

.airbtn a {
    width: 120px;
    text-decoration: none;
    display: inline-block;
    color: white;
    padding: 15px;
    font-size: 15px;
    background: rgb(182, 36, 36);
    border-radius: 10px;
}

.airbtn a:hover {
    width: 130px;
    font-size: 16px;
    color: rgb(182, 36, 36);
    background: rgb(212, 212, 75);
    transition: 0.5s;
}

#trade {
    width: 100%;
    height: 100vh;
    background-image: url(images/menubg.jpg);
    background-size: cover;
    background-position: center;
}

.tradebox {
    width: 93%;
    height: 95vh;
    margin-left: 50px;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.style1 {
    width: 500px;
    height: 80vh;
    background: rgb(212, 212, 75);
    border-radius: 250px;
    margin-left: -30%;
    margin-top: -7%;
    opacity: 0.1;

}

.style1:hover {
    opacity: 1;
    margin-top: 4px;
    margin-left: -25%;
    background-image: url(images/ship1.png);
    background-size: cover;
    background-position: center;
    transition: 0.5s;
}

.tradetext {
    width: 290px;
    height: 46vh;
    background: rgb(182, 36, 36);
    border-radius: 200px;
    margin-right: 20px;
    margin-left: 30px;
    display: block;
    align-items: center;
    justify-content: space-around;
    text-align: center;
    position: relative;
}

.tradetext:hover {
    background: rgb(221, 92, 92);
    margin-top: 5%;
    width: 33%;
    height: 65vh;
    transition: 0.5s;
}

.tradetext h1 {
    width: 200%;
    font-size: 80px;
    color: yellow;
    margin-top: 70px;
    margin-left: -50%;
}

.tradetext p {
    width: 200%;
    font-size: 19px;
    color: white;
    margin-left: -49%;
}

.style2 {
    width: 400px;
    height: 65vh;
    background: rgb(212, 212, 75);
    border-radius: 200px;
    margin-top: 15%;
    margin-right: -8%;
    opacity: 0.2;
}

.style2:hover {
    background-image: url(images/ship1.png);
    background-size: cover;
    background-position: center;
    opacity: 1;
    margin-right: -6%;
    width: 425px;
    height: 65vh;
    transition: 0.5s;
}

.movebox {
    width: 60%;
    margin-top: -50px;
    margin-left: 50px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.circle {
    width: 70px;
    height: 60px;
    border-radius: 100px;
    background: rgb(212, 212, 75);
    animation: popup linear 2s infinite;
    animation-delay: 0.5s;
    animation-fill-mode: forwards;
}

@keyframes popup {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.movetext p {
    font-size: 22px;
    color: white;
    animation: popup2 linear 4s infinite;
    animation-delay: 0.5;
    animation-fill-mode: forwards;
}

@keyframes popup2 {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.news {
    width: 60%;
    text-align: center;
    display: block;
    align-items: center;
    justify-content: space-around;
    margin-left: 40%;
    margin-top: -40%;
}

.news p {
    font-size: 22px;
    color: white;
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

    .servicemenu {
        height: 13vh;
    }

    .searchbar {
        height: 7vh;
        margin-top: -30%;
    }

    .searchbar .search {
        height: 2.55vh;
        border: 0.2px solid white;
        font-size: 15px;
        color: white;
    }

    .searchbar a {
        margin-left: -75%;
        font-size: 12px;
    }

    .searchbar a:hover {
        font-size: 19px;
    }

    /*SERVICE*/

    .service {
        height: 63vh;
    }

    .servicebox {
        width: 85%;
        margin-left: 32px;
        height: 50vh;
        animation-delay: 2s;
    }

    .servicebox h1 {
        font-size: 46px;
        animation-delay: 2.5s;
    }

    .servicebox p {
        font-size: 15px;
        animation-delay: 3s;
    }

    .servicebtn {
        margin-top: 25px;
    }

    .servicebtn a {
        width: 30%;
        font-size: 13px;
        background: none;
    }

    .servicebtn a:hover {
        font-size: 13.5px;
        background: none;
        font-size: 13px;
    }

    #travel {
        height: 90vh;
    }

    .travelbox {
        display: block;
        padding-top: 50px;
    }

    .travelimage {
        width: 90%;
        height: 40vh;
        margin-left: 20px;
    }

    .travelimage:hover {
        width: 91%;
    }

    .traveltext {
        margin-left: 15px;
        width: 90%;
        height: 30vh;
        margin-top: 30px;
    }

    .traveltext h1 {
        margin-top: 30px;
        font-size: 23px;
        height: 30px;
    }

    .traveltext p {
        font-size: 18px;
        margin-left: 7px;
    }

    .info {
        margin-left: 80px;
        margin-top: -50%;
        width: 80%;
        font-size: 14px;
    }

    #bulky {
        height: 93vh;
    }

    .bulkybox {
        display: block;
        padding-top: 50px;
    }

    .bulkyimage {
        width: 90%;
        height: 40vh;
        margin-left: 20px;
    }

    .bulkyimage:hover {
        width: 91%;
    }

    .bulkytext {
        margin-left: 15px;
        width: 90%;
        height: 30vh;
        margin-top: 30px;
    }

    .bulkytext h1 {
        margin-top: 30px;
        font-size: 23px;
        height: 30px;
    }

    .bulkytext p {
        font-size: 18px;
        margin-left: 7px;
    }

    .bulkybtn {
        margin: 35px 0 0 58%;
    }

    .bulkybtn a:hover {
        width: 125px;
    }

    #air {
        height: 93vh;
    }

    .airbox {
        display: block;
        padding-top: 50px;
    }

    .airimage {
        width: 90%;
        height: 40vh;
        margin-left: 20px;
    }

    .airimage:hover {
        width: 91%;
    }

    .airtext {
        margin-left: 15px;
        width: 90%;
        height: 30vh;
        margin-top: 30px;
    }

    .airtex h1 {
        margin-top: 30px;
        font-size: 23px;
        height: 30px;
    }

    .airtext p {
        font-size: 18px;
        margin-left: 7px;
    }

    .airbtn {
        margin: 35px 0 0 58%;
    }

    .airbtn a:hover {
        width: 125px;
    }

    /*trades*/
    #trade {
        height: 60vh;
    }

    .tradebox {
        margin: 0%;
    }

    .style1 {
        display: none;
    }

    .style2 {
        display: none;
    }

    .tradetext {
        margin: -105% 0 0 8%;
        height: 25vh;
        width: 230px;
    }

    .tradetext:hover {
        height: 25vh;
        width: 230px;
        margin: -105% 0 0 8%;
    }

    .tradetext h1 {
        width: 150%;
        font-size: 50px;
        margin-left: -26%;
    }

    .tradetext p {
        width: 150%;
        font-size: 14px;
        margin: 0 0 0 -25%;
    }

    .movebox {
        width: 100%;
        margin: -100% 0 0 0;
    }

    .circle {
        width: 30px;
        height: 27px;
        margin-left: 5px;
    }

    .movetext {
        margin-right: 10px;
    }

    .movetext p {
        font-size: 14px;
        text-align: right;
        margin-right: 5px;
    }

    .news {
        width: 100%;
        margin: -110% 60% 0 0;
    }

    .news p {
        font-size: 14px;
    }

    /*CONTACT*/

    #contact {
        height: 153vh;
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
        margin: 60px 0 0 0;
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
    <title>airways</title>
    <!-- <link rel="stylesheet" href="services.css"> -->
    <link rel="stylesheet"
        href="file:///C:/Users/James%20Niyi/Documents/JamesNiyi/font-awesome-4.7.0/css/font-awesome.css">

         <link rel="icon" href="images\airlogo.png">

    <script src="file:///C:/Users/James%20Niyi/Documents/JamesNiyi/js/jquery-3.6.0.min.js">

    </script>
    <!-- <script>
        $(document).ready(function () {
            $("#trav").click(function () {
                $(".air").hide();
                $(".bulky").hide();
                $(".trade").hide();
                $(".travel").fadeIn(500);
            });

            $("#bulk").click(function () {
                $(".air").hide();
                $(".travel").hide();
                $(".trade").hide();
                $(".bulky").fadeIn(500);
            });

            $("#airg").click(function () {
                $(".travel").hide();
                $(".bulky").hide();
                $(".trade").hide();
                $(".air").fadeIn(500);
            });

            $("#trad").click(function () {
                $(".travel").hide();
                $(".air").hide();
                $(".bulky").hide();
                $(".trade").fadeIn(500);
            });

        });
    </script> -->
</head>

<body>

    <section class="servicemenu">
        <div class="navbar">
            <div class="logo">
                <img src="images/airlogo.png">
            </div>
            <nav>
                <ul id="menuList">
                    <li><a href="travle.php">HOME</a></li>
                    <li><a href="travle.php">ABOUT</a></li>
                    <li><a href="ticket.php">TICKET</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="login.php">SIGNIN</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
            <div class="menuicon" onclick="togglemenu()">
                <img src="images/icon.png">
            </div>
        </div>

        <div class="searchbar">
            <input class="search" type="text" name="search" placeholder="SEARCH">
            <a href="#">
                <!-- <i class="fas fa-search"></i> -->
            </a>
        </div>
    </section>

    <section class="service">
        <div class="servicebox">
            <h1>OUR SERVICES</h1>
            <p>WE HOPE TO SERVE YOU BETTER</p>
        </div>

        <div class="servicebtn">
            <a href="#travel" id="trav">Travel</a>
            <a href="#bulky" id="bulk">Bulky Goods</a>
            <a href="#air" id="airg">Air Godds</a>
            <a href="#trade" id="trad">Trades</a>
        </div>
    </section>

    <section id="travel">

        <div class="travelbox">

            <div class="travelimage">

            </div>

            <div class="traveltext">
                <h1>TRAVEL</h1><br>
                <p style="color: rgb(182, 36, 36);">Travel for as low as ($100) to any country of your CHOICE</p><br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Atque alias culpa fuga necessitatibus vel eos? Ratione, vitae suscipit!
                    Voluptatibus, nesciunt. Lorem ipsum dolor</p>
            </div>
        </div>
        <p class="info">Create an account to purchase your first Ticket</p>
    </section>

    <section id="bulky">

        <div class="bulkybox">
            <div class="bulkyimage">

            </div>

            <div class="bulkytext">
                <h1>BUlKY GOODS</h1><br>
                <P style="color: rgb(182, 36, 36);">Make a one time paayment of ($1,200 - $1,500) to be shipped
                    or transported by air</P><br>
                <p>Paay as low as $10 for each small goods to be shipped or
                    transported by air Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Libero, voluptatem.</p>
            </div>
            <div class="bulkybtn">
                <a href="signup.php">Create Account ></a>
            </div>
        </div>

    </section>

    <section id="air">

        <div class="airbox">

            <div class="airimage">

            </div>

            <div class="airtext">
                <h1>Air Goods</h1><br>
                <P style="color: rgb(182, 36, 36);">Make a one time paayment of ($1,300 - $1,800) to be shipped
                    or transported by air</P><br>
                <p>Paay as low as $15 for each small goods to be shipped or
                    transported by air Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Libero, voluptatem.</p>
            </div>

            <div class="airbtn">
                <a href="signup.php">Create Account ></a>
            </div>

        </div>

    </section>


    <section id="trade">

        <div class="tradebox">

            <div class="style1">

            </div>

            <div class="tradetext">
                <h1>OUR TRADES</h1><br>
                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, molestiae.</P>

            </div>

            <div class="style2">

            </div>
        </div>

        <div class="movebox">

            <div class="circle">

            </div>

            <div class="movetext">
                <p>we are rated as the best trading, travel and delivery company world wide</p>
            </div>

        </div>

        <div class="news">
            <marquee behavior="move" direction="left">
                <p>ship more goods to any country of your choice and save more money. Fast flight and shipping. We avoid
                    distruction of goods or properties. your goods are safe in our care. Create an account to be able to
                    purchase your first Ticket or signin if you have an account to see your ongoing or finished
                    event(only if you have
                    purchased
                    your Ticket) </p>
            </marquee>
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
            <a href="#">&copy:SmartXJ niyi's website tech designed 2022 All rights reserved</a>
        </div>

    </section>









    <script>

        var menuList = document.getElementById("menuList")

        menuList.style.maxHeight = "0px"

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "26vh";
            }
            else {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>

</body>

</html>
