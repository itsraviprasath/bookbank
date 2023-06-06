<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
    <?php
      session_start();
      $username= $_GET['username'];
      $username=$_SESSION['username'];
      $conn = mysqli_connect("localhost", "root", "", "bookbank");
      $query = "select * from users where username='".$username."'";
      $connect = mysqli_query($conn,$query);
      $num = mysqli_num_rows($connect);
    ?>
    <div class="dashboard">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php"><img width="200" src="images/logo.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="books-for-dashboard.php">Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="donate-form.php">Donate</a>
                </li>
                <li class="nav-item active">
                  <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle login_btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-person"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="">Account</a></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
      <div class="container_fuild">
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <h3>Your Profile</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end inner page section -->
    <div class="my-details">
    <div class="container mt-7">
      <!-- Table -->
      <div class="row">
        <div class="col-xl-8 m-auto order-xl-1">
          <div class="card">
            <div class="card-body">
              <form method="post" action="my-account-db.php?username=<?php echo $username;?>">
                <?php
                if ($num>0){
                  while($data = mysqli_fetch_assoc($connect)){
                    $id=$data['id'];
                    $firstname=$data['firstname'];
                    $lastname=$data['lastname'];
                    $email=$data['email'];
                    $mobilenumber=$data['mobilenumber'];
                    $aadharnumber=$data['aadharnumber'];
                    $address=$data['address'];
                    $role=$data['role'];
                    $username=$data['username'];
                ?>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label">First name</label>
                        <input name="firstname" type="text" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $firstname; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label">Last name</label>
                        <input name="lastname" type="text" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $lastname; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Email address</label>
                        <input name="email" type="email" class="form-control form-control-alternative" placeholder="Email" value="<?php echo $email; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label">Mobile Number</label>
                        <input name="mobilenumber" type="tel" class="form-control form-control-alternative" placeholder="Mobile Number" value="<?php echo $mobilenumber; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label">Aadhar Number</label>
                        <input name="aadharnumber" type="text" class="form-control form-control-alternative" placeholder="Aadhar Number" value="<?php echo $aadharnumber; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Address</label>
                        <input name="address" type="text" class="form-control form-control-alternative" placeholder="Address" value="<?php echo $address; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label">Your Role</label>
                        <input name="role" type="text" class="form-control form-control-alternative" placeholder="You Role" value="<?php echo $role; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Username</label>
                        <input name="username" type="text" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $username; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group" style="text-align: center;">
                  <a href="#"><button name = "update" class="form-btn">Update</button></a>
                </div> -->
                <?php
              }
                }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Footer -->
  <div class="copywrite">
    <p class="mx-auto">© 2023 bookBank | All Rights Reserved.
    </p>
  </div>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  </body>
</html>
