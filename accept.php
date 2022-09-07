<?php
$cc = $_POST['t1'];
$regulation = $_POST['database'];
$branch = $_POST['table'];
$db = mysqli_connect("localhost","id18827540_vignanletters","Surya@laxmi0056",$regulation) or die("unable to connect");
$sql = "select * from $branch  where fromreason = '$cc' ORDER BY id DESC";
$c = mysqli_query($db,$sql);
//$a = array();
$s = "";
while($row = mysqli_fetch_array($c)){
	$data[]=$row;
}
print(json_encode($data));




?>