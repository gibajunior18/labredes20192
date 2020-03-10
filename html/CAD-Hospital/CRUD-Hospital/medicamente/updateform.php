<html>
<head>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="js/jquery.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php 

$MedicamentID=$_GET['id'];

include('dbconnect.php');

$query="SELECT * FROM medicamente where MedicamentID='$MedicamentID' ";

$result=mysqli_query($conn,$query);





?>

<div class="container" style="padding-top:30px;">
      
            <form role="form" action="update.php" method="get">
          <?php   while($row = mysqli_fetch_assoc($result)) {

    

?>
            <input type="hidden" name="id" value="<?php echo $row['MedicamentID'] ;  ?>">
                  
               <div class="form-group">
                  <label>Denumire : </label>
                  <input type="text" name="denumire_medicament" class="form-control" value="<?php echo $row['Denumire'] ;  ?>">
               </div>
              
              
         <button type="submit" class="btn btn-info btn-block">Editeaza Medicament</button>

         <?php 
          }
         ?>
         </form>
        </div>
</body>