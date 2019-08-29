<?php
$con = mysqli_connect("localhost","root","","hotel");
    $Reservation_no = $_REQUEST['reservation_no'];

if(isset($_POST['submit'])){
    $Room_number = $_REQUEST['room_number'];
    //$Numberofmax = $_REQUEST['numberofmax'];
	$Room = $_REQUEST['room'];
    $b = implode(",",$Room);
    $Room_charge = $_REQUEST['room_charge'];
    $Bill_no = $_REQUEST['bill_no'];
    $Payment_method = $_REQUEST['payment'];
    $c = implode(",",$Payment_method);
	// $Message = $_REQUEST['message'];
	
    // $Room_details = "INSERT INTO  room_details(Room_type,No_of_max_pepole) VALUES('$b','$Numberofmax')";
    // echo "INSERT INTO  room_de(Room_type,No_of_max_people) VALUES('$b','$Numberofmax')";
	// mysqli_query($con,$Room_details);
    //*header("location:index.php");

    $Room = "INSERT INTO  room(Room_number,Room_type,Hotel_ID) VALUES('$Room_number','$b','LGC01')";
    echo "INSERT INTO  room(Room_number,Room_type,Hotel_ID) VALUES('$Room_number','$b','LGC01')";
    mysqli_query($con,$Room);
    
    $reservation_charge = "INSERT INTO  reservation_charge(Reservation_no,Room_charge) VALUES('$Reservation_no',$Room_charge)";
    echo "INSERT INTO  reservation_charge(Reservation_no,Room_charge) VALUES('$Reservation_no',$Room_charge)";
    mysqli_query($con,$reservation_charge);
    
    $billing = "INSERT INTO  billing(Billing_no,Reservation_no,Payment_method) VALUES('$Bill_no','$Reservation_no','$c')";
    echo "INSERT INTO  biiiing(Billing_no,Reservation_no,Payment_method) VALUES('$Bill_no','$Reservation_no','$c')";
	mysqli_query($con,$billing);
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
                                        <input  class="form-control" name="re_number"  placeholder="Reservation No" value=<?php echo $Reservation_no ?> >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Room Number</label>
                                        <input type="text" class="form-control" name="room_number"  placeholder="Room Number" >
                                    </div>
                                    <!-- <div class="form-group col-md-6">
                                        <label > Number Of Maxpeople</label>
                                        <input type="text" class="form-control" name="numberofmax"  placeholder="Room Number" >
                                    </div> -->
                                    
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label > Room Type</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]" type="checkbox" value="Deluxe double room">
                                            <label class="form-check-label" >Deluxe double room</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]" type="checkbox" value="Master suite">
                                            <label class="form-check-label" >Master suite</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]" type="checkbox" value="Single bedroom" >
                                            <label class="form-check-label" >Single bedroom</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]" type="checkbox" value="Supirier double room" >
                                            <label class="form-check-label" >Supirier double room</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Room Charge</label>
                                        <input type="text" class="form-control" name="room_charge"  placeholder="Customer ID">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Bill No</label>
                                        <input type="text" class="form-control" name="bill_no"  placeholder="Customer ID">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label > Paymeny Method</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="payment[]" type="checkbox" value="CASH" >
                                            <label class="form-check-label" for="gridCheck">Cach</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="payment[]" type="checkbox" value="CARD" >
                                            <label class="form-check-label" for="gridCheck">Card</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                            <input type="submit" value="Submit" name="submit" class="btn btn-success ">
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

