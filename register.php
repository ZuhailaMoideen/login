<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>login</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  
</head>

<?php
include'connection.php';
if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
   


     if ($name==NULL||$dob==NULL||$email==NULL|| $uname==NULL||$pass==NULL)
     {
        $link_ad2='register.php';
           echo "Please enter all details <a href='". $link_ad2 ."''>Back</a>";
     }
        else 
        {
            

           $ins= "insert into user_info values('','$name','$dob','$email','$uname','$pass')";
        mysqli_query( $mysqli,$ins);
        echo "You have successfully Registered";

         $link_ad1='index.php';
        echo "<a href='". $link_ad1 ."'> Home page</a> ";
        }
      
        
}
else
{
    ?>
    
    <body>
<div class="wrapper">
	

    	<section class="content">
        	<br>
            <center>
                       <h1> <u><strong>Signup here</strong></u></h1>
                    
                    <form method="post" action="register.php">
                    <div class="row">
                        <div class="col-md-4">
                            <label> Name:</label>
                            	<input type="text" name="name" class="form-control">
                        </div>
                        <br/>
                        <div class="col-md-4">
                            <label>dateofbirth:</label>
                            	<input type="date" name="dob" class="form-control">
                        </div>
                        
                        <br/>
                    <div class="row">
                    	 <div class="col-md-4">
                             <label>Email:</label>
                             <input type="email" name="email" class="form-control">
                        </div>
                        <br/>
                        <div class="col-md-4">
                            <label>Username:</label>
                            <input type="text" name="uname" class="form-control">
                        </div>
                        <br/>
                        <div class="col-md-4">
                            <label>Password:</label>
                            <input type="text" name="pass" class="form-control">
                        </div>  

                    </div>    
                       
                    <br><br/><br/>
                    <div class="col-md-2 pull-right">
                        <input type="submit" name="submit" value="Submit" class="btn checkbox-inline btn-primary " /> 
                         <input type="reset" name="reset" value="Reset" class="btn checkbox-inline btn-danger " /> 
                    </div>
                 </form>  
                </center>
		</section>
	</div>    
    <?php

}
?>

</body>
</html>


