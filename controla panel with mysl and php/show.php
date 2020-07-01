
<?php
$conn = mysqli_connect('localhost', 'root', '', 'control');

//check connection
if(!$conn){
	echo 'Connection error: '.mysqli_connect_error();
}
$val="right";
$add= $_GET['add'];
if ($add=="true"){
    
    $pos=$_GET['pos'];
    $steps=$_GET['steps'];
    $val=$pos;
    $txt="INSERT INTO `movment`(`Position`, `#Steps`) VALUES ('%s','%s')";
    $sql=sprintf($txt,$pos,$steps);
    mysqli_query($conn,$sql);
    
}
else if($add=="false"){
    $id=$_GET['id'];
    $val="Delete";
    mysqli_query($conn,"DELETE FROM `movment` WHERE id=".$id);
}
?><html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1>
            <?php
            echo $val;
            ?>
        </h1>
    </body>
</html>
