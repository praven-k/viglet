<?php
$database = $_POST['database'];
$table = $_POST['table'];
$db = mysqli_connect("localhost","id18827540_vignanletters","Surya@laxmi0056",$database) or die("unable to connect");
$cc = $_POST['t1'];
$sql = "select froms,reason,date,periods,days,tos,time,pending from $table where date = '$cc' ORDER BY id DESC";
$c = mysqli_query($db,$sql);
//$a = array();
$s = "";
while($row = mysqli_fetch_array($c)){
	$data[]=$row;
}
print(json_encode($data));




?>