<?php 

$MedicamentID=$_GET['id'];


include('dbconnect.php');

session_start();
$userLogin=$_SESSION['login_user'];
$userPassword=$_SESSION['login_password'];
$is_Admin=$_SESSION['isAdmin'];
if($is_Admin){
    $query= "DELETE FROM medicamente where MedicamentID = '$MedicamentID' "; 

    if(mysqli_query($conn,$query)){
        header('Location: view.php');
    }
    else {
        echo "eroare sql";
    }
}else{
    echo "Nu aveti privilegiile necesare";
}



?>