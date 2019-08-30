<?php
$con = mysqli_connect("localhost","root","","lucanco");
    $cid = $_REQUEST['CId'];

if(isset($_POST['submit'])){
    $Reservation_no = $_REQUEST['r_no'];
    $Numberofpeople = $_REQUEST['numberofpeople'];
    $In_date = $_REQUEST['in_date'];
    $Out_date = $_REQUEST['out_date'];
    
    
	
    $reservation_details = "INSERT INTO  reservation(Reservation_no,Customer_ID,No_of_guests,Check_in_date,Check_out_date) VALUES('$Reservation_no','$cid','$Numberofpeople','$In_date','$Out_date')";
   
    mysqli_query($con,$reservation_details);

    header("location:room.php?reservation_no=".$Reservation_no);
    
}


?>


<!Doctype html>
<html>
<head>
    <title>Dressmore Login system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
      <style>
        .card-body{
            background-image:url("image/3.jpg");
        }
    </style>	
</head>
<body id="main" background = " photo\Background\1.png";>
    
        <section id="form">
            <div class="container">
                    <div class="card p-4 bg-dark text-white">
                        <div class="card-head">
                            <h1>RESERVATION</h1>
                            <img src="image/3.jpg" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label >Reservation No</label>
                                        <input type="text" class="form-control" name="r_no"  placeholder="Reservation No" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Number OF People</label>
                                        <input type="text" class="form-control" name="numberofpeople"  placeholder="Number OF People" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Check In Date</label>
                                        <input type="date" class="form-control" name="in_date"  placeholder="Check In Date" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Check Out Date</label>
                                        <input type="date" class="form-control" name="out_date"  placeholder="Check Out Date" required>
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

