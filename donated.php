<!--to insert into database detail of donor-->
<?php
$host = 'localhost' ;
$dbUsername = 'root';
$dbPassword ='';
$dbname= 'practice';

$username = $_POST['username'];
$bookname = $_POST['bookname'];
$authorname = $_POST['authorname'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$pincode=$_POST['pincode'];
$Publication = $_POST['Publication'];
$category = $_POST['category'];

$city = $_POST['city'];
$state = $_POST['state'];
$edition = $_POST['edition'];
$price=$_POST['price'];
$files= $_FILES['file']; 
$filename = $files['name']; 
$fileerror = $files['error'];
$filetmp = $files ['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));

$destinationfile = 'upload/' . $filename; move_uploaded_file($filetmp, $destinationfile);
$conn = new mysqli($host , $dbUsername,$dbPassword, $dbname );

if($conn->connect_error) {
die("Connection Failed : $conn->connect_error");
}
else{
$stmt = $conn->prepare("insert into imgupload(`bookname`, `Publication`, `authorname`, `category`, `username`, `state`, `city`, `pincode`, `email`,`edition`,`price`)
 VALUES (?,?,?,?,?,?,?,?,?,?,?)");
$stmt ->bind_param("sssssssssss",$bookname,$Publication,$authorname, $category,$username,$state,$city,$pincode,$email,$edition,$price);
$stmt->execute();
echo "<h1>Added Successfully...  </h1>";
$stmt ->close();
$conn->close();
}
?>
