<?php
$hostname='localhost';
$username='u445536153_aniketNoel';
$password='Learning@2023#@';
$dbname='u445536153_visitingCard';

$config = mysqli_connect($hostname,$username,$password,$dbname);
if($config)
{
	echo "";
}
else
{
	echo "Database connection failed with error:".mysqli_connect_error();
}

?>