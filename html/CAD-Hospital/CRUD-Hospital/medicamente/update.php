<?php 

include('dbconnect.php');

$MedicamentID=$_GET['id'];
$denumireMedicament=$_GET['denumire_medicament'];


var_dump($_GET);

$query="UPDATE medicamente set Denumire='$denumireMedicament' where MedicamentID='$MedicamentID' " ;

   if(mysqli_query($conn,$query)) {
       header('Location: view.php');
   }    else {
       echo "Update nereusit";
   }

   mysqli_close($conn);


?>