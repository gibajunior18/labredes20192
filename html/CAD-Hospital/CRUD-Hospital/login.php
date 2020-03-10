<?php 
session_start();
$passwordLogin=$_POST['PasswordLogin'];
$userLogin=$_POST['UsernameLogin'];
include('dbconnect.php');
$sql=" SELECT user , password , isAdmin from multi_user";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {
    $getPassword=$row['password'];
    $getUser=$row['user'];
    if(($getUser==$userLogin) && password_verify($passwordLogin,$getPassword)){
        $_SESSION['login_user']=$userLogin;
        $_SESSION['login_password']=$passwordLogin;
        $isAdmin=$row['isAdmin'];
        $_SESSION['isAdmin']=$isAdmin;
        header("location: view/view.php");
        
    }
}
echo "  Failed to login!";



?>