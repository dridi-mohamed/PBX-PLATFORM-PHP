<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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

$sql = "SELECT firstname, lastname, tele,add1,add2,optionx,pay,city,mytime FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  '<div id="example1">
        <h3>
        
        <i class="fas fa-user-tie"></i> clinetName : '. $row["firstname"]
         ."<br>".
         '<i class="fas fa-user-tie"></i>'. "Clinet Prename:   ". $row["lastname"]."<br>".
        '<i class="fas fa-phone"></i>'.  " tele: " . $row["tele"] .
         "<br>".
         '<i class="fas fa-house-user"></i>'." adddess source: ".
         $row["add1"].
         "<br>".
         '<i class="fas fa-map-marker-alt"></i>'." adddess destination: ".$row["add2"].
         "<br>".
         '<i class="fas fa-baby"></i>'." Option:    ".$row["optionx"]
         ."<br>".
         '<i class="fas fa-hand-holding-usd"></i>'.
         " Payment : ".$row["pay"].
          "<br>".
          '<i class="far fa-flag"></i>'.
          " Pays : ".$row["city"]."<br>".
          '<i class="fas fa-clock" style="font-size:24px;"></i>'.""." Time Resvation : ".$row["mytime"]
          ."</div>"."<br>";
        
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>