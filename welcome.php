<?php

?>

<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 100%;
}

body{
    background: white;
    text-align: center;
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("images/travel1.png");
    background-size: cover;
    background-position: center;
}

body img{
    width: 170px;
    margin-top: 10%;
}

body h1{
    font-size: 40px;
    color: rgb(235, 222, 48);
    margin-top: 15px;
}

body h3{
    font-size: 25px;
    color: white;
    margin-top: 15px;
}

body a{
    text-decoration: none;
    display: inline-block;
    text-align: center;
    background: rgba(211, 208, 65, 0.89);
    width: 10%;
    padding: 15px 5px 15px 5px;
    justify-content: space-around;
    align-items: center;
    color: white;
    font-size: 20px;
    margin-top: 30px;
    border-radius: 5px;
}

body a:hover{
    opacity: 80%;
    font-size: 19px;
    transition: 0.2s;
    width: 9.5%;
}


@media all and (max-width: 500px){
    
    body img{
        width: 100px;
        margin-top: 120px;
    }

    body h1{
        font-size: 18px;
    }

    body h3{
        font-size: 15px;
    }

    body a{
        width: 25%;
        font-size: 15px;
    }

    body a:hover{
        width: 25%;
        font-size: 15px;
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
    <img src="images/hand.png" alt="hand">
    <h1>your account have been successfully created</h1>
    <h3> you can now login</h3>
    <a href="login.php">LOGIN</a>
</body>
</html>