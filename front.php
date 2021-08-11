<?php
include_once "navbar1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  
    <title>Document</title>
<script>
        $('.carousel').carousel({
    interval: 1000
  });
  </script>
    <style>
         body {
     overflow-x: hidden;
            }
        .carousel-control-prev-icon,.carousel-control-next-icon{
            
            border: 10px;
        }
  .carousel-item img{
      height: 700px;
      width: 100%;
      margin-top: px;
  }
  .center {
    position: absolute;
    bottom: 318px;
    left: 30%;
    font-size: 40px;
    color: black;
    font-weight: bold;
    font-family: 'Karla', sans-serif;
    /* margin: auto; */
}
btn .btn-primary{
padding: 11px 50px;
}
        .contact_body{
    font-family: 'Karla', sans-serif;
    font-size: 20px;
}
.contact_head{
    font-family: 'Martel', serif;
    font-size: 50px;
    color: steelblue;
}

.socialcontact{
        text-decoration: none;
        font-size: 18px;
        color: white;
        margin:10px;
        font-family: 'DM Sans', sans-serif;
        }
        .socialicon{
            text-decoration: none;
           color: white;
           margin:10px;
        }
        .h1, h1 {
    font-size: 2.5rem;
    font-weight: bolder;
    background-color: white;
}
         
    </style>
</head>
<body>


<div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li> 
            <li data-target="#slider" data-slide-to="2"></li>
            <li data-target="#slider" data-slide-to="3"></li>
            <li data-target="#slider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="6.jpg" alt="slide1 image">
                <center>
                <div class="center"><h1>WELCOME TO BOOK BAZAAR</h1>
                     <a style=" background-color: #007bff;
    border-color: #007bff;
  color: white;
  padding: 7px 56px;
  text-align: center;
  text-decoration: none;
  display: inline-block;" href="login.php">Login</a>
                    </center>


            </div>
            <div class="carousel-item">
                <img src="6.jpg" alt="slide2 image">
                <center>
                <div class="center"><h1>WELCOME TO BOOK BAZAAR</h1>
                     <a style=" background-color: #007bff;
    border-color: #007bff;
  color: white;
  padding: 7px 56px;
  text-align: center;
  text-decoration: none;
  display: inline-block;" href="login.php">Login</a>
                    </center>
</div>
            <div class="carousel-item">
                <img src="3.jpg" alt="slide3 image">
                 <center>
                <div class="center"><h1>WELCOME TO BOOK BAZAAR</h1>
                     <a style=" background-color: #007bff;
    border-color: #007bff;
  color: white;
  padding: 7px 56px;
  text-align: center;
  text-decoration: none;
  display: inline-block;" href="login.php">Login</a>
                    </center>

            </div>
            <div class="carousel-item">
                <img src="4.jpg" alt="slide4 image">
                 <center>
                <div class="center"><h1>WELCOME TO BOOK BAZAAR</h1>
                     <a style=" background-color: #007bff;
    border-color: #007bff;
  color: white;
  padding: 7px 56px;
  text-align: center;
  text-decoration: none;
  display: inline-block;" href="login.php">Login</a>
                    </center>

            </div>
            <div class="carousel-item">
                <img src="5.jpg" alt="slide5 image">
                 <center>
                <div class="center"><h1>WELCOME TO BOOK BAZAAR</h1>
                     <a style=" background-color: #007bff;
    border-color: #007bff;
  color: white;
  padding: 7px 56px;
  text-align: center;
  text-decoration: none;
  display: inline-block;" href="login.php">Login</a>
                    </center>

            </div>
        </div>

        <a class="carousel-control-prev" href="#slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div> 
</body>
</html>





      
     
