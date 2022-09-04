<!doctype html>
<html lang="en">
  <head>
    <link href="Frontend/css/LOGIN.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Spiral</title>
  </head>
  <body>
    <img  id="img" src="Frontend/html.php/validation/bgimg2.webp">
  <form id="form" method="POST"onsubmit="validate()" action="signup1.php">
  <div class="form-group">
    <label style="font-size: 184%;color: darkgreen;"for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="Email" aria-describedby="emailHelp" placeholder="Enter email Which is not registered">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label style="font-size: 184%;color: darkgreen;" for="exampleInputEmail1">Name</label>
    <input type="name" class="form-control" id="name" name="Name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label style="font-size: 184%;color: darkgreen;" for="exampleInputPassword1">Password</label>
    <input type="password" id="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
<a href="LOGIN.php">
  <button style{padding-top:10vh}class="btn btn-primary">Login</button>
</a> 
    <script src="Frontend/js/scriptL.js" type="text/javascript"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>