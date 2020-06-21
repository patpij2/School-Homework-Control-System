<?php
echo '<?xml version="1.0" encoding="iso-8859-2"?>';
$class_nr =  $_GET['klasa_system'];
$przedmiot =  $_GET['przedmiot'];



$klasa_s = $class_nr;
$przedmiot_s = $przedmiot;
require("poka_login.php");
#echo $Teacher_n_sql;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" />
<? echo '<title>'.$class_nr.' | '.$przedmiot.' 2.0</title>' ?>


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


	<div class="container-contact100" style="margin-bottom:auto; margin-top:auto">

		<div class="wrap-contact100">
			<div class="contact100-form validate-form">
			<div class="contact100-form validate-form">
				<span class="contact100-form-title">
						
	<h1 style= "margin-left:auto;margin-right:auto;margin-top:40px;font-size: min(10vw, 65px);font-family: 'Permanent Marker', cursive;"><? echo $przedmiot; ?> </h1>
				
								<b style="font-family: 'Permanent Marker'; font-size: 25px;">
					</br><? echo 'Klasa '.$class_nr ?>
				</b>
				
				</span>
				
				
				<!--<span class="contact100-form-title" style="margin-top:50px;">
					Wybierz przedmiot
				</span> -->
				
				
				
				
			</div>
<? echo '<a href="classrooms.php?przedmiot='.$przedmiot.'">' ?>
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
				>Zadania nadesłane przez nauczyciela:</br></br>
	<?
	
	$dir = opendir("repozytorium/$Teacher_n_sql/$class_nr");
while(false !== ($file = readdir($dir)))
  if($file != '.' && $file != '..') 
    echo '<a href="repozytorium/'.$Teacher_n_sql.'/'.$class_nr.'/'.$file.'" style="margin: 20px;font-size: 20px;"> '.$file.'</a></br> ';


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
					<b style="font-size:15px;">Nazwa pliku nie ma znaczenia - system sam ją zmieni na podstawie danych podanych poniżej. Formularz działa również na telefonie - wyświetli się wiadomość, iż przesyłanie się powiodło.</b>
				</span>

				
				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					
					<input class="input100" name="imie" type="text" placeholder="Wpisz swoje imie" style = "margin: auto; padding:16px; text-align:center;" required/>
					
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					
					<input class="input100" name="nazwisko" type="text" placeholder="Wpisz swoje nazwisko" style = "margin: auto; padding:16px; text-align:center;" required/>
					
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					
					<input class="input100" name="numer_zadania" placeholder="Wpisz nazwe zadania" type="text" style = "margin: auto; padding:16px; text-align:center;" required/>
					
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					
					<input class="input100" name="plik" type="file" style = "margin: auto; padding:16px; text-align:center;" required />
					
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="submit">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Wyślij rozwiązanie
						</span>
					</button>
					
					
					
					
					</div>
					
			
						
</form>


					<div>
					


										<?php
										if (isset($_POST['submit'])) {
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$nr_zad = $_POST['numer_zadania'];
			
$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
$plik_rozmiar = $_FILES['plik']['size'];

$roz = end(explode(".",($_FILES['plik']['name'])));
$plik_nazwa_en = $imie."-".$nazwisko."-".$nr_zad.".".$roz;

if(is_uploaded_file($plik_tmp)) {
     move_uploaded_file($plik_tmp, "upload/$Teacher_n_sql/$class_nr/$plik_nazwa_en");
    echo '<p style= "text-align: center;font-size: 20px; padding: 15px;">Super! Plik '.$plik_nazwa_en.' został wysłany. </p>'; 
}
?>



<?php
$servername = "23178.m.tld.pl";
$username = "admin23178_op";
$password = "#Patryczek1!";
$dbname = "baza23178_op";

$file= $_GET['file'];

$przedmiot= $_GET['przedmiot'];
$klasa_system= $_GET['klasa_system'];
$log_nm= $_GET['log_nm'];

$status = 0;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Homework_Wyspian (nazwa, przedmiot, klasa, nauczyciel, data, status)
VALUES ('$plik_nazwa_en', '$przedmiot', '$klasa_system', '$Teacher_n_sql', NOW(), '$status')";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


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
