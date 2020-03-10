<html>
<head>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="js/jquery.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <h3>Pacienti</h3>
</head>


<body>


<?php 

include('dbconnect.php');
$query="SELECT * FROM pacient";
$result = mysqli_query($conn,$query);

?>
   <div class="container" style="padding-top:20px; padding-bottom:20px;">
      <div class="row">
         <div class="col-sm-4">
            <form role="form" action="insert.php" method="post">
               <div class="form-group"  >
                  <label>CNP : </label>
                  <input type="text" name="cnp_pacient" class="form-control">
               </div>
               <div class="form-group">
                  <label>Nume Pacient : </label>
                  <input type="text" name="nume_pacient" class="form-control">
               </div>
               <div class="form-group">
                  <label>Prenume Pacient : </label>
                  <input type="text" name="prenume_pacient" class="form-control">
               </div>
               <div class="form-group">
                  <label>Adresa : </label>
                  <input type="text" name="adresa_pacient" class="form-control">
               </div>
               <div class="form-group">
                  <label>Asigurare : </label>
                  <input type="text" name="asigurare_pacient" class="form-control">
               </div>
         
         <button type="submit" class="btn btn-info btn-block">Adauga Pacient</button>
         </form>
        </div>
      <div class="col-sm-8">
         <table class="table">
            <thead>
               <tr>
                  <th>CNP</th>
                  <th>Nume</th>
                  <th>Prenume</th>
                  <th>Adresa</th>
                  <th>Asigurare</th>
               </tr>
            </thead>
            <tbody>

            <?php 

            while($row=mysqli_fetch_assoc($result)){
            
            ?>
               <tr>
                  <td> <?php echo $row['CNP']; ?></td>
                  <td> <?php echo $row['NumePacient']; ?></td>
                  <td> <?php echo $row['PrenumePacient'] ?></td>
                  <td> <?php echo $row['Adresa']; ?></td>
                  <td> <?php echo $row['Asigurare']; ?></td>
                  
                  <td>
                     <a href="updateform.php?id=<?php echo $row['CNP'] ; ?>" class="btn btn-success" role="button">Update</a>
                     <a href="delete.php?id=<?php echo $row['CNP'] ; ?>" class="btn btn-danger" role="button">Delete</a>
                  </td>
               </tr>
               <?php 
            }
               mysqli_close($conn);
               ?>
            </tbody>
         </table>
         <div class="col-sm-4" style="padding-top:20px;padding-left:750px;">
          
          <a href="http://localhost:90/proiect3/view/view.php" class="btn btn-info" role="button">Back</a>
         </div>

      </div>
   </div>
   </div>
</body>
</html>