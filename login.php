<?php
session_start();
?>
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
      width:450px;
	  height:400px;
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
    include_once "connection.php";
    include_once "navbar1.php";
    if(isset($_POST['submit']))
{   
   $email=$_POST['email'];

    $password=$_POST['psw'];
    //to check email already registered 
    $email_check = "select * from signupregistration where email='$email'";
   
    $query=mysqli_query($con,$email_check);
    $emailcount =mysqli_num_rows($query);
    if($emailcount)
    {
        $email_pass=mysqli_fetch_assoc($query);
      
        $db_pass = $email_pass['psw'];
         $_SESSION['username'] = $email_pass['name'];
        $pass_decode = password_verify($password , $db_pass);
        if(($pass_decode)){
          echo "login done";
          header('location:home1.php');
        }
        else
        {
          echo "not done";
        }
      }

    else{
         echo"<script>
                    alert('not valid....');
                    </script>";
         }
       }
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
  <div class="login">
    <h1>Login</h1>
  
    <form>
    <p>Email</p>
    <input type="text" placeholder="Enter Email" name="email" required>
    <p>Password</p>
    <input type="password" placeholder="Enter Password" name="psw" required>   
    <button type="submit" class="btn btn-warning btn-block" name="submit">Log in</button>
   
      
      <br>
      <center><a href="signup.php">Dont have an Account? Sign up</a></center>
			</form>
    
    </div>
  
</form>

</body>
</html>
