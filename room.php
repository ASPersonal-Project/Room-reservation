<?php
$con = mysqli_connect("localhost","root","","hotel");

if(isset($_POST['submit'])){
    $Room_number = $_REQUEST['r_number'];
    $Numberofmax = $_REQUEST['nubmerofmax'];
	$Room = $_REQUEST['room'];
    $b = implode(",",$Room);
    $Room_charge = $_REQUEST['room_charge'];
    $Bill_no = $_REQUEST['b_no'];
    $Payment = $_REQUEST['payment'];
    $c = implode(",",$Payment);
	// $Message = $_REQUEST['message'];
	
	$Room_details = "INSERT INTO  room(F_name,L_name,Customer_ID,Contact_no,Address) VALUES('$FName','$LName','$CId','$CNo','$Address')";
	mysqli_query($con,$Room_details);
    header("location:index.php");
}


?>


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
                            <h1>Room</h1>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label >Reservation No</label>
                                        <input type="text" class="form-control" name="r_number"  placeholder="Room Number" require>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Room Number</label>
                                        <input type="text" class="form-control" name="r_number"  placeholder="Room Number" require>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label > Number Of Maxpeople</label>
                                        <input type="text" class="form-control" name="numberofmax"  placeholder="Room Number" require>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label > Room Type</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">NON AC</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">NON AC</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">NON AC</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">NON AC</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Room Charge</label>
                                        <input type="text" class="form-control" name="room_charge"  placeholder="Customer ID">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Bill No</label>
                                        <input type="text" class="form-control" name="b_no"  placeholder="Customer ID">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label > Paymeny Method</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="payment[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">Cach</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="payment[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">Card</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                            <input type="submit" value="Submit" name="submit" class="btn btn-outline-danger ">
                                    </div>
                                    <!-- <div class="form-group col-md-6">
                                        <a href="view.php" class="btn btn-danger mt-2">view</a>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
</body>
</html>

