<?php
//Login

    session_start();

    require("DB.php");
    require("getLogin.php");
    require("getSignup.php");
    require("getOrder.php");


    if(isset($_GET['pg']) && $_GET['pg'] == 'Login'){
        $login = new Login();
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if($login->isUser($email, $pwd)){
            echo("You are logedin successfully".$_SESSION['FLNAME']);
            header("Location: dashB.php");
        }else{
            echo("Sorry, You have entered a wrong email or password");
        }
    }

    //Register
    if(isset($_GET['mg']) && $_GET['mg'] == 'Register'){

        $flname = $_POST['flname'];
        $email = $_POST['email'];
        $phoneNO = $_POST['phoneNO'];
        $pwd = $_POST['pwd'];
        $add = $_POST['add'];
        $gender = $_POST['gender'];

        $reg = new signUp();

        if($reg->customer($flname, $email, $phoneNO, $pwd, $add, $gender)){
            header("Location: welcome.php?msg = success");
        }else{
            echo("Error, something went wrong please try again");
        }
    }

    //orders
    if(isset($_GET['get']) && $_GET['get'] == 'order'){
        $custID = $_POST['ID'];
        $date = $_POST['date'];
        $country = $_POST['country'];
        $state = $_POST['city'];
        $adr = $_POST['adr'];
        $code = $_POST['code'];
        $phNO = $_POST['phNO'];
        $category = $_POST['category'];
        $ticket_type = $_POST['type'];
        $No_teicket = $_POST['T-number'];
        $R_country = $_POST['R-country'];
        $R_state = $_POST['R-state'];

        $ord = new orders();

        if($ord->order($custID, $date, $country, $state, $adr, $code, $phNO, $category, $ticket_type, $No_teicket, $R_country, $R_state)){
            header("Location: ordersuccess.php");
        }else{
            echo("Error, something went wrong please try again");
        }
    }
?>