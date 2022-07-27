<?php 
$con=mysqli_connect ('192.168.43.7', 'ummi', 'rootpass');
mysqli_select_db($con,"userreg");
if(isset($_REQUEST["submitjournal"]))
{
	 $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="uploads/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("pdf");
	if(in_array($ext,$allowed))
	{
		move_uploaded_file($tmp_name,$path);
		mysqli_query($con,"insert into images(file_name)values('$file')");	
	}else{
		echo 'File not allowed';
	} 
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/81280830ae.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> 
</head>
<body>
	<h1> YOUR JOURNAL WAS UPLOADED SUCCESSFULLY</h1>
	<p> Thanks for using cicot journals</P>
</body>
</html>