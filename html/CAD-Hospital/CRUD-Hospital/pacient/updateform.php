<html>
<head>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="js/jquery.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php 

$CNP=$_GET['id'];

include('dbconnect.php');

$query="SELECT * FROM pacient where CNP='$CNP' ";
$query2="SELECT PacientID from pacient where CNP='$CNP'";
$result2=mysqli_query($conn,$query2);
$result=mysqli_query($conn,$query);



?>

<div class="container" style="padding-top:30px;">
      
            <form role="form" action="update.php" method="get">
          <?php   while($row = mysqli_fetch_assoc($result)) {

    

?>
            <input type="hidden" name="id" value="$result2">
               <div class="form-group"  >
                  <label>CNP : </label>
                  <input type="text" name="cnp_pacient" class="form-control" value="<?php echo $row['CNP'] ;  ?>"
               </div>
               <div class="form-group">
                  <label>Nume Pacient : </label>
                  <input type="text" name="nume_pacient" class="form-control" value="<?php echo $row['NumePacient'] ;  ?>">
               </div>
               <div class="form-group">
                  <label>Prenume Pacient : </label>
                  <input type="text" name="prenume_pacient" class="form-control" value="<?php echo $row['PrenumePacient'] ;  ?>">
               </div>
               <div class="form-group">
                  <label>Adresa : </label>
                  <input type="text" name="adresa_pacient" class="form-control" value="<?php echo $row['Adresa'] ;  ?>">
               </div>
               <div class="form-group">
                  <label>Asigurare : </label>
                  <input type="text" name="asigurare_pacient" class="form-control" value="<?php echo $row['Asigurare'] ;  ?>">
               </div>
         
         <button type="submit" class="btn btn-info btn-block">Editeaza Pacient</button>

         <?php 
          }
         ?>
         </form>
        </div>
</body>