<?php
include_once 'connection.php';

$ID=$_POST['adnum'];
$PASS=sha1($_POST['pass']);
$ADDR=$_POST['addr'];

$update="UPDATE details SET Password='$PASS',Address='$ADDR' WHERE ID='$ID';";

if(mysqli_query($con,$update))
{
	echo "updated";
}
else
{
	echo "fail".mysqli_error($con);
}

mysqli_close($con);
?>