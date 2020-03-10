<html>
<head>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="js/jquery.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <h3>Consultatii</h3>
</head>


<body>


<?php 

include('dbconnect.php');
$query="SELECT * FROM consultatie";
$result = mysqli_query($conn,$query);

?>
   <div class="container" style="padding-top:20px; padding-bottom:20px;">
      <div class="row">
         <div class="col-sm-4">
            <form role="form" action="insert.php" method="post">
            <div class="form-group"  >
                  <label>Medicament : </label>
                  <select name="medicament" class="form-control">
                  <?php 
                  $sql = mysqli_query($conn, "SELECT * FROM medicamente");
                  while ($row = $sql->fetch_assoc()){
                        
                  echo '<option value="' . $row['MedicamentID'] . '">'. $row['Denumire']  . '</option>';
}
?>
</select>
               </div>
               <div class="form-group"  >
                  <label>Pacient : </label>
                  <select name="pacienti" class="form-control">
                  <?php 
                  $sql = mysqli_query($conn, "SELECT * FROM pacient");
                  while ($row = $sql->fetch_assoc()){
                        
                  echo '<option value="' . $row['PacientID'] . '">'. $row['NumePacient'] . " " . $row['PrenumePacient'] . '</option>';
}
?>
</select>
               </div>

               <div class="form-group"  >
                  <label>Medic : </label>
                  <select name="medic" class="form-control">
                  <?php 
                  $sql = mysqli_query($conn, "SELECT * FROM medic");
                  while ($row = $sql->fetch_assoc()){
                        
                  echo '<option value="' . $row['MedicID'] . '">'. $row['NumeMedic'] . " " . $row['PrenumeMedic'] . '</option>';
}
?>
</select>
               </div>


               <div class="form-group"  >
                  <label>Data : </label>
                  <input type="text" name="data" class="form-control" value="YYYY-MM-DD">
               </div>
               <div class="form-group">
                  <label>Diagnostic : </label>
                  <input type="text" name="diagnostic" class="form-control">
               </div>
               <div class="form-group">
                  <label>Doza Medicament : </label>
                  <input type="text" name="doza_medicament" class="form-control">
               </div>
               
         
         <button type="submit" class="btn btn-info btn-block">Adauga Consultatie</button>
         </form>
        </div>
      <div class="col-sm-8">
         <table class="table">
            <thead>
               <tr>
                  <th>Medicament</th>
                  <th>Pacient</th>
                  <th>Medic</th>
                  <th>Data</th>
                  <th>Diagnostic</th>
                  <th>Doza Medicament</th>
                  <th>Actions </th>
               </tr>
            </thead>
            <tbody>

            <?php 
           
            while($row=mysqli_fetch_assoc($result)){
            
            ?>
               <tr>
                  <td> <?php 
                  //show medicamente
                  $query2 = " SELECT Denumire FROM medicamente WHERE MedicamentID = {$row['MedicamentID'] }";
                  $post_results = mysqli_query($conn,$query2);
                  $row2 = mysqli_fetch_assoc($post_results);
                  $post_numbers = $row2['Denumire'];
                  echo $post_numbers  ; ?></td>
                  <td> <?php
                  //show pacienti
                 
                  $query3 = " SELECT NumePacient , PrenumePacient FROM pacient WHERE PacientID = {$row["PacientID"] }";
                
                  $post_rez = mysqli_query($conn,$query3);
                  $row3 = mysqli_fetch_assoc($post_rez);

                  $post_numbers3 = $row3['NumePacient'] . " " . $row3['PrenumePacient'];
                  echo $post_numbers3;  ?></td>

                  <td> <?php
                  $query4="SELECT MedicID  from medic_pacient where  PacientID={$row["PacientID"]}";
                  $post_rez2 = mysqli_query($conn,$query4);
                  $row4 = mysqli_fetch_assoc($post_rez2);

                  $post_medicID = $row4['MedicID'];
                  
                  $query5="SELECT NumeMedic , PrenumeMedic from medic where MedicID=$post_medicID";
                  $post_rez3 = mysqli_query($conn,$query5);
                  $row5 = mysqli_fetch_assoc($post_rez3);

                  $post_medicDetails = $row5['NumeMedic'] . " " . $row5['PrenumeMedic'] ;
                  echo $post_medicDetails; ?></td>

                  <td> <?php echo $row['Data']; ?></td>
                  <td> <?php echo $row['Diagnostic'] ;?></td>
                  <td> <?php echo $row['DozaMedicament'] ;?></td>
                                  
                  <td>
                     <a href="updateform.php?id=<?php echo $row['ConsultatieID'] ; ?>" class="btn btn-success" role="button">Update</a>
                     <a href="delete.php?id=<?php echo $row['ConsultatieID'] ; ?>" class="btn btn-danger" role="button">Delete</a>
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