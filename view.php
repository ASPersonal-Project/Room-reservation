<?php 
$con = mysqli_connect("localhost","root","","hotel");
?>
<!Doctype html>
<html>
<head>
    <title>Dressmore Login system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> <link rel="stylesheet" href="style.css">
    <style>
        body{
            background: url(image/1.jpg);
            
        }
    </style>
</head>
<body id="main" ;
>
    
    
	
        <section id="form">
            <div class="container py-5">
                    <div class="card p-4 bg-dark text-white">
                    <div class="card-head text-center">
                    <h1>View Details</h1>
                    </div>
                        <div class="card-body bg-secondary" >
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        
                                        <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="submit" value="Search" name="submit" class="btn btn-primary ">
                                    </div>
                                </div>
                                <?php
                                    if(isset($_REQUEST['submit'])){
                                        $studentNo = $_REQUEST['fname'];
                                        $get_sNo = "select* from booking where fname ='".$studentNo."'";
                                    
                                        $query = mysqli_query($con,$get_sNo);
                                        
                                        // echo $studentNo;
                                    while($row_sNo = mysqli_fetch_array($query)){
                                        if($row_sNo['fname'] == $studentNo){
                                            //echo $row_sNo['sname'];
                                ?>
                                 <div class="row">
                                <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Second Name</label>
                                        <input type="text" class="form-control" name="sname" value="<?php echo $row_sNo['fname'];?>" placeholder="Enter email">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Second Name</label>
                                        <input type="text" class="form-control" name="sname" value="<?php echo $row_sNo['sname'];?>" placeholder="Enter email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" name="email"value="<?php echo $row_sNo['email'];?>"  placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Tel No</label>
                                        <input type="text" class="form-control" name="tno" value="<?php echo $row_sNo['fname'];?>"  placeholder="Enter email">
                                    </div> 
                                    <?php
                                    }

	
                                }
                            }
                                
                                    ?>
                                   

                            </form>

                        </div>
                    </div>
            </div>
</section>
</body>
</html>
