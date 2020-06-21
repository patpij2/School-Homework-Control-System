<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$is_admin = $_SESSION['admin'] ?? false;
?>

<?php
$class_nr =  $_GET['klasa_system'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<? echo '<title>'.$class_nr.' | Panel Nauczyciela | Geografia 2.0</title>'; ?>
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
					Jeżeli pomyliłeś klasy:
				</span>
<a href="panel_nauczyciela.php">
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Wróć do wyboru klas
						</span>
					</button>
					
					
				</div></a>
				
				
				
				
			</div>
			
							<div class="wrap-input100" style = "margin-top: 90px; margin-bottom: -30px;" >
					<p class="input100" style="color:#403866;padding:30px;text-align: center;font-size:25px;"
				>Baza plików i zadań nadesłanych przez uczniów: (kliknij na wybrany aby pobrać): </br></br>
	<?
	
	$dir = opendir("upload/$class_nr");
while(false !== ($file = readdir($dir)))
  if($file != '.' && $file != '..') 
    echo '<a href="upload/'.$class_nr.'/'.$file.'" style="margin: 20px;font-size: 20px;"> '.$file.'</a></br> ';


?>
</p>
	

	
	
	
					
					<span class="focus-input100"></span>
				</div>
				
			
				

<div class="wrap-input100" style = "margin-top: 90px; margin-bottom: -30px;" >
					<p class="input100" style="color:#403866;padding:30px;text-align: center;font-size:25px;"
				>Repozytorium widoczne prze uczniów (będą je widzieć na stronie oraz będą je mogli pobierać). Jeżeli chcesz dodać plik do repozytorium - kliknij "Wybierz plik, a nastepnie "Wyślij"" </br></br>
	<?
	
	$dir = opendir("repozytorium/$class_nr");
while(false !== ($file = readdir($dir)))
  if($file != '.' && $file != '..') 
    echo '<a href="repozytium/'.$class_nr.'/'.$file.'" style="margin: 20px;font-size: 20px;"> '.$file.'</a></br> ';


?>

	

	
	
	
					
					<span class="focus-input100"></span>
					
					
					
					
								<form class="contact100-form validate-form" enctype="multipart/form-data" method="POST">
			

					
					<input class="input100" name="plik" type="file" style = "padding:16px; text-align:center;"/>

					
					
				</div>
				<div class="container-contact100-form-btn" style="margin-top: 40px;">
					<button class="contact100-form-btn" type="submit">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Wyślij
						</span>
					</button>
					
					
					</div>
					
						
</form>				
													<?php
$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
$plik_rozmiar = $_FILES['plik']['size'];

if(is_uploaded_file($plik_tmp)) {
     move_uploaded_file($plik_tmp, "repozytorium/$class_nr/$plik_nazwa");
    echo '<p style= "text-align: center;font-size: 20px; padding: 15px;">Super! Plik został wysłany. </p>'; 
}
?>	
			
				
			
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

















