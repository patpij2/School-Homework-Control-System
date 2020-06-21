<?

require("connection.php");

$sql = "SELECT * from Wyspian20 WHERE Teacher_name = '$log_nm'";

$result = $conn->query($sql);

$Class_sql_full = array();

if($result->num_rows>0) {
	while($row = $result->fetch_assoc()) {
		#echo $row['Prelegent'], $row['Title'], $row['Data'], $row['Link'], $row['Short_Desc'], $row['Tags'];
		
		$Class_sql = $row['Class'];
		
		array_push($Class_sql_full, $Class_sql);
		
	}
	
}
else {
	echo "Nie znaleziono rekordów!";
}

?>