<?php
    session_start();

    require ("util.php");

    protect();
?>

<style>
    
*{
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 100%;
}


/* menu */
.dashmenu {
    width: 100%;
    height: 20vh;
    background-image: url(images/menubg.jpg);
    background-size: cover;
    background-position: center;
    display: none;
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

/*dashboard*/
.dashb{
    width: 100%;
    height: 100vh;
    background: white;
    background-size: cover;
    background-position: center;
}

.dashb .container{
    width:100%;
    height: 35vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.dashb .container img{
    width: 25%;
}

.dashb .container .greet{
    width: 50%;
    height: 23vh;
    background: rgba(219, 217, 79, 0.89);
    border-radius: 20px;
    margin-right: 25%;
    box-shadow: 1px 1px 10px 1px rgb(102, 101, 45); 
    text-align: center;
    cursor: pointer;
}

.dashb .container .greet h1{
    font-size: 40px;
    color: white;
    margin-top: 40px;
}

.dashb .container .greet p{
    font-size: 18px;
    color: white;
    margin-top: 20px;
}

.contain-purchase-menu{
    width: 100%;
    height: 50vh;
    background: rgb(240, 70, 70); 
    margin-top: 15vh;
    display: block;
    align-items: center;
    justify-content: space-between;
}

.contain-purchase-menu .style{
    width: 100%;
    height: 20vh;
    background: white;
    border-bottom-left-radius: 150%;
    border-bottom-right-radius: 150%;
}

.contain-purchase-menu .purchase{
    width: 50%;
    height: 35vh;
    background: rgba(44, 23, 231, 0.89);
    margin-left: 25%;
    margin-top: -13%;
    border-radius: 20px;
    text-align: center;
}

.contain-purchase-menu .purchase h3{
    font-size: 40px;
    color: white;
    padding-top: 35px;
}

.contain-purchase-menu .purchase p{
        font-size: 16px;
        color: white;
        margin-top: 20px;
}

.contain-purchase-menu .purchase a {
    text-decoration: none;
    display: inline-block;
    text-align: center;
    background: rgba(211, 208, 65, 0.89);
    width: 20%;
    padding: 15px 5px 15px 5px;
    justify-content: space-around;
    align-items: center;
    color: white;
    font-size: 20px;
    margin-top: 25px;
    border-radius: 5px;
}

.contain-purchase-menu .purchase a:hover{
        opacity: 80%;
        font-size: 19px;
        transition: 0.2s;
        width: 19.5%;
}

.dashb .links{
    width: 100%;
    margin-top: -5%;
    /* display: flex;
    align-items: center; 
    justify-content: space-between; */
}

.dashb .links a{
    text-decoration: none;
    display: inline-block;
    text-align: center;
    background: rgba(211, 208, 65, 0.89);
    width: 8%;
    padding: 15px 5px 15px 5px;
    justify-content: space-around;
    align-items: center;
    color: white;
    font-size: 15px;
    border-radius: 5px;
    margin-left: 70px;
}

.dashb .links .li-1{
   margin-left: 32%; 
}

.dashb .links a:hover{
        opacity: 80%;
        font-size: 14.5px;
        transition: 0.2s;
}

@media all and (max-width: 500px){
    /* menu */
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

    .dashmenu {
        height: 10vh;
        display: block;
    }

     .dashb .container{
         height: 5vh;
     }

      .dashb .container img{
          display: none;
      }

    .dashb .container .greet{
        width: 80%;
        height: 5vh;
        margin: 30px 0 0 45px;
    }

    .dashb .container .greet h1{
        font-size: 20px;
        margin: 10px 0 0 0;
    }

    .contain-purchase-menu .style{
        height: 5vh;
    }

    .contain-purchase-menu .purchase{
        width: 85%;
        height: 30vh;
        margin: -25% 0 0 30px;
    }

    .contain-purchase-menu .purchase h3{
        font-size: 25px;
    }
    .contain-purchase-menu .purchase p{
        margin-top: 30px;
        font-size: 16px;
    }

    .contain-purchase-menu .purchase a{
            margin-top: 40px;
            font-size: 14px;
    }
    .contain-purchase-menu .purchase a:hover{
         font-size: 14px;
    }

    .dashb .links{
        margin-top: -35%;
        display: flex;
    }

    .dashb .links a{
        margin-left: 20px;
        width: 20%;
    }

    .dashb .links a:hover{
        font-size: 12px;
    }

    .dashb .links .li-1{
        margin-left: 25%;
    }

    .dashb .links .li-2{
        display: none;
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
    <link rel="icon" href="images\airlogo.png">
</head>
<body>

<section class="dashmenu">
        <div class="navbar">
            <div class="logo">
                <img src="images/airlogo.png">
            </div>
            <nav>
                <ul id="menuList">
                    <li><a href="#">DEALLERS</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="travel.php">CONTACT</a></li>
                </ul>
            </nav>
            <div class="menuicon" onclick="togglemenu()">
                <img src="images/icon.png">
            </div>
        </div>

    </section>


    <section class="dashb"> 

        <div class="container">

            <img src="images/airlogo.png" alt="logo">

            <div class="greet">
                <?php echo"<h1>WELCOME BACK ".$_SESSION['FLNAME']." </h1>" ?>

                <?php echo"<p>Your ID is ".$_SESSION['CUSTID']." </p>" ?>
            </div>

        </div>

        <div class="contain-purchase-menu">

            <div class="style">

            </div>

            <div class="purchase">
                <h3>GET A TICKET</h3>
                <P>All ticket are available for prchase. 
                    You can purchase ticket for your goods or sits.
                You can also purchase ticket directly from the office of our dealer in your country</P>
                    <a href="order.php">GET NOW</a>
            </div>

        </div>

        <div class="links">
            <a  class="li-1" href="orderList.php"><img style="width:30px;" src="images/orders.png"></a>
            <a class="li-2" href="myAccount.php"><img style="width:30px;" src="images/acc.png"></a>
            <a class="li-3" href="util.php?lgt=logout"><img style="width:30px;" src="images/logout.png"></a>
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