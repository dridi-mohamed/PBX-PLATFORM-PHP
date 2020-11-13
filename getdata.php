<!DOCTYPE html>
<html>
<head>

<style>
#example1 {
  border: 2px solid red;
  padding: 10px;
  border-radius: 25px;
}
</style>

</head>
<body>

<?php
$servername = "192.168.1.212";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT firstname, lastname, tele FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  '<div id="example1"><h3>clinetName: '. $row["firstname"]. "<br>". "Clinet Prename:  ". $row["lastname"]. "<br>". " tele: " . $row["tele"] ."</div>"."<br>";
        
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>