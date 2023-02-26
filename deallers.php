<?php

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

    #main_box{
        width: 100%;
        height: 100vh;
        background: rgba(219, 217, 79, 0.89);
    }

    #main_box h1{
        padding-top: 20px;
    }

     #row_1{
        padding-left: 30px;
        margin-top: 20px;
    } 

    #col1{
        background: rgba(240, 159, 159, 0.89);
        border: 1px solid rgba(172, 135, 135, 0.89);
        margin: 0;
        color: white;
    }

    #row_2{
        padding-left: 30px;
        margin-top: 5px;
    }

    #col2{
        background: rgba(240, 159, 159, 0.89);
        border: 1px solid rgba(172, 135, 135, 0.89);
        margin: 0;
        color: white;
    }

    #text p{
        font-size: 18px;
    }

    @media all and (max-width: 500px){
        #main_box{
        height: 270vh;
    }

    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>airways || DEALLERS</title>
    <link rel="icon" href="images/airlogo.png">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
 <section id="main_box" class="container-mid">

     <h1 class="text-center">DEALLERS</h1>

 <!-- first row -->
  <div id="row_1" class="row">

    <div id="col1" class="col-md-4">

        <h1 class="text-center">NIGERIA</h1>
        <blockquote class="blockquote">
            <p class="text-center">our head deallers</p>
        </blockquote>

        <div id="text" class="row m-3 text-center">
            <p class="col-md-3">Abuja</p>
            <p class="col-md-3">Lagos</p>
            <p class="col-md-3">Kano</p>
            <p class="col-md-3">Jos</p>
        </div>

    </div>

    <div id="col1" class="col-md-4">

        <h1 class="text-center">ITALY</h1>
        <blockquote class="blockquote">
            <p class="text-center">our head deallers</p>
        </blockquote>

        <div id="text" class="row m-3 text-center">
            <p class="col-md-3">Papal</p>
            <p class="col-md-3">Republic of venice</p>
            <p class="col-md-3">Republic of florence</p>
            <p class="col-md-3">Duchy of milan</p>
        </div>

    </div>

    <div id="col1" class="col-md-4">

        <h1 class="text-center">AMERICA</h1>
        <blockquote class="blockquote">
            <p class="text-center">our head deallers</p>
        </blockquote>

        <div id="text" class="row m-3 text-center">
            <p class="col-md-3">New Mexico</p>
            <p class="col-md-3">Texas</p>
            <p class="col-md-3">North Carolina</p>
            <p class="col-md-3">North dakota</p>
        </div>

    </div>

    <!--first row ends here  -->
  </div>

    <!-- second row -->
  <div id="row_2" class="row">

    <div id="col2" class="col-md-4">

        <h1 class="text-center">CANADA</h1>
        <blockquote class="blockquote">
            <p class="text-center">our head deallers</p>
        </blockquote>

        <div id="text" class="row m-3 text-center">
            <p class="col-md-3">Quebec</p>
            <p class="col-md-3">Manitoba</p>
            <p class="col-md-3">Alberta</p>
            <p class="col-md-3">Ontario</p>
        </div>

    </div>

    <div id="col2" class="col-md-4">

        <h1 class="text-center">INDIA</h1>
        <blockquote class="blockquote">
            <p class="text-center">our head deallers</p>
        </blockquote>

        <div id="text" class="row m-3 text-center">
            <p class="col-md-3">Madhya Pradesh</p>
            <p class="col-md-3">Maharashtra</p>
            <p class="col-md-3">Uttar Pradesh</p>
            <p class="col-md-3">Gujarat</p>
        </div>

    </div>

    <div id="col2" class="col-md-4">

        <h1 class="text-center">EUROPE</h1>
        <blockquote class="blockquote">
            <p class="text-center">our head deallers</p>
        </blockquote>

        <div id="text" class="row m-3 text-center">
            <p class="col-md-3">Ukraine</p>
            <p class="col-md-3">France</p>
            <p class="col-md-3">Spain</p>
            <p class="col-md-3">Swedish</p>
        </div>

    </div>

    <!--second row ends here  -->
  </div>

  <!-- button -->

        <a style="width: 150px; margin: 50px 0 0 45%;" href="dashB.php" class="btn btn-primary btn-lg text-center">BACK</a>

 </section>


  <script src="Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>