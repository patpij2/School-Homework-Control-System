<?php
echo '<?xml version="1.0" encoding="iso-8859-2"?>';
$class_nr =  $_GET['adres'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" />
<? echo '<title>Wyspian 2.0 | System Kontroli Prac Domowych</title>' ?>


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
<body style="background-color: #fff;
background-image:
linear-gradient(90deg, transparent 79px, #abced4 79px, rgba(132,106,221,0.9), 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;">


	<div class="container-contact100" style="margin-bottom:auto; margin-top:auto">

		<div class="wrap-contact100">
			<div class="contact100-form validate-form">
				<span class="contact100-form-title">
						
	<h1 style= "margin-left:auto;margin-right:auto;margin-top:40px;font-size: min(10vw, 100px);font-family: 'Permanent Marker', cursive;">Wyspian 2.0 </h1>
				
								<b style="font-family: 'Permanent Marker'; font-size: 25px;">
					</br>system kontroli prac domowych
				</b>
				
				</span>
				
				
				<!--<span class="contact100-form-title" style="margin-top:50px;">
					Wybierz przedmiot
				</span> -->
				
				
				
				
			</div>
	
<!-- <div style="margin-left:10px; float: none;">	-->
<?
$sub_array = array('Geografia','Matematyka', 'J.Polski', 'Hiszpański', 'Biologia', 'PP', 'Chemia','Fizyka');

for ($x = 0; $x <= count($sub_array)-1; $x++) {
	https://wyspian20.pl/classrooms.php
	echo '<a href=classrooms.php?przedmiot='.$sub_array[$x].'><div class="container-contact100-form-btn" style="float: left; padding: 10px;">
					<button class="contact100-form-btn">
						<span>
						'.$sub_array[$x].'
						</span>
					</button>
				</div> </a>
				

';
}
?>
<!-- </div> -->

<div style="margin-top:250px; float: none;">
				<span class="contact100-form-title" >
					
					<b style="font-size:15px;"></br>System Wyspian 2.0 umożliwia pobieranie zadań domowych oraz wysyłanie ich do nauczycieli. W razie jakichkolwiek problemów z działaniem platformy, zapraszamy do kontaktu - patryk.pijanowski@gdgpoland.org, 797 743 390 lub <a href="https://www.facebook.com/patryk.pijn">facebook</a></b>
				</span>

				
<a href="logowanie.php">
				<div class="container-contact100-form-btn" style="margin-top:-20px;">
					<button class="contact100-form-btn" type="submit">
						<span>
							Panel Nauczyciela
						</span>
					</button>
					
</div></a>

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>



</body>
</html>
