<?php 

$MedicID=$_GET['id'];
$numeMedic=$_GET['nume_medic'];

$prenumeMedic=$_GET['prenume_medic'];

$specializareMedic=$_GET['specializare_medic'];
include('dbconnect.php');

$query="UPDATE medic set  NumeMedic='$numeMedic' , PrenumeMedic='$prenumeMedic'
        , Specializare='$specializareMedic' where MedicID='$MedicID' " ;

   if(mysqli_query($conn,$query)) {
       header('Location: view.php');
   }    else {
       echo "Update nereusit";
   }

   mysqli_close($conn);
?>


