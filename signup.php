<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<style>
  body{
    background-image:url("p (1).jpg");
    background-size: cover;

  }
.login
    {
      
	  background-color:steelblue;
	    color:#fff;
	    top: 50%;
      left:50%;
      position: absolute;
      transform: translate(-50%,-50%);
      box-sizing: border-box;
      padding:30px;
      opacity:0.9;
    }
    h1
    {
      color:white;
      text-align:center;
	  font-size:40px;
	  font-weight:bold;
	  margin:auto;
	  font-family:'Acme', sans-serif;
	  margin-bottom:30px;
    }
    .login p
    {
      margin: 0;
      padding: 0;
      font-weight: bold;
	  font-family:'Signika', sans-serif;
	  font-size:20px;
	  color:white;
    }
    .login input:
    {
      width:100%;
	  margin-bottom:20px;
    }
    .login input[type="text"],input[type="password"]
   {
      border: none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height: 40px;
	  width:100%;
	  margin-bottom:20px;
      color: #fff;
      font-size: 16px;
    }
  
       .login a
    {
      text-align:center;
      text-decoration: none;
      font-size: 14px;
      color:black;
    }
    .login a:hover
    {
      color:black;
    }
</style>
<body>
    
    <?php
    include "connection.php";
if(isset($_POST['submit']))
{   
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $psw=mysqli_real_escape_string($con,$_POST['psw']);
    $psw_repeat =mysqli_real_escape_string($con,$_POST['psw_repeat']);

    //to encrypt password
    $pass=password_hash($psw,PASSWORD_BCRYPT);
    $pass_repeat=password_hash($psw_repeat,PASSWORD_BCRYPT);

    //to check email already registered 
    $emailquery = "select * from signupregistration where email='$email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount =mysqli_num_rows($query);
    if($emailcount>0)

    {
        $email_pass=mysqli_fetch_assoc($query);
      
        echo "email already exists";
    }
    else{
        if($psw === $psw_repeat)
        {
            $insertquery="INSERT INTO signupregistration (name , email, psw, psw_repeat) VALUES ('$username','$email','$pass' ,'$pass_repeat')";
            
            //to change that data is inserted or not
            $iquery=mysqli_query($con,$insertquery);
            if($iquery)
            {

                echo "inserted data in db";
                header('location:home1.php');

            }
            else{
                echo "not inserted in db";
            }
        }
        else{
            echo "not valid password";
        }
    }
}
    ?>
<div class="container wrapper" style="padding-right: 300px;padding-left: 300px;">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
<div class="login">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
    
    
    
    

      <button type="submit" class="btn btn-warning btn-block" name="submit">Sign Up</button>
      <center>
      <a href="login.php">Already have an account? Login</a>
</center>
    
  </div>
</div>
</form>

</body>
</html>
