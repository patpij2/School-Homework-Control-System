<?php
echo '<?xml version="1.0" encoding="iso-8859-2"?>';
$class_nr =  $_GET['adres'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" />
<? echo '<title>'.$class_nr.' | Geografia 2.0</title>' ?>


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



</head>
<body>


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
<a href="index.php">
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Wróć do menu
						</span>
					</button>
					
					
				</div></a>
				
				
				
				
			</div>
			
							<div class="wrap-input100" style = "margin-top: 90px; margin-bottom: -30px;" >
					<p class="input100" style="color:#403866;padding:30px;text-align: center;font-size:25px;"
				>Baza plików i zadań: (kliknij na wybrany aby pobrać): </br></br>
	<?
	
	$dir = opendir("upload");
while(false !== ($file = readdir($dir)))
  if($file != '.' && $file != '..') 
    echo '<a href="upload/'.'/'.$file.'" style="margin: 20px;font-size: 20px;"> '.$file.'</a></br> ';


?>
	
	
	
					
					<span class="focus-input100"></span>
				</div>
			
		</div>
		
		
		
	</div>



	<div class="container-contact100" style="">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" enctype="multipart/form-data" method="POST">
				<span class="contact100-form-title">
					Formularz do nadsyłania prac
					<b style="font-size:20px;">Nazwa pliku niema znaczenia - system sam ją zapisze na podstawie danych podanych poniżej. Formularz działa również na telefonie - wyświetli się wiadomość, iż przesyłanie się udało</b>
				</span>

				
				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					
					<input class="input100" name="imie" type="text" placeholder="Wpisz swoje imie" style = "margin: auto; padding:16px; text-align:center;"/>
					
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					
					<input class="input100" name="nazwisko" type="text" placeholder="Wpisz swoje nazwisko" style = "margin: auto; padding:16px; text-align:center;"/>
					
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					
					<input class="input100" name="numer_zadania" placeholder="Wpisz nazwe/numer zadania" type="text" style = "margin: auto; padding:16px; text-align:center;"/>
					
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					
					<input class="input100" name="plik" type="file" style = "margin: auto; padding:16px; text-align:center;"/>
					
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Wyślij
						</span>
					</button>
					
					
					
					
					</div>
					
			
						
</form>


					<div>
					


										<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$nr_zad = $_POST['numer_zadania'];

								
										
$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
$plik_rozmiar = $_FILES['plik']['size'];

$roz = end(explode(".",($_FILES['plik']['name'])));
$plik_nazwa_en = $imie."-".$nazwisko."-".$nr_zad.".".$roz;
echo $plik_nazwa_en;

if(is_uploaded_file($plik_tmp)) {
     move_uploaded_file($plik_tmp, "upload/$class_nr/$plik_nazwa_en");
    echo '<p style= "text-align: center;font-size: 20px; padding: 15px;">Super! Plik został wysłany. </p>'; 
}
?>
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
