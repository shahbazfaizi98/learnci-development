<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="background: url('<?php echo ASSET_URL; ?>/login.jpg'); background-size: cover; background-position: fixed;">
    <div class="container" style="margin-top:100px;">
      <div class="row">
        <div style="width: 350px; padding-top: 70px; margin: auto;">
          <div class="card" style="background-color: #212529a6; border-radius: 10px;">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <h1 style="text-align: center; color: white;">LOGIN</h1>
                </div>
              </div>
              <hr>
              <form action="web/LoginForm" method="post">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label style="color: white;">Username</label>
                    <input class="form-control" type="text" name="username" value="" placeholder="Enter Your Username">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label style="color: white;">Password</label>
                    <input class="form-control" type="password" name="password" value="" placeholder="Enter Your Password">
                  </div>
                </div>
                <div class="col-12" style="margin-top: 10px;">
                  <div class="form-group">
                    <a href="web/registration">Create Account</a>
                  </div>
                </div>
                <div class="col-12">
                  <input type="submit" name="loginBtn" class="btn btn-success" style="float: right;">
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
