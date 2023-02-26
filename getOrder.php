<?php

    class orders{

        // public function knowCustomer(){
        //     $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        //     if ($connection->connect_error){
        //       echo "Error! could not connect to sever!". $connection->connect_error;
        //     }else{
        //         $sql = "SELECT * FROM `customer`";

        //         $result = $connection->query($sql);
        //         $num_of_rec = $result->num_rows;

        //     if($num_of_rec >= 1){
        //         $grant = '';

        //         while($row = $result->fetch_assoc()){
        //             $grant .='<option value="'.$row['customerID'].'">'.$row['fullName'].' '$row['email']'</option>';
        //         }
        //         return $grant;
        //     }
        //     }
        // }




        public function order($custID, $date, $country, $state, $adr, $code, $phNO, $category, $ticket_type, $No_teicket, $R_country, $R_state){
            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if($connection->connect_error){
                echo("Error! could not connect to the database". $connection->connect_error);
            }else{

                $custID = $connection->real_escape_string($custID);
                $date = $connection->real_escape_string($date);
                $country = $connection->real_escape_string($country);
                $state = $connection->real_escape_string($state);
                $adr = $connection->real_escape_string($adr);
                $code = $connection->real_escape_string($code);
                $phNO = $connection->real_escape_string($phNO);
                $category = $connection->real_escape_string($category);
                $ticket_type = $connection->real_escape_string($ticket_type);
                $No_teicket = $connection->real_escape_string($No_teicket);
                $R_country = $connection->real_escape_string($R_country);
                $R_state = $connection->real_escape_string($R_state);
                

                $sql = "INSERT INTO `ticket_orders`(`customerID`, `date`, `country`, `state`, `address`, `zip_code`, `phoneNo`, `category`, `ticket_type`, `number_of_ticket`, `R_country`, `R_state`) 
                        VALUES ('".$custID."', '".$date."', '".$country."', '".$state."', '".$adr."', '".$code."', '".$phNO."', '".$category."', '".$ticket_type."', '".$No_teicket."', '".$R_country."', '".$R_state."')";

                if($connection->query($sql)){
                    return true;
                }else{
                    return false;
                }
            }
            $connection->close();
        }

    }

?>