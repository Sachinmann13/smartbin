<html>
<head>
</head>
<body>
<h1> lets see</h1>
</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM bintable";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - id " . $row["id"]. " " . $row["status1"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>



</html>
