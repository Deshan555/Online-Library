<?php

$sname= "remotemysql.com";

$unmae= "C5tbieTCrC";

$password = "wKJczujtNF";

$db_name = "C5tbieTCrC";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) 
{
	echo "Connection failed!";
}
else
{
    echo "Connection Established";
}