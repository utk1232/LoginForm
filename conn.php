<?php
if(isset($_POST['t1']) && isset($_POST['t2']) && isset($_POST['t3']) && isset($_POST['t4']) && isset($_POST['t5'])&& isset($_POST['t6']) && isset($_POST['gender'])){
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$t5 = md5($_POST['t5']);
$t6 = md5($_POST['t6']);
$t7 = $_POST['gender'];

// include("conn.php");

$con = mysqli_connect("localhost","root","","data") or die("Connection Die");


$sql = "INSERT INTO `form`(names,uname,email,pnum,pass,cpass,gen)VALUES ('{$t1}','{$t2}','{$t3}','{$t4}','{$t5}','{$t6}','{$t7}')";

mysqli_query($con,$sql) or die("unsuceess");
mysqli_close($con);
header("Location:index.php");


}
?>