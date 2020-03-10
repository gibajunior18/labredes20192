<?php 

include('dbconnect.php');

$CNP=$_GET['cnp_pacient'];

$numePacient=$_GET['nume_pacient'];

$prenumePacient=$_GET['prenume_pacient'];

$adresaPacient=$_GET['adresa_pacient'];

$asigurarePacient=$_GET['asigurare_pacient'];


$query="UPDATE pacient set CNP='$CNP' , NumePacient='$numePacient' , PrenumePacient='$prenumePacient'
        , Adresa='$adresaPacient' , Asigurare='$asigurarePacient' where CNP='$CNP' " ;

   if(mysqli_query($conn,$query)) {
       header('Location: view.php');
   }    else {
       echo "Update nereusit";
   }

   mysqli_close($conn);

?>