<?

require("connection.php");

$sql = "SELECT * from Wyspian20 WHERE Teacher_name = '$nazwa'";

$result = $conn->query($sql);

if($result->num_rows>0) {
	while($row = $result->fetch_assoc()) {
		#echo $row['Prelegent'], $row['Title'], $row['Data'], $row['Link'], $row['Short_Desc'], $row['Tags'];
		
		$Subject_sql = $row['Subject'];
		$Class_sql = $row['Class'];
		$Password_sql = $row['Password'];
		
		$Subj_i = substr($Subject_sql, 0, -1);
		$Subj_i = $Subj_i.'i';
		
	}
}
else {
	echo "Nie znaleziono rekordów!";
}

?>