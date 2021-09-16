<?php
    nclude_once 'connection.php';
    if(isset($_POST['submit']))
    {

        $UName=$_POST['UName'];
        $Email=sha1($_POST['Email']);
        $Phone=$_POST['Phone'];
        $Message=$_POST['Message'];

        //Insert values

        $insert="INSERT INTO details VALUES('$UName','$Email','$Phone','$Message');";

        if(mysqli_query($con,$insert))
        {
	        echo "values inserted".mysqli_affected_rows($con);
        }
        else
        {
	        echo "Value insertion failed".mysqli_error($con);
        }

    }

    mysqli_close($con);
?>