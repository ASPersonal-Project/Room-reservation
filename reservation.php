

<!Doctype html>
<html>
<head>
    <title>Dressmore Login system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> <link rel="stylesheet" href="style.css">


		


	
</head>
<body id="main" background = " photo\Background\1.png";>
    
        <section id="form">
            <div class="container">
                    <div class="card p-4 bg-dark text-white">
                        <div class="card-head">
                            <h1>RESERVATION</h1>
                        </div>
                        <div class="card-body">
                            <form action="reservation.php" method="post">
                                <div class="row">
                                    <!-- <div class="form-group col-md-6">
                                        <label >Customer ID</label>
                                        <input type="text" class="form-control" name="c_id"  placeholder="Customer ID" >
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <label >Reservation No</label>
                                        <input type="text" class="form-control" name="r_no"  placeholder="Reservation No">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Number OF People</label>
                                        <input type="text" class="form-control" name="numberofpeople"  placeholder="Number OF People">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Check In Date</label>
                                        <input type="date" class="form-control" name="in_date"  placeholder="Check In Date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Check Out Date</label>
                                        <input type="date" class="form-control" name="out_date"  placeholder="Check Out Date">
                                    </div>
                                    <!-- <div class="form-group col-md-6">
                                        <label >Billing No</label>
                                        <input type="text" class="form-control" name="bill_no"  placeholder="Billing No" >
                                    </div> -->
                                    <!-- <div class="form-group col-md-6">
                                        <label >Room Charge</label>
                                        <input type="text" class="form-control" name="room_charge"  placeholder="Room Charge" >
                                    </div>
                                         -->
                                </div>

                                <div class="row">
                                    <!-- <div class="form-group col-md-6">
                                            <input type="submit" value="Submit" name="submit" class="btn btn-outline-danger ">
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <a href="room.php" name="submit" class="btn btn-danger mt-2">Submit</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
</body>
</html>

<?php
$con = mysqli_connect("localhost","root","","hotel");

if(isset($_POST['submit'])){
    // $Customer_id = $_REQUEST['c_id'];
    $Reservation_no = $_REQUEST['r_no'];
    $Numberofpeople = $_REQUEST['numberofpeople'];
    $In_date = $_REQUEST['in_date'];
    $Out_date = $_REQUEST['out_date'];
    // $Bill_no = $_REQUEST['bill_no'];
    // $room_charge = $_REQUEST['room_charge'];
	// $b = implode(",",$room);
	// $Message = $_REQUEST['message'];
	
	$reservation_details =  "INSERT INTO  reservation(Reservation_no,No_of_guests,Check_in_date,Check_out_date) VALUES('$Reservation_no','$Numberofpeople','$In_date','$Out_date')";
	mysqli_query($con,$reservation_details);
    // header("location:home.php");
    // ,'$In_date','$Out_date','$Bill_no'
    // ,Check_in_date,Check_out_date,Billing_no
}


?>
