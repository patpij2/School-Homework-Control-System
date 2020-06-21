<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$is_admin = $_SESSION['admin'] ?? false;
$log_nm =  $_GET['log_nm'];

if(isset($_GET['sub'])) {
	$subject_get = $_GET['sub'];
}

#echo $subject_get;

require("poka_klasy_login.php");


$Subj_i = substr($subject_get, 0, -1);
$Subj_i = $Subj_i.'i';

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<? echo '<title>Panel Nauczyciela | '.$subject_get.' 2.0</title>'; ?>
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
		<?php if (!$is_admin): ?>
			<?php else: ?>
			<div class="contact100-form validate-form" action="" method="POST">
				<span class="contact100-form-title">
				<? echo '<b style="font-size: 60px;">panel nauczyciela</br>'.$Subj_i.'</b></br></br>' ?>
					Wybierz klasę aby zadać im pracę lub ją sprawdzić.
				</span>


				


			
<?
$klasy = $Class_sql;
$klasy_explode = explode(",", $klasy);

for ($x = 0; $x <= count($klasy_explode)-1; $x++) {
	echo '<a href=edytor.php?przedmiot='.$subject_get.'&klasa_system='.$klasy_explode[$x].'&log_nm='.$log_nm.'><div class="container-contact100-form-btn" style="float: left; padding: 10px;">
					<button name="login" type="submit" class="contact100-form-btn">
						<span>
						'.$klasy_explode[$x].'
						</span>
					</button>
				</div> </a>
				

';
}
?>
								<form action="logowanie.php" method="POST" >
				<div class="container-contact100-form-btn" style="float: left; padding: 10px;">
					<button name="logout" type="submit" class="contact100-form-btn" style="width:320px;">
						<span>
							Wyloguj się
						</span>
					</button>
				</div>
				</form>
				
				
				
				
			</div>
			
		</div>
	</div>				
				
				
				
				<?php endif; ?>

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

















