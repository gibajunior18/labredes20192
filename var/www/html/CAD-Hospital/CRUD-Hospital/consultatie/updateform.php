
<head>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="js/jquery.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   
</head>
<body>
<?php 

$ConsultatieID=$_GET['id'];

include('dbconnect.php');

$query="SELECT * FROM consultatie where ConsultatieID='$ConsultatieID'";

$result=mysqli_query($conn,$query);


?>

<div class="container" style="padding-top:30px;">
      
            <form role="form" action="update.php" method="get">
          <?php   while($row = mysqli_fetch_assoc($result)) {

?>
            <input type="hidden" name="id" value="<?php echo $row['ConsultatieID'] ; ?>">
            <select name="medicament" class="form-control" value=""<?php echo $row['MedicamentID'] ; ?>">
               <div class="form-group">
                  <label>Medicament : </label>
                  <?php 
                  $sql = mysqli_query($conn, "SELECT * FROM medicamente");
                  while ($row2 = $sql->fetch_assoc()){
                        
                  echo '<option value="' . $row2['MedicamentID'] . '">'. $row2['Denumire'] .  '</option>';
}
?>
</select>

               </div>
               <div class="form-group">
                  <label> Medic : </label>
                  <input type="text" name="nume_medic" class="form-control" readonly="readonly" value="<?php
                  
                  $Consultatie=$_GET['id'];
                  $sql="SELECT PacientID  from consultatie where  ConsultatieID='$Consultatie' ";
                  $sql_rez= mysqli_query($conn,$sql);
                  $row_sql = mysqli_fetch_assoc($sql_rez);
                  $post_PacientID = $row_sql['PacientID'];
                  
                  $sql2="SELECT MedicID  from medic_pacient where PacientID=$post_PacientID";
                  $sql_rez2 = mysqli_query($conn,$sql2);
                  $row_sql2 = mysqli_fetch_assoc($sql_rez2);
                  $post_medicID = $row_sql2['MedicID'] ;

                  $sql3="SELECT NumeMedic,PrenumeMedic  from medic where MedicID=$post_medicID";
                  $sql_rez3 = mysqli_query($conn,$sql3);
                  $row_sql3 = mysqli_fetch_assoc($sql_rez3);
                  $post_medicDetalii = $row_sql3['NumeMedic'] . " " . $row_sql3['PrenumeMedic'] ;

                  echo $post_medicDetalii;


  ?>">
               </div>

               <div class="form-group">
                  <label> Pacient : </label>
                  <input type="text" name="nume_pacient" class="form-control" readonly="readonly" value="<?php
                  
                  $query2 = " SELECT NumePacient , PrenumePacient FROM pacient WHERE PacientID = {$row['PacientID'] }";
                  $post_results = mysqli_query($conn,$query2);
                  $row3 = mysqli_fetch_assoc($post_results);
                  $post_numbers = $row3['NumePacient'] . " " .  $row3['PrenumePacient'];
                  echo $post_numbers  ;


  ?>">
               </div>


               
               <div class="form-group">
                  <label>Data : </label>
                  <input type="text" name="data" class="form-control" value="<?php echo $row['Data'] ; ?>">
               </div>
               <div class="form-group">
                  <label>Diagnostic : </label>
                  <input type="text" name="diagnostic" class="form-control" value="<?php echo $row['Diagnostic'] ; ?>">
               </div>
               <div class="form-group">
                  <label>Doza Medicament : </label>
                  <input type="text" name="doza_medicament" class="form-control" value="<?php echo $row['DozaMedicament'] ; ?>">
               </div>
               
         
         <button type="submit" class="btn btn-info btn-block">Editeaza Consultatie</button>

         <?php 
          }
         ?>
         </form>
        </div>
</body>
