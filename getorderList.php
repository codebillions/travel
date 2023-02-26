<?php
            require ("DB.php");
           // require ("getSignup.php");

             class Orders{
                 public $custID;
                 private $connection;

                public function getOrderDeatails(){
                    $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);


                 if($connection->connect_error){
                     echo"Error! could not connect". $connection->connect_error;
                 }else{
                     $sql = "SELECT `date`, `category`, `ticket_type`, `number_of_ticket`, `R_country`, `R_state` 
                              FROM `ticket_orders`
                              JOIN customer ON customer.customerID = ticket_orders.customerID 
                              WHERE customer.customerID= '".$this->custID."'";

                     $result = $connection->query($sql);
                     $num_of_rec = $result->num_rows;

                    // $stm = "SELECT * FROM `ticket_orders` WHERE";

                     if($num_of_rec >= 1 ){ 
			
		    $table ='<table class="table table-striped table-sm">
          		   	<thead>
            		  <tr>
                        <th scope="col">DATE</th>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">TICKET TYPE</th>
                        <th scope="col">NUMBER OF TICKET</th>
                        <th scope="col">COUNTRY OF DELIVERY </th>
                        <th scope="col">STATE OF DELIVERY</th>
                      </tr>          		    	
                        </thead>
          			<tbody>';
                 

                                        while($row = $result->fetch_assoc()){
                                            $table .='<tr scope="row" >
                                                    <td>'.$row['date'].'</td>
                                                    <td>'.$row['category'].'</td>
                                                    <td>'.$row['ticket_type'].'</td>
                                                    <td>'.$row['number_of_ticket'].'</td>
                                                    <td>'.$row['R_country'].'</td>
                                                    <td>'.$row['R_state'].'</td>
                                                </tr>';
                                        }
                                            $table .='
                                                </tbody>   
                                            </table>';

                                            // return $link;
                                            return $table;
                                            }else{
                                            echo "<br><br> <h3 style='text-align: center;'> ".$_SESSION['FLNAME']." you haven't ordered for any ticket yet!<h3>";

                                            // $connection->close();
                                         }     
                                 
                            }
                        }
            
             }
            
            ?>