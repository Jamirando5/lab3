<!DOCTYPE html>
<html>
<head>
    <Title>Guests</Title>
<style>
body{
  background-color:rgb(245, 139, 87);					 
}
*{
  font-family: 'Barlow', sans-serif;
  font-weight:bold;
  
}
</style>
</head>
<body>
<h1> Guests</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
