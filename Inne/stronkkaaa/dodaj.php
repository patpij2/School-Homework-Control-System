<?php

require("connect.php");

$firstName = $_POST['imie'];
$secondName = $_POST['nazwisko'];

$sql = "INSERT INTO test(id, Imie, Nazwisko) VALUES ('','$firstName','$secondName')";
$sql2 = "SELECT Imie, Nazwisko from test";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if($result2->num_rows>0) {
	while($row = $result2->fetch_assoc()) {
		echo "Imię: ".$row['Imie']." Nazwisko: ".$row['Nazwisko']. "<br />";
	}
}
else {
	echo "Nie znaleziono rekordów!";
}

?>
