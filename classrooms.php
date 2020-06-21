<?php
echo '<?xml version="1.0" encoding="iso-8859-2"?>';

$przedmiot =  $_GET['przedmiot'];
$subject_get = $przedmiot;


require("poka_klasy.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" />
<title><? echo 'Wybór klas | '.$przedmiot.' 2.0'; ?></title>


	<title>Contact V10</title>
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


<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>

	<div class="container-contact100">
		<div class="wrap-contact100">
		
			<div class="contact100-form validate-form">
				<span class="contact100-form-title">
						
	<h1 style= "margin-left:auto;margin-right:auto;margin-top:40px;font-size: min(10vw, 65px);font-family: 'Permanent Marker', cursive;"><? echo $subject_get; ?> </h1>
				
								<b style="font-family: 'Permanent Marker'; font-size: 25px;">
					</br>Wybierz klase
				</b>
				
				</span>
				
				
				<!--<span class="contact100-form-title" style="margin-top:50px;">
					Wybierz przedmiot
				</span> -->
				
				
				
				
			</div>
		
			<div class="contact100-form validate-form">


<?
$klasy = $Class_sql_full[0];

for ($x = 1; $x <= count($Class_sql_full); $x++) {
	
	$klasy .= $Class_sql_full[$x];
	
}

#echo $klasy;

$klasy_explode = explode(",", $klasy);

for ($x = 0; $x <= count($klasy_explode)-1; $x++) {
	
	if (empty($klasy_explode[$x]) != 1) {
	echo '<a href=class.php?przedmiot='.$subject_get.'&klasa_system='.$klasy_explode[$x].'><div class="container-contact100-form-btn" >
					<button name="login" type="submit" class="contact100-form-btn">
						<span>
						'.$klasy_explode[$x].'
						</span>
					</button>
				</div> </a>
				

';


	}
}
?>


<a href='index.php'>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" style="margin-top:5px;">
						<span>
							<div>Wróć do wyboru przedmiotu</div>
						</span>
					</button>
				</div>
				</a>




			</div>
		</div>
	</div>

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




<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body>
</html>
