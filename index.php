<?php

?>

<!DOCTYPE html>
<html ng-app='cls'>
<head>
    <title>Ticket Group</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/bootstrap.css" />
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>

    <div class="container">
      <div class="row text-center">
        <img src="images/homelogo.png" alt="Ticket Group Logo">
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="login-panel">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <div class="text-center text-success">
                  Login
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group row">
                 <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" name="username" placeholder="Username" required="true">
                 </div>
               </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="true">
                </div>
              </div>
              <div class="form-group row">
               <div class="offset-sm-2 col-sm-10">
                 <button type="submit" class="btn btn-success">Login</button>
               </div>
             </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
