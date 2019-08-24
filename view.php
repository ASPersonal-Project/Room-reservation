

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
                    <div class="card p-4">
                        <div class="card-body">
                            <form action="view.php" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        
                                        <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="submit" value="Submit" name="submit" class="btn btn-outline-danger ">
                                    </div>
                                        
                                </div>

                            </form>

                        </div>
                    </div>
            </div>
</section>
   
<?php
	$con = mysqli_connect("localhost","root","","hotel");

	
	$studentNo = $_GET['var'];
	
	echo "<div id='stno'>Student No:".$studentNo."</div>";
	$get_name = "select* from booking where sNo='".$studentNo."'";
	$result1= mysqli_query($con,$get_name);
	
	while($row = mysqli_fetch_array($result1)){
        echo "<div id='stno'>Student Name:".$row['sName']."</div>";
        echo "<div id='stno'>Student Name:".$row['email']."</div>";
	}
	
	

?>

<!-- <section id="form">
            <div class="container">
                    <div class="card p-4">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Second Name</label>
                                        <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php $row['fname']?>">
                                        
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Second Name</label>
                                        <input type="text" class="form-control" name="sname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="inputEmail4">Tel No</label>
                                                <textarea name="" id="" cols="30" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <label class="form-check-label" for="gridCheck">Room Type</label>
                                </div>
                                <div class="row">
                                
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" name="room[]"type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">Check me out</label>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" name="room[]"type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">Check me out</label>
                                    </div>
                                 </div>

                                 </div>
                                </div>

                            </form>

                        </div>
                    </div>
            </div>
</section> 
    -->


	

</body>
	
</html>
