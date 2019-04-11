<?php
// Create connection
$con=mysqli_connect("172.17.0.4","root","root","");
//$db = new PDO('mysql:host=db;port=3306;dbname=registration', 'wordpress', 'wordpress');

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>
