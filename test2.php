<?php
$servername='192.168.1.212';
$username='root';
$password='root';
$dbname = "test";
try {
    $firstname = $_POST['xname'];
    $last_name = $_POST['prename'];
    $tele = $_POST['tele'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $opt = $_POST['opt'];
    $timex = $_POST['time'];
    $payment = $_POST['payment'];
    $com = $_POST['comment'];
    $pays = $_POST['city'];
    




    date_default_timezone_set("Asia/Calcutta");
    $insertdate = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   $sql = "INSERT INTO client (firstname,lastname,tele,add1,add2,optionx,pay,city,comm,mytime)
    VALUES ('$firstname', '$last_name','$tele','$add1','$add2','$opt','$payment','$pays','$com','$timex')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>



