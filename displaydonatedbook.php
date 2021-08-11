<!--display book in webpage UNIVERSITY BOOKS--> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>
        donated books
</title>
   
    <style>
        table{
           font-size:19px;
        }
        table th{
            background-color:mediumturquoise;;
            color:white;
        }
    </style>
</head>
<body>
<div class="container">
    <center><h1>University books</h1></center>
    
    <table class="table table-hover">
        <tr>
            <th>Owner Detail</th>
            <th>Book Detail</th>
            <th>Book Photo</th>
        </tr>
        <?php
        $con = mysqli_connect("localhost","root","","practice");
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
       // echo"done";
        $sql= "SELECT fname,email,authorname,book,mobileno,category,area,state,authorname,edition FROM donatebook ";
        $result = $con-> query($sql);

        if($result-> num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        
        echo "<td>" 
        
        . $row["fname"] . "<br>"
         . $row["area"] . "<br>"
         .$row["state"] ."<br>"
         . $row["email"] . "<br>"
         .$row["mobileno"] . "</td>";
         echo "<td>" 
         . $row["book"] . "<br>"
         . $row["authorname"] . "<br>"
          .$row["edition"] . "</td>";
        echo "</tr>";
        
    }
    
        echo "</table>";
    }
  else{  
      echo "0 result";
  }
$con-> close();
    
   ?>
    </table>
</body>
</htmL>