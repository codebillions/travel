<?php

 session_start();

require("getorderList.php");
require("util.php");
require("getSignup.php");


    protect();


$orders = new Orders();
$orders->custID = $_SESSION['CUSTID'];

$customer = new signUp();

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

  .hist{
      width: 100%;
      height: 100vh;
      background: rgba(240, 231, 150, 0.89); 
      background-size: cover;
      background-position: center;
  }

    .headbox{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

        .hist .headbox .top{
            width: 20%;
            height: 10vh;
            background: black;
            margin: 30px 0 0 100px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
             box-shadow: 1px 1px 10px 1px rgba(43, 42, 42, 0.89);
        }

  .hist .headbox .top h1{
      font-size: 35px;
      text-align: center;  
      /* padding-top: 50px; */
      color: white;
      margin-top: 2vh;
  }

   .hist .headbox a{
      color: white;
      padding: 10px 20px 40px 20px;
      text-align: center;
      background: rgba(105, 93, 91, 0.89);
      text-decoration: none;
      font-size: 23px;
      border-radius: 5px;
      width: 12%;
      height: 5vh;
      margin-right: 100px;
      margin-top: 30px;
  }

  .hist .headbox a:hover{
      opacity: 80%;
      font-size: 22px;
      border: 1px solid white;
      transition: 0.5s;
  }

  .table-responsive{
      width: 100%;  
  }

  .table-responsive table{
    margin-left: 50%;
    margin-top: 110px;
    transform: translate(-50%, -50%);
    display: block;
    width: 50%;
  }

  .table-responsive table tr th{
      font-size: 14px;
      background: rgba(243, 151, 139, 0.89);
      border: 1px solid black;
  }

  @media all and (max-width: 500px){
      .hist .headbox .top{
         width: 35%;
         height: 5vh;
         margin: 10px 0 0 30px;
      }

      .hist .headbox .top h1{
          font-size: 15px;
      }

      .hist .headbox a{
          width: 20%;
          margin: 10px 30px 0 0;
          font-size: 15px;
          padding: 15px 15px 35px 15px;
      }

      .hist .headbox a:hover{
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
    <title>airways || records</title>
    <link href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="icon" href="images\airlogo.png">
</head>
<body>
    <section class="hist">

        <div class="headbox">
            
            <div class="top">
                <h1>ORDERS MADE</h1>
            </div>

           <a href="dashB.php">BACK</a>
        </div>

        <div class="table-responsive">

                <!-- <table class="table table-striped table-bordered">
                 <thead>
                        <tr>
                        <th scope="col">DATE</th>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">TICKET TYPE</th>
                        <th scope="col">NUMBER OF TICKET</th>
                        <th scope="col">COUNTRY OF DELIVERY </th>
                        <th scope="col">STATE OF DELIVERY</th>
                        </tr>
                    </thead> -->

                    <?php echo $orders->getOrderDeatails(); ?>

                    <!-- <tbody>
                        <tr>
                           <td>..</td>
                           <td>..</td>
                           <td>..</td>
                           <td>..</td>
                           <td>..</td>
                        </tr>
                    </tbody> 
                </table>-->
        </div>  
    </section>

   
</body>
</html>