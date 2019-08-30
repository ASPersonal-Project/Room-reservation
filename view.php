<?php 
$con = mysqli_connect("localhost","root","","lucanco");

?>





<!Doctype html>
<html>
<head>
    <title>Dressmore Login system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
        <section id="form">
            <div class="container">
                    <div class="card p-4 bg-dark text-white">
                        <div class="card-body ">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        
                                        <input type="text" class="form-control text-outline-dark" name="customer_id"  placeholder="Customer ID" require>
                                    </div>
                                    <div class="form-group col-md-6">
                                            <input type="submit" value="search" name="submit" class="btn btn-success ">
                                    </div>

                                    <?php

                                        if(isset($_REQUEST['submit'])){
                                            $Cus_ID = $_REQUEST['customer_id'];
                                            
                                            $Get_Customer_detail = "select* from customer" ;

                                            $query = mysqli_query($con,$Get_Customer_detail);

                                            //$Resevertion_no = "select* from reservation where customer_ID =".$$Cus_ID;
                                            
                                        
                                        while($row_customer = mysqli_fetch_array($query)){
                                            if($Cus_ID == $row_customer['Customer_ID']){

                                                
                                              
                                            ?>

                                    <div class="form-group col-md-6">
                                        <label >Customer ID</label>
                                        <input type="text" class="form-control" name="c_id" value=<?php echo $Cus_ID?> >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >First Name</label>
                                        <input type="text" class="form-control" name="c_id"  value=<?php echo $row_customer['F_name']?> >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Last Name</label>
                                        <input type="text" class="form-control" name="c_id"  value=<?php echo $row_customer['L_name']?> >
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label >Contact No</label>
                                        <input type="text" class="form-control" name="c_no" value=<?php echo $row_customer['Contact_no']?>>
                                    </div>

                                    <?php
                                            }
                                            
                                        }
                                    }
                                    ?>
                                        
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
</body>
</html>

