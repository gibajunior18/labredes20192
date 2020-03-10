<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="js/jquery.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <h3>Bun venit!</h3>

  </head>

  <body>

  <div class="container" style="padding-top:20px; padding-bottom:20px;">
  <div class="row">
     <div class="col-sm-4">
        <form role="form" action="login.php" method="post">
           <div class="form-group"  >
              <label>Username : </label>
              <input type="text" name="UsernameLogin" class="form-control">
           </div>
           <div class="form-group">
              <label>Password : </label>
              <input type="password" name="PasswordLogin" class="form-control">
           </div>
           <button type="submit" class="btn btn-info btn-block">Login</button>
     </form>
    </div>

    <div class="container" style="padding-top:20px; padding-bottom:20px;">
      <div class="row">
         <div class="col-sm-4">
            <form role="form" action="create_account.php" method="post">
               <div class="form-group"  >
                  <label>Username : </label>
                  <input type="text" name="UsernameCreate" class="form-control">
               </div>
               <div class="form-group">
                  <label>Password : </label>
                  <input type="password" name="PasswordCreate" class="form-control">
               </div>
               <button type="submit" class="btn btn-info btn-block">Creaza cont</button>
         </form>
        </div>


  </body>
</html>
