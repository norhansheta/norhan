<?php
$Firstname=$_REQUEST['First name'];
$lastname=$_REQUEST["Last name"];
$email=$_REQUEST["email"];
$password=$_REQUEST ["Password"];
if (isset($_POST["bt"]))
{
$host="localhost";
$user="root";
$password="";
$db="project1";

$conn=mysqli_connect($localhost,$root,$password,$db);
$insert="insert into bis values('$firstname','$lastname','$email','$password')";
$mysqli_query($conn,$insert);
if($conn){
echo("connection is done ");
}
else{
    echo("connection is failed ");
}


}




?> 