<?php


var_dump($_POST);
if(isset($_POST["medicament"]) && isset($_POST["pacienti"]) && isset($_POST["data"]) 
&& isset($_POST["diagnostic"]) && isset($_POST["doza_medicament"]) && isset($_POST["medic"]) ) {
    
    $MedicID=$_POST["medic"];
    var_dump($MedicID);
    $MedicamentID=$_POST["medicament"];
    $PacientID=$_POST["pacienti"];
    $data=$_POST["data"];
    $diagnostic=$_POST["diagnostic"];
    $dozaMedicament=$_POST["doza_medicament"];
    include('dbconnect.php');
    $query="INSERT INTO consultatie(Data,Diagnostic,DozaMedicament,PacientID,MedicamentID) VALUES('$data','$diagnostic','$dozaMedicament'
    , '$PacientID' , '$MedicamentID');";
    $query.="INSERT into medic_pacient(MedicID,PacientID) VALUES ('$MedicID' , '$PacientID')";
  
    if(mysqli_multi_query($conn,$query)){
        echo "Inserare reusita";
        header('Location: view.php');
        
    }else {
        echo "Inserare nereusita";
  
    
}

}






?>