<?php
$conn = mysqli_connect('localhost', 'root', '', 'control');

//check connection
if(!$conn){
	echo 'Connection error: '.mysqli_connect_error();
}

$val= $_GET['result'];
if ($val=="backward"){
	mysqli_query($conn,"INSERT INTO `movment` SET `Backward` = 'B'");
}

if ($val=="forward"){
	mysqli_query($conn,"INSERT INTO `movment` SET `Forward` = 'F'");
}

if ($val=="right"){
	mysqli_query($conn,"INSERT INTO `movment` SET `Right` = 'R'");
}

if ($val=="left"){
	mysqli_query($conn,"INSERT INTO `movment` SET `Left` = 'L'");
}
if ($val=="stop"){
	mysqli_query($conn,"INSERT INTO `movment` SET `Stop` = 'S'");
}



?>
<!DOCTYPE HTML>

<html>
<head></head>

<body>
<center>
<form>
    <p align=center>
 <?php
echo $val;
?>
        </p>
  <input type="button" value="Go back!" onclick="history.back()">
</form>
</center>
</body>



</html>