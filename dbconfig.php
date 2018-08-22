<?php

$conn=mysqli_connect("localhost","root","","registrations");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

?>