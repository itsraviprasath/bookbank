<?php include('sign-in_process.php') ?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
    function preventBack() { window.history.forward(); }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
  </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Site Metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="Raviprasath, Dharshan Kumar">
  <link rel="shortcut icon" href="images/icon.png" type="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <title>bookBank - Donate or Get Used books for Free</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
  <div class="logo">
    <a href="index.php"><img width="200" src="images/logo.png" alt="#"></a>
  </div>
  <!-- Login section -->
  <div class="login-section">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Welcome Back</h3>
        </div>
        <div class="card-body">
          <form method="post" action="sign-in.php">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-at"></i></span>
              </div>
              <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <!-- <div class="forgot-password">
              <a href="#">Forgot your password?</a>
            </div> -->
            <div class="form-group">
              <a href="dashboard.php"><button type="submit" class="form-btn" name="register">Sign In</button></a>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="">
            New User? <a class="create-account" href="sign-up.php">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- En of Login section -->
  <div class="copywrite">
    <p class="mx-auto">© 2023 bookBank | All Rights Reserved.
    </p>
  </div>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>
