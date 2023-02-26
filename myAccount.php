<?php
session_start();

?>

<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 100%;
}


/* menu */
.accountmenu {
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
    animation-delay: 1s;
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

.account-details{
    width: 100%;
    height: 80vh;
    background: rgba(219, 217, 79, 0.89);
}

.account-details h1{
    font-size: 33px;
    color: white;
    text-align: center;
    padding-top: 50px;
}


.account-details .details{
    width: 100%;
    height: 63.5vh;
    background: none;
}



.account-details .details h3{
    font-size: 25px;
    margin-top: 35px;
    text-align: center;
}

.account-details .details .first{
  padding-top: 50px;
}

.account-details .details .btn{
    width: 100%;
    background: none;
    margin-top: 70px;
}

.account-details .btn a{
    width: 30%;
    background: rgba(240, 159, 159, 0.89);
    padding: 20px 30px 20px 30px;
    font-size: 20px;
    text-decoration: none;
    color: white;
    border-radius: 5px;
    margin-left: 42%;
}

.account-details .btn a:hover{
    opacity: 80%;
    font-size: 19px;
    transition: 0.2s;
}

@media all and (max-width: 500px){
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

    .accountmenu {
        height: 10vh;
        display: block;
    }

    .account-details h1{
        font-size: 25px;
    }

    .account-details .details h3{
        font-size: 18px;
    }

    .account-details .details .first{
        padding-top: 20px;
    }

  .account-details .btn a{
    width: 30%;
    padding: 15px 30px 15px 30px;
    font-size: 15px;
    margin-left: 29%;
}

 .account-details .btn a:hover{
    font-size: 15px;
    width: 30%;
 }

}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>airways || Account</title>
    <link rel="icon" href="images\airlogo.png">
</head>
<body>

    <section class="accountmenu">
        <div class="navbar">
            <div class="logo">
                <img src="images/airlogo.png">
            </div>
            <nav>
                <ul id="menuList">
                    <li><a href="dashB.php">DASHBOARD</a></li>
                    <li><a href="#">DEALLERS</a></li>
                    <li><a href="travel.php">CONTACT</a></li>
                </ul>
            </nav>
            <div class="menuicon" onclick="togglemenu()">
                <img src="images/icon.png">
            </div>
        </div>

    </section>


     <section class="account-details">
         <h1>ACCOUNT DETAILS</h1>

         <div class="details">

            <?php echo " <h3 class='first'>User ID: ".$_SESSION['CUSTID']." </h3>" ?>
            <?php echo " <h3>NAME: ".$_SESSION['FLNAME']." </h3>" ?>
            <?php echo " <h3>EMAIL: ".$_SESSION['EMAIL']." </h3>" ?>
            <h3> PASSWORD: --*******-- </h3>

            <div class="btn">
                 <a href="#">change password</a>
            </div>

         </div>
        
     </section>

     <script>

        var menuList = document.getElementById("menuList")

        menuList.style.maxHeight = "0px"

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "12vh";
            }
            else {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>
</body>
</html>