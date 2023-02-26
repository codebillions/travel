<?php

    //require("getLogin.php");    


    function protect(){
        if(isset($_SESSION['email']) || isset($_SESSION['pass_word'])){
            header("Location: login.php");
        }
    }

    if(isset($_GET['lgt']) && $_GET['lgt'] == 'logout'){
        session_unset();
        session_destroy();
        header("Location: login.php");
    }

    // function protectPage(){
    //     if(!isset($_SESSION['EMAIL']) || !isset($_SESSION['CUSTID'])){
    //         header("Location: travel.php");
    //     }
    // }

?>