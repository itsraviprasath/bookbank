<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <style>
    .search{
      width: 20%;
      margin: 50px auto 0px;
    }
    * {
  box-sizing: border-box;
}

/* Style the search field */
form.search input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.search button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #012970;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.search button:hover {
  background: #e5510b;
}

/* Clear floats */
form.search::after {
  content: "";
  clear: both;
  display: table;
}
  </style>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <?php
    session_start();
    $username=$_SESSION['username'];
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
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="books-for-dashboard.php?username=<?php echo $username;?>">Books</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="donate-form.php?username=<?php echo $username;?>">Donate</a>
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
            <h3>Books to Donate</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end inner page section -->
  <!-- Search Section -->
  <form class="search" action="books-for-dashboard-search.php" method="post">
    <input type="text" name="search" placeholder="Search for Books...">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>

  <?php
$conn = mysqli_connect('localhost', 'root', '', 'bookbank');
// collect
if(isset($_POST['search'])){
  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
  $query1 = mysqli_query($conn, "SELECT * FROM donate WHERE bookname LIKE '%$searchq%' OR authorname LIKE '%$searchq%'") or die("could not search!");
  $count = mysqli_num_rows($query1);
}
?>

  <!-- product section -->
  <section id="product_section" class="layout_padding" style="padding-top: 0px;">
    <div class="container">
      <div class="row">
        <?php
        if ($count>0){
          while($data = mysqli_fetch_assoc($query1)){
            $id=$data['id'];
            $bookname=$data['bookname'];
            $book_image=$data['book_image'];
        ?>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="box">
            <div class="option_container">
              <div class="options">
                <a href="book-details-for-dashboard.php?id=<?php echo $id;?>" class="option1">
                  View Details
                </a>
                <a href="booking.php?id=<?php echo $id;?>" class="option2">
                  Get Now
                </a>
              </div>
            </div>
            <div class="img-box">
              <img src="<?php echo $book_image; ?>" alt="">
            </div>
            <div class="detail-box">
              <?php echo "<h5>".$bookname."</h5>"; ?>
            </div>
          </div>
        </div>
        <?php
      }
        }
        ?>
      </div>
  </section>
  <!-- end product section -->
  <!-- footer start -->
  <footer id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="full">
            <div class="logo_footer">
              <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
            </div>
            <div class="information_f">
              <p><strong>ADDRESS:</strong> BIT, Sathyamagalam, Erode, Tamilnadu, India</p>
              <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
              <p><strong>EMAIL:</strong> mymail@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-6">
                  <div class="widget_menu">
                    <h3>Menu</h3>
                    <ul>
                      <li><a href="dashboard.php">Dashboard</a></li>
                      <li><a href="books-for-dashboard.php">Books</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="widget_menu">
                    <h3>Links</h3>
                    <ul>
                      <li><a href="donate-form.php">Donate Now</a></li>
                      <li><a href="#">Terms of Use</a></li>
                      <li><a href="#">Security</a></li>
                      <li><a href="#">Privacy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="widget_menu">
                <h3>We are in</h3>
                <ul>
                  <li><a class="social-link" href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
                  <li><a class="social-link" href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
                  <li><a class="social-link" href="#"><i class="bi bi-twitter"></i> Twitter</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->
  <div class="cpy_">
    <p class="mx-auto">© 2023 bookBank | All Rights Reserved.
    </p>
  </div>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" charset="utf-8"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>
