

<!Doctype html>
<html>
<head>
    <title>Dressmore Login system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> <link rel="stylesheet" href="style.css">


		


	
</head>
<body id="main" background = " photo\Background\1.png";
>
    
    
	
        <section id="form">
            <div class="container">
                    <div class="card p-4 bg-dark text-white">
                        <div class="card-head"><h1>SANN HOTEL</h1></div>
                        <div class="card-body">
                            <form action="update.php" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" name="fname"  placeholder="Enter email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Second Name</label>
                                        <input type="text" class="form-control" name="sname"  placeholder="Enter email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" name="email"id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Tel No</label>
                                        <input type="text" class="form-control" name="tno" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                   
                                        
                                </div>
                                <div class="row">
                                        <!-- <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="inputEmail4">Tel No</label>
                                                <textarea name="" id="" cols="30" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                        </div> -->
                                        <label class="form-check-label" for="gridCheck">Room Type</label>
                                </div>
                                <div class="row">
                                
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" name="room[]"type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">AC</label>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" name="room[]"type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">NON AC</label>
                                    </div>
                                 </div>
                                 
                                <!-- <div class="form-group col-md-6">
                                        <input type="submit" value="View" name="View" class="btn btn-outline-danger ">
                                </div> -->
                                </div>
                                <div class="row">
                                <div class="form-group col-md">
                                        <input type="submit" value="UPDATE" name="update" class="btn btn-danger btn-block ">
                                </div>
                                </div>

                            </form>

                        </div>
                    </div>
            </div>

            
                                        
                                       
                                    
</section>
<?php 

$con = mysqli_connect("localhost","root","","hotel");

    $name = $_REQUEST['name'];
    // echo $name;
    if(isset($_REQUEST['update'])){
       
        
        $fname = $_REQUEST['fname'];
        $sname = $_REQUEST['sname'];
        $email = $_REQUEST['email'];
        $tno = $_REQUEST['tno'];

        $query = "UPDATE booking SET fname='$fname',sname='$sname',email='$email',tno='$tno' where fname = $name";

        mysqli_query($con,$query);

        

        

    }
    // header("location:view.php");

?>
   



	

</body>
	
</html>
