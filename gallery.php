<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>airways</title>
    <link rel="stylesheet" href="gallery.css">
    <link rel="icon" href="images\airlogo.png">
</head>

<body>

    <section class="gallerymenu">
        <div class="navbar">
            <div class="logo">
                <img src="images/airlogo.png">
            </div>
            <nav>
                <ul id="menuList">
                    <li><a href="travel.php">HOME</a></li>
                    <li><a href="travel.php">ABOUT</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="ticket.php">TICKET</a></li>
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

    <section class="slide">

    </section>

    <section class="plane">
        <div class="P-container">
            <div class="P-text">
                <h3>AIRPLANE FOR GOODS</h3><br>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ducimus sapiente nemo nesciunt laboriosam saepe
                    rem explicabo nisi consequatur unde aut.</P>
            </div>

            <div class="P-photo">

            </div>
        </div>
    </section>






    <script>

        var menuList = document.getElementById("menuList")

        menuList.style.maxHeight = "0px"

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "30vh";
            }else {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>

</body>

</html>
