<?php

//require("getLogin.php");

    class signUp{
        public $row;

        public function knowCustomer(){
            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if ($connection->connect_error){
              echo "Error! could not connect to sever!". $connection->connect_error;
            }else{
                $sql = "SELECT * FROM `customer`";

                $result = $connection->query($sql);
                $num_of_rec = $result->num_rows;

            if($num_of_rec >= 1){
                $grant = '';

                while($row = $result->fetch_assoc()){
                   //    $grant .='<option value="'.$row['customerID'].'">'.$row['fullName'].' '$row['email']'</option>';
                }
                return $grant;
            }
            }
        }

        


        public function customer($flname, $email, $phoneNO, $pwd, $add, $gender){
            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if($connection->connect_error){
                echo("Error! could notconnect to the database". $connection->connect_error);
            }else{
                $flname = $connection->real_escape_string( $flname);
                $email = $connection->real_escape_string($email);
                $phoneNO = $connection->real_escape_string($phoneNO);
                $pwd = $connection->real_escape_string($pwd);
                $add = $connection->real_escape_string($add);
                $gender = $connection->real_escape_string($gender);
               
                // $cust = $this->gencustomerID();
                
                $sql = "SELECT * FROM `custidgenerator`";

                $result = $connection->query($sql);
                $row = $result->fetch_assoc();
               
                $mod ="";
                $start = $row['start'];
                $current = $row['current'];
                $str = "CUST";

                if($start >= $current){
                    $current++;
                    if($current < 1000){
                        $mod = '0'.$current;
                    }
                }else{
                     $current++;
                     if($current < 1000){
                         $mod = '0'.$current;
                     }else{
                         $mod = $current;
                     }
                }

                $sql = "UPDATE `custidgenerator` SET `current`='".$current."' ";
                $connection->query($sql);

                 $sql = "INSERT INTO `customer`(`customerID`, `fullName`, `email`, `phoneNO`, `pass_word`, `address`, `gender`) 
                                                VALUES ('".$str.$mod."', '".$flname."', '".$email."', '".$phoneNO."', '".$pwd."', '".$add."', '".$gender."')";

                if($connection->query($sql)){
                    return true;
                }else{
                    return false;
                }
            }
            $connection->close();
        }
    }



                //  $stmt->bind_param("sssssss", $str.$modify, $flname, $email, $phoneNO, $pwd, $add, $gender);
                //  $stmt->execute();
                

                // $stmt = $connection->prepare("INSERT INTO `customer`(`customerID`, `fullName`, `email`, `phoneNO`, `pass_word`, `address`, `gender`) 
                //                                VALUES (?, ?, ?, ?, ?, ?, ?)");

                // $stmt->bind_param("sssssss", $str.$modify, $flname, $email, $phoneNO, $pwd, $add, $gender);
                // $stmt->execute();


     // private function gencustomerID(){
        //     $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        //     if($connection->connect_error){
        //         echo("Error! could not connect to the database". $connection->connect_error);
        //     }else{
        //         $sql = "SELECT * FROM `custidgenerator`";

        //         $result = $connection->query($sql);
        //         $row = $result->fetch_assoc();

        //         $modify = "";
        //         $start = $row['start'];
        //         $current = $row['current'];
        //         $str = "CUST-";

        //         if($start >= $current){
        //             $current++;
        //             if($current < 1000){
        //                 $modify = '500'.$current;
        //             }
        //         }else{
        //              $current++;

        //              if($current < 10){
        //                  $modify = '500'.$current;
        //              }else{
        //                  $modify = $current;
        //              }
        //         }

        //         $sql = "UPDATE `custidgenerator` SET `current`='".$current."'";
        //         $connection->query($sql);

        //         return $str.$modify;
        //     }

        //     $connection->close();
        // }
?>