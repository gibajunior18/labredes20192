<?php 


var_dump($_GET);
$ConsultatieID=$_GET['id'];
$data=$_GET['data'];
$MedicamentID=$_GET['medicament'];
$diagnostic=$_GET['diagnostic'];

$dozaMedicament=$_GET['doza_medicament'];
include('dbconnect.php');
//$query2="SELECT Denumire from medicamente where MedicamentID='$MedicamentID'";
//$post_results = mysqli_query($conn,$query2);
 //                 $row2 = mysqli_fetch_assoc($post_results);
  //                $denumire = $row2['Denumire'];

$query="UPDATE Consultatie set Data='$data' , Diagnostic='$diagnostic'
        , DozaMedicament='$dozaMedicament', MedicamentID='$MedicamentID' where ConsultatieID='$ConsultatieID' " ;

   if(mysqli_query($conn,$query)) {
       header('Location: view.php');
      echo "Update succeded";
   }    else {
       echo "Update nereusit";
   }

   mysqli_close($conn);
?>


