<?php
session_start();

$con=mysqli_connect("localhost", "root", "", "eBlog");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>