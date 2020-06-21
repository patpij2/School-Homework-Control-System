<?php
echo '<?xml version="1.0" encoding="iso-8859-2"?>';
?>


					<?php
// Ustawiamy odpowiedni nagłówek dla kodowania treści
header("Content-Type: text/html; charset=UTF-8");
// Rozpoczynamy sesję
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['imie_f'])) {
        // można dodatkowo wyświetlić odpowiedni komunikat jeżeli hasło jest puste
        $login = $_POST['imie_f'];
		$haslo = $_POST['pass_f'];
		
		$nazwa = $login;
		require("poka_haslo.php");
		
		
	if ($haslo = $Password_sql) {
            $_SESSION['admin'] = true;
            $a = '-------------</br>Poprawnie zalogowano.';
        } else {
            $a = '-------------</br>Hasło nie pasuje!';
        }
    } elseif (isset($_POST['logout'])) {
        $_SESSION['admin'] = false;
        session_regenerate_id();
    }
}



// sprawdzamy czy użytkownik jest zalogowany (true), lub zwracamy false
$is_admin = $_SESSION['admin'] ?? false;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" />
<? echo '<title> Logowanie | Geografia 2.0</title>' ?>


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
<main>

	<div class="container-contact100">

		<div class="wrap-contact100">
		<?php if (!$is_admin): ?>
			<form class="contact100-form validate-form" action="" method="POST">
				<span class="contact100-form-title">
				<? echo '<b style="font-size: 60px;">panel nauczyciela</br>'.$Subj_i.'</b></br></br>' ?>
					Podaj login i hasło aby się zalogować </br>
				
				<? echo $a ?>
					
					
				</span>

				<div class="wrap-input100 validate-input" >
					<input class="input100" type="text" name="imie_f" placeholder="Podaj login" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<input class="input100" type="password" name="pass_f" placeholder="Podaj hasło" required>
					<span class="focus-input100"></span>
				</div>



				<div class="container-contact100-form-btn">
					<button name="login" type="submit" class="contact100-form-btn">
						<span>
							Zaloguj
						</span>
					</button>
				</div>
				</form>
				<a href="index.php">
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Wróć do widoku ucznia
						</span>
					</button>
				</div>
				</a>
			
			<?php else: ?>
			<div class="contact100-form validate-form" action="" method="POST">
				<span class="contact100-form-title">
				
				<?php
				echo '<b style="font-size: 60px;">panel nauczyciela</br>'.$Subj_i.'</b></br></br>' ?>
					Jesteś już zalogowany! Przejdź do panelu nauczyciela lub wyloguj się.
				</span>


	
				<? echo '<a href="panel_nauczyciela.php?sub='.$Subject_sql.'&log_nm='.$login.'">' ?>
				
				<div class="container-contact100-form-btn">
					<button name="login" type="submit" class="contact100-form-btn">
						<span>
							Przejdź do Panelu nauczyciela
						</span>
					</button>
				</div> </a>
				
				<form action="" method="POST">
				<div class="container-contact100-form-btn">
					<button name="logout" type="submit" class="contact100-form-btn">
						<span>
							Wyloguj się
						</span>
					</button>
				</div>
				</form>
				
				<?php endif; ?>
			</div>
			
		</div>
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

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
