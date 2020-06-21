<?php
$servername = "23178.m.tld.pl";
$username = "admin23178_op";
$password = "#Patryczek1!";
$dbname = "baza23178_op";

$file= $_GET['file'];

$przedmiot= $_GET['przedmiot'];
$klasa_system= $_GET['klasa_system'];
$log_nm= $_GET['log_nm'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE Homework_Wyspian SET status='0' WHERE nazwa='$file' ";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


header('Location: usuniete.php?przedmiot='.$przedmiot.'&klasa_system='.$klasa_system.'&log_nm='.$log_nm.'');

?>