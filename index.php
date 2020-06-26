
<?php
session_start();
include'connection.php';
if(isset($_POST['login']))
{
  $uname=$_POST["uname"];
  $pass=$_POST["pass"];
    if (empty($uname)||empty($pass)) 
    {
       
       echo '<script type="text/javascript">alert("Please enter username and password");</script>';
         
    }
    else
    {
  
        $sel= "select * from user_info where uname=='$uname' and pass=='$pass'";
       
        $result=mysqli_query($mysqli,$sel);
        $row=mysqli_num_rows($result);
        if($row!='0')
        {
          $_SESSION['uname']=$uname;
           $_SESSION['pass']=$pass;
           echo "<h2 align='center'>Welcome to our website $uname</h2>";
           echo "<a href='index.php'>logout</a>"; 
           
           session_destroy(); 
        }
        else
        {
           
          echo "Password is not correct";
          echo "<a href='index.php'>back</a>";
          
          session_destroy();

      }
    }
    
}
else
{
    ?>
    <html>
    <body>
    <br/>
    <br/>
    <center>
   <b><u> WELCOME GUEST...</u></b><br/></br>
   
    <form name="form1" action="index.php" method="post" >
    username<input type="text" name="uname" /><br/>
    password<input type="password" name="pass"  /><br/>
    <input type="submit" name="login" value="login"/><br/><br/><br/><br/>
    <a href="register.php">Not yet Registered? Sign UP</a><br/><br/>
    </form>
    </center>
    </body>
    </html>  
    <?php  
}

?>