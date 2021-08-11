 <?php
      include_once "navbar2.php"
      ?> 
<?php  
 $connect = mysqli_connect("localhost", "root", "", "practice");  
 if(isset($_POST["submit"]))  
 {  
      if(!empty($_POST["search"]))  
      {  
           $query = str_replace(" ", "+", $_POST["search"]);  
           header("location:search.php?search=" . $query);  
      }  
 }  
 ?>  
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Search Books</title>  
           <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
           <style>

.contact_body{
font-family: 'Karla', sans-serif;
font-size: 20px;
}
.contact_head{
font-family: 'Martel', serif;
font-size: 50px;
color: steelblue;
}
.img-class{
height: 350px;
width: 300px;
}</style>
      </head>  
      <body> 

           <br /><br />  
           <div class="container">  
                <h3 align="center">Search Books</h3><br />  
                <form method="post">  
                     <label>Enter Search Text</label>  
                     <input type="text" name="search" class="form-control" value="<?php if(isset($_GET["search"])) echo $_GET["search"]; ?>" />  
                     <br />  
                     <input type="submit" name="submit" class="btn btn-info" value="Search" />  
                </form>  
                <br /><br />  
                
                <br>
   
                     <?php  
                     if(isset($_GET["search"]))  
                     {  
                          $condition = '';  
                          $query = explode(" ", $_GET["search"]);  
                          foreach($query as $text)  
                          {  
                               $condition .= "bookname LIKE '%".mysqli_real_escape_string($connect, $text)."%' OR authorname LIKE '%".mysqli_real_escape_string($connect, $text)."%' OR 
                                category LIKE '%".mysqli_real_escape_string($connect, $text)."%' OR ";  
                          }  
                          $condition = substr($condition, 0, -4);  
                          $sql_query = "SELECT * FROM imgupload WHERE " . $condition;
                          $result = mysqli_query($connect, $sql_query);  

                          ?>
                        
          <?php
                          if(mysqli_num_rows($result) > 0) 
                          {  ?> 
                               <div class="row">
      
                                   
                  <?php
                               while($row = mysqli_fetch_array($result))  
                               {  ?>
                                  <div class="col-lg-4 col-sm-6"> 
       
                                 <div class="card shadow p-3 mb-5 bg-white rounded">
                                       <img class="img-class" src=" <?php echo $row['image']; ?> ">
                                       
                                       <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Title:</span><i><?php echo $row["bookname"]  ?></i></h1>
                                       <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Author:</span><i><?php echo $row["authorname"]  ?></i></h1>
                                       <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Edition:</span><i><?php echo $row["edition"]  ?></i></h1>
                                       <p class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Price:</span><i><?php echo $row["price"] ?></i></p>
                                         
                                 </div>
                                  </div>   
                                   <?php
                                   
                               }  
                          }  
                          else  
                          {  
                               echo '<label>Data not Found</label>';  
                          }  
                     }  
                     ?>  
                     
                </div>  
           </div>  
      </body>  
 </html>  