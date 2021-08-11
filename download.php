<?php
// exit;
function output_file($file, $name, $mime_type='')
{
if(!is_readable($file)) die('File not found!');

$size = filesize($file);
$name = rawurldecode($name);
$known_mime_types=array(
"pdf" => "application/pdf",
"txt" => "text/plain",
"html" => "text/html",
"htm" => "text/html",
"exe" => "application/octet-stream",
"zip" => "application/zip",
"doc" => "application/msword",
"xls" => "application/vnd.ms-excel",
"ppt" => "application/vnd.ms-powerpoint",
"gif" => "image/gif",
"png" => "image/png",
"jpeg"=> "image/jpg",
"jpg" => "image/jpg",
"php" => "text/plain"
);
if($mime_type==''){
$file_extension = strtolower(substr(strrchr($file,"."),1));
if(array_key_exists($file_extension, $known_mime_types)){
$mime_type=$known_mime_types[$file_extension];
} else {
$mime_type="application/force-download";
};
};

@ob_end_clean();


if(ini_get('zlib.output_compression'))
ini_set('zlib.output_compression', 'Off');
header('Content-Type: ' . $mime_type);
header('Content-Disposition: attachment; filename="'.$name.'"');
header("Content-Transfer-Encoding: binary");
header('Accept-Ranges: bytes');
header("Cache-control: private");
header('Pragma: private');
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
if(isset($_SERVER['HTTP_RANGE']))
{
list($a, $range) = explode("=",$_SERVER['HTTP_RANGE'],2);
list($range) = explode(",",$range,2);
list($range, $range_end) = explode("-", $range);
$range=intval($range);
if(!$range_end) {
$range_end=$size-1;
} else {
$range_end=intval($range_end);
}
$new_length = $range_end-$range+1;
header("HTTP/1.1 206 Partial Content");
header("Content-Length: $new_length");
header("Content-Range: bytes $range-$range_end/$size");
} else {
$new_length=$size;
header("Content-Length: ".$size);
}
$chunksize = 1*(1024*1024);
$bytes_send = 0;
if ($file = fopen($file, 'r'))
{
if(isset($_SERVER['HTTP_RANGE']))
fseek($file, $range);

while(!feof($file) &&
(!connection_aborted()) &&
($bytes_send<$new_length)
)
{
$buffer = fread($file, $chunksize);
print($buffer);
flush();
$bytes_send += strlen($buffer);
}
fclose($file);
} else

die('Error - cannot open file.');
die();
}
set_time_limit(0);
$file_path='upload/'.$_REQUEST['f'];
output_file($file_path, ''.$_REQUEST['filename'].'', 'text/plain');
?>
<html>
<head>
<title>Upload and Download Files</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<style>
</style>
<body>
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Files</th>
					<th align="center">Action</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class="alert-success"><a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
</body>
</html>