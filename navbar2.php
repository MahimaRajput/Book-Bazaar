<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
  <style>
	.navbar-light .navbar-brand{
    color:steelblue;
    font-family: 'Cinzel Decorative', cursive;
    text-transform: uppercase;
    font-weight: bold;
    padding-left: 40px;
    letter-spacing: 2px;
    padding-right: 50px;
    
}
.navbar-light .navbar-nav .nav-link{
    color:orange;
    font-weight: bold;
    text-transform: uppercase;
    font-family: 'Karla', sans-serif;
    margin-right: 40px;
    letter-spacing: 2px;
}

.navbar-light .navbar-nav .nav-link:hover{
    color:steelblue;
    background-color: white;
    text-decoration: underline white;
    border-radius: 1px;
    float: left;
    
}


  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
	  <h2>BOOK BAZAAR</h2></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
    Books
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="universitybook.php">University</a>
        <a class="dropdown-item" href="schoolbook.php">School</a>
        <a class="dropdown-item" href="novelbook.php">Novels</a>
		<a class="dropdown-item" href="otherbook.php">Others</a> 
	</div>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="donateregister.php">Sell</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="upload.php">E-Library</a>
    </li>
    
    
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search Book</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="home1.php"><b>My account</b></a>
    </li><li class="nav-item">
          <?php

          $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          } 
          ?>
      <a class="nav-link" href="mycart.php">MY Cart(<?php echo $count; ?>)</a>
    </li>
  </ul>
</nav>


</body>
</html>