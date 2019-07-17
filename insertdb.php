<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bindb";
//$binid=$_GET['binid'];
$status1=$_GET['status1'];
//$status1="hello";
//echo $status1;
//exit;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "INSERT INTO bintable(status1,binid) VALUES ('57', 'bin_0891')";	//with static values
$sql = "INSERT INTO bintable(status1) VALUES ('$status1')";		//with dynamic values from the url

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>