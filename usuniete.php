<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$is_admin = $_SESSION['admin'] ?? false;
?>

<?php
$class_nr =  $_GET['klasa_system'];
$przedmiot =  $_GET['przedmiot'];
$log_nm =  $_GET['log_nm'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<? echo '<title>'.$class_nr.' | Panel Nauczyciela |  '.$log_nm.' 2.0</title>' ?>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php if ($is_admin): ?>



	
<main>

	<div class="container-contact100">

		<div class="wrap-contact100">

			<div class="container-contact100" style="margin-bottom:auto; margin-top:auto">

		<div class="wrap-contact100">
			<div class="contact100-form validate-form">
				<span class="contact100-form-title">
						<?
echo '<h1 style= "margin-left:auto;margin-right:auto; font-size: 90px;">Klasa: '.$class_nr.'</h1>';
?>
				</span>
								<span class="contact100-form-title">
					Jeżeli chcesz wrócić do aktualnych:
				</span>
<? echo '<a href="edytor.php?przedmiot='.$przedmiot.'&klasa_system='.$class_nr.'&log_nm='.$log_nm.'">' ?>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Wróć do aktualnych
						</span>
					</button>
					
					
				</div></a>
				
				
				
				
			</div>
			
							<div class="wrap-input100" style = "margin-top: 90px; margin-bottom: -30px;" >
					<p class="input100" style="color:#403866;padding:30px;text-align: left;font-size:25px;"
				>Rozwiązane i sprawdzone zadania uczniów:</br></br>
	<?



require("connection.php");

$sql = "SELECT * from Homework_Wyspian";

$result = $conn->query($sql);

$array = array();

if($result->num_rows>0) {
	$x=1;
	while($row = $result->fetch_assoc()) {
		#echo $row['Prelegent'], $row['Title'], $row['Data'], $row['Link'], $row['Short_Desc'], $row['Tags'];

		$results[ $row['nazwa'] ] [] = $row['id'];
		$results[ $row['nazwa'] ] [] = $row['przedmiot'];
		$results[ $row['nazwa'] ] [] = $row['klasa'];
		$results[ $row['nazwa'] ] [] = $row['nauczyciel'];
		$results[ $row['nazwa'] ] [] = $row['data'];
		$results[ $row['nazwa'] ] [] = $row['status'];
		
		$x+=1;
	}
	
}
else {
	echo "Nie znaleziono rekordów!";
}

$przedmiot= $_GET['przedmiot'];
$klasa_system= $_GET['klasa_system'];
$log_nm= $_GET['log_nm'];

	
	$dir = opendir("upload/$log_nm/$class_nr");
while(false !== ($file = readdir($dir))){
  if($file != '.' && $file != '..') {


if($results[$file][5] == 1) {
  	if(isset($results[$file][4])) {

  		if($results[$file][4] == 00000000000) {$date="brak daty";} else {$date=$results[$file][4];}

  	$nm = $dir.'/'.$file;
    echo '<a href="upload/'.$log_nm.'/'.$class_nr.'/'.$file.'" style="margin: 13px;font-size: 15px;">'.substr($file,0,20).' --- <a style="color: green";>'.$date.' --- </a> '; echo '<a href="przywroc_prace.php?przedmiot='.$przedmiot.'&klasa_system='.$klasa_system.'&log_nm='.$log_nm.'&file='.$file.' " style="text-align:right; color: red;">przywróć</a></br>';}

}

}



}

?>
</p>
	

	
	
	
					
					<span class="focus-input100"></span>
				</div>


				
			
				

		
		
		
	</div>
	
	</div>
	</div>
	
	



					<div>
					</div>
	
	
				

				

				
				
</main>






	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<?php endif; ?>

</body>
</html>

















