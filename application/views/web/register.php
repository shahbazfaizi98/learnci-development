<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="background-color:#875656;">
    <div class="container" style="margin-top:100px;">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <h2>Registration Form</h2>
                </div>
              </div>
              <hr>
              <form action="saveRegister" method="post">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input class="form-control" type="text" name="username" value="" placeholder="Enter Your Username">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" type="email" name="email" value="" placeholder="Enter Your Email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="">Mobile</label>
                    <input class="form-control" type="mobile" name="mobile" value="" placeholder="Enter Your mobile">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control" type="password" name="password" value="" placeholder="Enter Your Password">
                  </div>
                </div>
                <div class="col-12">
                  <input type="submit" name="registerBtn" class="btn btn-success">
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
