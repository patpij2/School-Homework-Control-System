<?PHP
$uploaddir = 'upload/'; // katalog gdzie ma zostać zapisany plik
if(move_uploaded_file($_FILES['plik']['tmp_name'], $uploaddir.$_FILES['plik']['name'])){
    echo("Plik zosał załadowany.");
}
else{
    echo("Plik nie został załadowany.");
}
?>
