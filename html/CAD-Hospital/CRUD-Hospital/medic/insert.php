<?php

include('dbconnect.php');
if(isset($_POST["nume_medic"]) && isset($_POST["prenume_medic"]) && isset($_POST["specializare_medic"])) {
    $nume=$_POST["nume_medic"];
    $prenume=$_POST["prenume_medic"];
    $specializare=$_POST["specializare_medic"];
    $query="INSERT INTO medic(NumeMedic,PrenumeMedic,Specializare) VALUES('$nume','$prenume','$specializare')";
   
    if(mysqli_query($conn,$query)){
        echo "Inserare reusita";
        header('Location: view.php');
        
    }else {
        echo "Inserare nereusita";
  
    
}

}






?>