<?php

$sname= "192.168.1.101";

$unmae= "root";

$password = "890/Fuck";

$db_name = "library";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) 
{
	echo "Connection failed!";
}