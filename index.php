
<?php


$con = mysqli_connect("localhost","root","","lucanco");

if(isset($_REQUEST['submit'])){
    $FName = $_REQUEST['f_name'];
    $LName = $_REQUEST['l_name'];
    $CId = $_REQUEST['c_id'];
    $CNo = $_REQUEST['c_no'];
    $Address = $_REQUEST['address'];
	
	
	$Customer_details = "INSERT INTO  customer(F_name,L_name,Customer_ID,Contact_no,Address) VALUES('$FName','$LName','$CId','$CNo','$Address');";
    
    $query = mysqli_query($con,$Customer_details);

    header("Location: reservation.php?CId=".$CId);
}


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
                        <div class="card-head  text-center">
                            <h1>LUCANCO HOTEL</h1>
                            <img src="image/2.jpg" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body ">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label >First Name</label>
                                        <input type="text" class="form-control text-outline-dark" name="f_name"  placeholder="First Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Last Name</label>
                                        <input type="text" class="form-control" name="l_name"  placeholder="Last Name"required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Customer ID</label>
                                        <input type="text" class="form-control" name="c_id"  placeholder="Customer ID" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Contact No</label>
                                        <input type="text" class="form-control" name="c_no"  placeholder="Contact No" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Address</label>
                                        <textarea name="address" id="" cols="30" class="form-control" required></textarea>
                                    </div>
                                        
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                            <input type="submit" value="Submit" name="submit" class="btn btn-success ">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
</body>
</html>

