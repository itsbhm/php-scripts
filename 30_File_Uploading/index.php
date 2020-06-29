<?php
if (ISSET($_POST['submit'])) {

$f_name = $_FILES['myfile']['name'];
$f_tmp = $_FILES['myfile']['tmp_name'];
$f_size = $_FILES['myfile']['size'];
$f_type = EXPLODE('.', $f_name);
$f_ext = STRTOLOWER(END($f_type));
$f_newfile = UNIQID().'.'.$f_ext;
$store = "uploads/".$f_newfile;

if($f_ext=='jpg' || $f_ext=='png' || $f_ext=='gif'){
	if($f_size>=1000000){
		echo  "<script>alert('Max file size should be 1 MB Only.');</script>";
	}else{
		if(move_uploaded_file($f_tmp,$store)){
		echo  "<script>alert('Your file has been uploaded Successfully');</script>";
	}else{
		echo  "<script>alert('File size not matched with our conditions');</script>";
		}
	}
	}else{
		echo  "<script>alert('First make sure you are uploading jpg, png or gif image file');</script>";
	}
}
?>

<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>File Uploading in PHP</title>
    <style type="text/css"></style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<p><input type="file" name="myfile"/></p>
<p><input type="submit" value="upload" name="submit"/></p>
</form>
</body>
</html>