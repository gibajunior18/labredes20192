<?php 

$Username=$_POST['UsernameCreate'];
$password=$_POST['PasswordCreate'];

$password_hash = password_hash($password, PASSWORD_BCRYPT);

include('dbconnect.php');
$sql="INSERT into multi_user(user,password,isAdmin) values ('$Username','$password_hash','0')";
if(mysqli_query($conn,$sql)) {
    echo "creare cont reusit";
}    else {
    echo "Update nereusit";
}

?>