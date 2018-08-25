<?php

$conn=mysqli_connect("localhost","root","Admin@123$","registrations");
if($conn){
    #echo "im here";
}

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
?>