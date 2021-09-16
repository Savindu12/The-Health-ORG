<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="database Name";
    $con=mysqli_connect($servername,$username,$password,$dbname);


    if($con)
    {
	    echo "Connection successful";
    }

    else
    {
	    echo "Connection failed".mysqli_error($con);
    }   
?>