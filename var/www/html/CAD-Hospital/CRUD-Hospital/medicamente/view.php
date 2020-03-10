<html>
<head>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="js/jquery.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <h3>Medicamente</h3>
</head>


<body>


<?php 

include('dbconnect.php');
$query="SELECT * FROM medicamente";
$result = mysqli_query($conn,$query);

?>
   <div class="container" style="padding-top:20px; padding-bottom:20px;">
      <div class="row">
         <div class="col-sm-4">
            <form role="form" action="insert.php" method="post">
               <div class="form-group"  >
                  <label>Denumire : </label>
                  <input type="text" name="denumire_medicament" class="form-control">
               </div>

         
         <button type="submit" class="btn btn-info btn-block">Adauga Medicament</button>
         </form>
        </div>
      <div class="col-sm-8">
         <table class="table">
            <thead>
               <tr>
                  <th>Denumire</th>
                  
               </tr>
            </thead>
            <tbody>

            <?php 

            while($row=mysqli_fetch_assoc($result)){
            
            ?>
               <tr>
                  <td> <?php echo $row['Denumire']; ?></td>
                  
                                  
                  <td>
                     <a href="updateform.php?id=<?php echo $row['MedicamentID'] ; ?>" class="btn btn-success" role="button">Update</a>
                     <a href="delete.php?id=<?php echo $row['MedicamentID'] ; ?>" class="btn btn-danger" role="button">Delete</a>
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