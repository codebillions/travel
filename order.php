<?php
  session_start();

    require ("util.php");

    // protectPage();


?>

<style>

    *{
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 100%;
}

html{
    scroll-behavior: smooth;
  }


/* menu */
.buymenu {
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
    animation-delay: 1.6s;
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

/* order */
.purchase{
    width: 100%;
    height: 110vh;
    background: rgba(240, 231, 150, 0.89);
}

.purchase .form{
    width: 100%;
    height: 110vh;
    display: block;
    align-items: center;
}

.purchase .form form{
    width: 50%;
    height: 100vh;
    display: block;
    align-items: center;
    justify-content: space-around;
    margin-left: 25%;
}

.purchase .form form .su{
    width: 50%;
    margin-left:30%;
    margin-top: 40px;
}
.purchase .form form .su input{
    background: rgba(240, 160, 152, 0.89);
    border: none;
    width: 45%;
    border-radius: 7px;
    cursor: pointer;
    font-size: 18px;
}

.purchase .form form .su input:hover{
    opacity: 80%;
    transition: 0.2s;
}

.purchase .form form h1{
    color: white;
    font-size: 30px;
    text-align: center;
    padding-top: 30px;
}

.purchase .form form p{
    color: white;
    font-size: 18px;
    margin-top: 5px;
}

.purchase .form form .p-1{
    padding-top: 10px;
    text-align: center;
    color:  rgba(243, 134, 126, 0.89);
}

.purchase .form form .p-2{
    margin-top: 25px;
    text-align: center;
    color:  rgba(243, 134, 126, 0.89);
}

.purchase .form form input{
    width: 60%;
    height: 6vh;
    font-size: 14px;
    margin: 0 0 0 20%;
    background: none;
    border: none;
    border-bottom: 2px solid rgba(243, 134, 126, 0.89);
    outline: none;
    color: black;
}
.purchase .form form .inp-1{
        margin-top: 5px;
}

.purchase .form form select{
    width: 60%;
    height: 6vh;
    font-size: 14px;
    margin: 0 0 0 20%;
    background: none;
    border: none;
    border-bottom: 2px solid rgba(243, 134, 126, 0.89);
    outline: none;
    color: black;
}

.purchase .form form select option{
    background: rgba(230, 194, 191, 0.89);
}


@media all and (max-width: 500px){
    /*MENU*/

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

    .buymenu {
        height: 10vh;
        display: block;
    }

    /* orders */
    .purchase{
        height: 135vh;
    }

    .purchase .form{
        height: 100vh;
    }

    .purchase .form form{
        width: 100%;
        margin: 0;
    }

    .purchase .form form .su input{
        width: 50%;
        font-size: 15px;
    }

    .purchase .form form h1{
        font-size: 25px;
    }

    .purchase .form form p{
        font-size: 14px;
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
    
    <section class="buymenu">
        <div class="navbar">
            <div class="logo">
                <img src="images/airlogo.png">
            </div>
            <nav>
                <ul id="menuList">
                    <li><a href="dashB.php">HOME</a></li>
                    <li><a href="deallers.php">DEALLERS</a></li>
                    <li><a href="#">NOTIFICATION</a></li>
                     <li><a href="#">My Account</a></li>
                    <li><a href="travel.php">CONTACT</a></li>
                </ul>
            </nav>
            <div class="menuicon" onclick="togglemenu()">
                <img src="images/icon.png">
            </div>
        </div>

    </section>


    <section class="purchase">

        <div class="form">
            <form action="data.php?get=order" method="POST">

                <h1>Make your order</h1>

                <input class="inp-1" type="text" name="ID" placeholder="Enter your ID">
                <input type="date" name="date">
                <input type="text" name="country" placeholder="Country of residence">
                <input type="text" name="city" placeholder="State">
                <input type="text" name="adr" placeholder="Address">
                <input type="text" name="code" placeholder="Zip code">
                <input type="text" name="phNO" placeholder="Phone number">
                
                <select name="category" class="selector" id="ticket-category">
                    <option value="goods">Goods</option>
                    <option value="travel">Travel</option>
                </select>

                <select name="type" class="selector" id="ticket-type">
                     <!-- <option selected>Goods $2.5 - $3</option> -->
                    <option name="goods">Ship goods ticket $3</option>
                    <option name="goods">Air goods ticket $2.5</option>
                    <option name="goods">Travel ticket $2</option>
                </select>

                <p class="p-1">Number of ticket</p>
                <input type="number" name=T-number >

                 <p class="p-2">If goods, Enter country and state of delivery</p>
                 <input type="text" name="R-country" placeholder="Country">
                 <input type="text" name="R-state" placeholder="State">

                 <div class="su">
                    <input type="submit" value="ORDER NOW">  
                </div>
                
            </form>
        </div>

    </section>


    <script>

        var menuList = document.getElementById("menuList")

        menuList.style.maxHeight = "0px"

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "20vh";
            }
            else {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>

</body>
</html>