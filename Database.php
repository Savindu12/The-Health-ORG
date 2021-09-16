<?php
include_once 'connection.php';
// Create a database
// Create Database

$db="CREATE DATABASE Feedback;";

if(mysqli_query($con,$db))
{
	echo "Database created";
}
else
{
	echo "Database creation failed".mysqli_error($con);
}

//USE the created database

$usedb="Feedback;";
mysqli_query($con,$usedb);

$table="CREATE TABLE details(UName Varchar(10),Email Varchar(20),Phone Varchar(30), Message Varchar(10));";

if(mysqli_query($con,$table))
{
	echo "Table is created";
}
else
{
	echo "Table creation failed".mysqli_error($con);
}

mysqli_close($con);
?>