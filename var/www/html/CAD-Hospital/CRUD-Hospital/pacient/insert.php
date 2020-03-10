<?php

include('dbconnect.php');
if(isset($_POST["cnp_pacient"]) && isset($_POST["nume_pacient"]) && isset($_POST["prenume_pacient"])
&& isset($_POST["adresa_pacient"]) && isset($_POST["asigurare_pacient"]) ) {
    $CNP=$_POST["cnp_pacient"];
    $nume=$_POST["nume_pacient"];
    $prenume=$_POST["prenume_pacient"];
    $adresa=$_POST["adresa_pacient"];
    $asigurare=$_POST["asigurare_pacient"];
    $query="INSERT INTO pacient(CNP,NumePacient,PrenumePacient,Adresa,Asigurare) VALUES('$CNP','$nume','$prenume','$adresa','$asigurare')";
   
    if( mysqli_query($conn,$query)){
        echo "Inserare reusita";
        header('Location: view.php');
        exit;
    }else {
        echo "Inserare nereusita";
  
    
}

}






?>