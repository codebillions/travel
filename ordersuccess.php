<?php

    session_start();

?>

<style>

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  html{
    scroll-behavior: smooth;
  }

  .succ{
      width: 100%;
      height: 100vh;
      background: rgba(240, 231, 150, 0.89);
      display: block;
      align-items: center;
      justify-content: space-around;
      text-align: center;
  }

  .succ img{
      width: 18%;
      margin-top: 100px;
  }

  .succ h1{
      font-size: 50px;
      color: rgba(158, 152, 240, 0.89);
      margin-top: 15px;
  }

  .succ .text{
      width: 50%;
      margin-left: 25%;
      margin-top: 10px;
  }

  .succ .text p{
      font-size: 20px;
      color: rgba(240, 160, 152, 0.89);
  }

  .succ .btn{
      margin-top: 100px;
      display: flex;
      width: 50%;
      margin-left: 25%;
      align-items: center;
      justify-content: space-around;
  }

.succ .btn a{
    width: 20%;
    background: rgba(240, 79, 58, 0.89);
    padding: 20px 5px 20px 5px;
    color: white;
    font-size: 18px;
    text-decoration: none;
    display: inline-block;
    border: none;
    border-radius: 10px;
}

.succ .btn a:hover{
    opacity: 60%;
    transition: 0.2s;
}

.succ .btn .a1{
    margin-left: 50px;
}

.succ .btn .a2{
    margin-right: 50px;
}

@media all and (max-width: 500px){
    /* .succ{
        height: 120vh;
    } */

    .succ img{
        width: 35%;
        margin-top: 80px;
    }

    .succ h1{
        font-size: 30px;
    }

    .succ .text{
         width: 70%;
        margin-left: 15%;
    }

    .succ .text p{
        font-size: 16px;
    }

    .succ .btn{
        width: 80%;
        margin: 70px 0 0 40px;
    }

    .succ .btn a{
       width: 50%;
       padding: 10px 2.5px 10px 2.5px;
       font-size: 15px;
       margin-right: 20px;
    }
    .succ .btn .a1{
        
         /* margin-right: 10px; */
    }

     .succ .btn .a2{
        /* margin-left: 10px; */
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

<section class="succ">

        <img src="images/hand.png" alt="logo">
        <?php echo"<h1> ".$_SESSION['FLNAME']." you have successfully placed an order</h1>" ?>
        <div class="text">
            <p>your order have been delivered to the dealer in your country. 
            When payment is made succesfully your ticket  will be given to you by your dealer</p>
        </div>

        <div class="btn">
            <a class="a1" href="dashB.php">BACK</a>
            <a class="a2" href="#">DEALERS</a>
        </div>

</section>    

</body>
</html>