<?php

include('dbconnect.php');
if(isset($_POST["denumire_medicament"])) {
    $denumire=$_POST["denumire_medicament"];
    $query="INSERT INTO medicamente(Denumire) VALUES('$denumire')";
   
    if(mysqli_query($conn,$query)){
        echo "Inserare reusita";
        header('Location: view.php');
        
    }else {
        echo "Inserare nereusita";
  
    
}

}






?>