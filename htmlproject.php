<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amity SmartBin Centre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
</head>
<body>

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
        //echo "id: " . $row["id"]. " - binid " . $row["binid"]. "- status1 " . $row["status1"]. "<br>";
        $id = $row["id"];
        //$binid = $row["binid"];
        $status1 = $row["status1"];
        header("refresh: 10");
    }
    
} else {
    echo "0 results";
}

$conn->close();


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/htmlwebpage/htmlproject.php">Amity SmartBin Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/htmlwebpage/htmlproject.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div class="jumbotron">
    <h1>SmartBin Analysis Centre</h1>

    <img STYLE="position:absolute; TOP:70px; LEFT:1170px; WIDTH:150px; HEIGHT:150px" src="amitylogo1.jpg" alt="" >

  </div>
<h2>Welcome to the Smart Dustbin Management System</h2>

<br>
<br>
<br>
<br>


          <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Dustbin Id</th>
                    <th scope="col">Location</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo 1 ?></th>
                    <td>E1-01</td>
                    <td>E1 Block</td>
                    <td><?php if($status1<20){echo "Bin is Full";}
                              elseif($status1>20 and $status1<60){echo "Bin is 80% full";}
                              elseif($status1>60 and $status1<80){echo "Bin is 40% full";}
                              else{echo "Bin is <20% full";} ?></td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo 2 ?></th>
                    <td>E1-02</td>
                    <td>E1 Block</td>
                    <td><?php if($status1<20){echo "Bin is Full";}
                              elseif($status1>20 and $status1<60){echo "Bin is 80% full";}
                              elseif($status1>60 and $status1<80){echo "Bin is 40% full";}
                              else{echo "Bin is <20% full";} ?></td>
                  </tr>
                 
                </tbody>
              </table>
              
              <br>
              <br>
              <br>
              <br>
              <br>

              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <!-- Footer -->
<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="https://ccfis.net"> www.ccfis.net</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>