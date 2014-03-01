<?php session_start();
include("consqldata.php");

$username = $_SESSION['username'];
setcookie("file",filename,time()+660);

function redirect_to( $location = NULL ) {
	if ($location != NULL) {
	header("Location: {$location}");
	exit;
	}
	};

$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $length=10;
    $filename =$_FILES["file"]["name"];
    $filename += 1;
 
    }

    while (file_exists("upload/" . $filename)){
	$filename += $filename[mt_rand(0,31)];
      }
      move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);
      //echo $filename;
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      $sql = "INSERT INTO objects (object,type,user)
      VALUES ('$filename','$filetype','$username')";
      if (!mysqli_query($con,$sql))
 	{
 	die('Error:'.mysqli_error($con));
 	}
	mysqli_close($con);
	
//	redirect_to('Location:room.php');	
//      }
    }
 
else
  {
  echo "Invalid file";
  };


?>