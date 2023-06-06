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
  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" charset="utf-8"></script>
</head>
    <?php
    session_start();
    $username=$_SESSION['username'];
    $conn = mysqli_connect("localhost", "root", "", "bookbank");
    $query = "select * from users";
    $connect = mysqli_query($conn,$query);
    $num = mysqli_num_rows($connect);
    ?>
<body>
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
              <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
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
                    <li><a class="dropdown-item" href="my-account.php?username=<?php echo $username;?>">Account</a></li>
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
            <h3>Hello <?php echo ucfirst($username);?></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end inner page section -->
  <!-- Dashboard Section -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
  <?php
  $sql1 = "SELECT COUNT(c_username) as count FROM donate where c_username='$username'";
  $result1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_array($result1);
  ?>
        <div class="card dashboard-card">
          <div class="card-head">
            <h3 class="card-title">Your Donations</h3>
          </div>
          <div class="card-body">
            <p class="card-text"><span class="number"><?php echo $row1['count']; ?></span> Book(s)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
  <?php
  $sql2 = "SELECT COUNT(c_username) as count FROM gettings where c_username='$username'";
  $result2=mysqli_query($conn,$sql2);
  $row2=mysqli_fetch_array($result2);
  ?>
        <div class="card dashboard-card">
          <div class="card-head">
            <h3 class="card-title">Your Gettings</h3>
          </div>
          <div class="card-body">
            <p class="card-text"><span class="number"><?php echo $row2['count']; ?></span> Book(s)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
  <?php
  $sql3 = "SELECT COUNT(c_username) as count FROM booking where c_username='$username'";
  $result3=mysqli_query($conn,$sql3);
  $row3=mysqli_fetch_array($result3);
  ?>
        <div class="card dashboard-card">
          <div class="card-head">
            <h3 class="card-title">Pending Request</h3>
          </div>
          <div class="card-body">
            <p class="card-text"><span class="number"><?php echo $row3['count']; ?></span> Book(s)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
  <?php
  $sql4 = "SELECT COUNT(c_username) as count FROM booking where c_username='$username'";
  $result4=mysqli_query($conn,$sql4);
  $row4=mysqli_fetch_array($result4);
  ?>

<?php
$arr = array("a"=>$row1['count'],"b"=>$row2['count']);
?>

        <div class="card dashboard-card">
          <div class="card-head">
            <h3 class="card-title">Total Transactions</h3>
          </div>
          <div class="card-body">
            <p class="card-text"><span class="number"><?php echo array_sum($arr); ?></span> Book(s)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Dashboard Section -->
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
