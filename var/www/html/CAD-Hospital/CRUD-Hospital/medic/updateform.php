<html>
<head>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="js/jquery.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php 

$MedicID=$_GET['id'];
include('dbconnect.php');

$query="SELECT * FROM medic where MedicID='$MedicID' ";

$result=mysqli_query($conn,$query);


?>

<div class="container" style="padding-top:30px;">
      
            <form role="form" action="update.php" method="get">
          <?php   while($row = mysqli_fetch_assoc($result)) {

    

?>
            <input type="hidden" name="id" value="<?php echo $row['MedicID'] ;  ?>">
               <div class="form-group"  >
                  
               <div class="form-group">
                  <label>Nume : </label>
                  <input type="text" name="nume_medic" class="form-control" value="<?php echo $row['NumeMedic'] ;  ?>">
               </div>
               <div class="form-group">
                  <label>Prenume Pacient : </label>
                  <input type="text" name="prenume_medic" class="form-control" value="<?php echo $row['PrenumeMedic'] ;  ?>">
               </div>
               <div class="form-group">
                  <label>Adresa : </label>
                  <input type="text" name="specializare_medic" class="form-control" value="<?php echo $row['Specializare'] ;  ?>">
               </div>
               
         
         <button type="submit" class="btn btn-info btn-block">Editeaza Medic</button>

         <?php 
          }
         ?>
         </form>
        </div>
</body>