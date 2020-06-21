<?

require("connection.php");

$sql = "SELECT * FROM Wyspian20 WHERE Subject = '$przedmiot_s' AND Class LIKE '%$klasa_s%'";

$result = $conn->query($sql);

if($result->num_rows>0) {
	while($row = $result->fetch_assoc()) {
		#echo $row['Prelegent'], $row['Title'], $row['Data'], $row['Link'], $row['Short_Desc'], $row['Tags'];
		
		$Teacher_n_sql = $row['Teacher_name'];
		
	}
}
else {
	echo "Nie znaleziono rekordów! nwm";
}

?>