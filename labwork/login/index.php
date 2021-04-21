
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="icon" href="img/favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css2/bootstrap.min.css">
  <link rel="stylesheet" href="css2/loginstyle.css">
  <link rel="stylesheet" href="css2/preloader.css">
  <script src="js2/jquery.min.js"></script>
  <script src="js2/bootstrap.min.js"></script>
  <script src="js2/custom.js"></script>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

</head>
<body>
<div class="container">
    <div class="row vertical-align">
      <div class=" col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <center><h5 class="text-center pb-3"><img src="logo.png" height="90"></h5></center>
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="" method="post">
              <div class="form-label-group">
                <input type="text" name="u" id="inputUser" class="form-control" placeholder="Username" required autofocus autocomplete="off">
                <label for="inputUser">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="p" id="inputPassword" class="form-control" placeholder="Password" required autocomplete="off">
                <label for="inputPassword">Password</label>
                <a href=""><label class="p-2">Forgot Password?</label></a>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Login</button>
              <label class="pl-2 pt-2">Doesn't have an account? <a href="" style="text-decoration: none">Sign Up</a></label>
              <?php
      //validation
         if(isset($_POST['submit']))
        {
          $user=$_POST['u'];
          $pass=$_POST['p'];
         
          if($user=="admin" && $pass=="admin")
          {
             echo '<label class="pt-2 mb-0 text-danger w-100 text-center">'.'<strong>Successful Login!</strong>'.'</label>';
          }
          else
          {
            echo '<label class="pt-2 mb-0 text-danger w-100 text-center">'.'<strong>Wrong username or password</strong>'.'</label>';
          }
            
        }
    ?>
            </form>
            </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>