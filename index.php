<?php

$user = $_POST['username'];
$database = $_POST['database'];
$pass = $_POST['password'];
$table = $_POST['table'];
$db = mysqli_connect("localhost","id18827540_vignanletters","Surya@laxmi0056",$database) or die("unable to connect");
$sql = "select * from $table where username = '$user' and password = '$pass'";
$a = mysqli_query($db,$sql);
$b = mysqli_num_rows($a);
if($b>0){
	while($row = mysqli_fetch_array($a)){
	echo $row['year']."@".$row['branch']."@".$row['branchsec'];
	}
} else {
	echo "not success";
}


?>