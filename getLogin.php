<?php

    class Login{
        public $sql;
        public $email;
        public $pwd;
        private $connection;


        public function isUser($email, $pwd){

            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if($connection->connect_error){
                echo("Error! could not connect to the database".$connection->connect_error);
            }else{

                 $email = $this->cleanData($email);
                 $pwd = $this->cleanData($pwd);

                $sql = "SELECT `customerID`, `fullName`, `email`, `phoneNO`, `pass_word`, `address`, `gender` 
                        FROM `customer` 
                        WHERE `email` = '".$email."' and  `pass_word` = '".$pwd."';";

                $result = $connection->query($sql);
                $rowCount = $result->num_rows;

                if($rowCount == 1){
                    $row = $result->fetch_assoc();

                    $_SESSION['FLNAME'] = $row['fullName'];
                    $_SESSION['EMAIL'] = $row['email'];
                    $_SESSION['PHONENO'] = $row['phoneNO'];
                    $_SESSION['PWD'] = $row['pass_word'];
                    $_SESSION['ADDRESS'] = $row['address'];
                    $_SESSION['GENDER'] = $row['gender'];
                    $_SESSION['CUSTID'] = $row['customerID'];

                    return true;
                    $connection->close();
                }
            }
        } 

        private function cleanData($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
    }

?>