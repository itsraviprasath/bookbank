<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <style>
    .video{
      margin: 30px 25px;
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
</head>
    <?php
    session_start();
    $id= $_GET['id'];
    $username=$_SESSION['username'];
    $conn = mysqli_connect("localhost", "root", "", "bookbank");
    $query = "select * from donate where id='".$id."'";
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
  <!-- Book Details Section -->
  <div class="container-fuild">
    <div class="row">
      <?php
      if ($num>0){
        while($data = mysqli_fetch_assoc($connect)){
          $id=$data['id'];
          $bookname=$data['bookname'];
          $authorname=$data['authorname'];
          $publisher=$data['publisher'];
          $booklanguage=$data['booklanguage'];
          $bookedition=$data['bookedition'];
          $numberofpages=$data['numberofpages'];
          $aboutthebook=$data['aboutthebook'];
          $bookcondition=$data['bookcondition'];
          $bookusedfor=$data['bookusedfor'];
          $booksavailable=$data['booksavailable'];
          $book_image=$data['book_image'];
          $book_video=$data['book_video'];
      ?>
      <div class="col-sm-12 col-md-12 col-lg-6 book">
        <img width="90%" src="<?php echo $book_image; ?>" alt="">
        <video class="video" width="500px" height="300px" muted controls>
          <source src="<?php echo $book_video; ?>" type="video/mp4">
        </video>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 book-deatils">
        <h1 name="bookname" class="book-name"><?php echo $bookname; ?></h1>
        <h6 class="author-name">Author : <span name="authorname"><?php echo $authorname; ?></span></h6>
        <h4 class="highlights">Highlights</h4>
        <ul>
          <li>Publisher : <span name="publisher"><?php echo $publisher; ?></span></li>
          <li>Language : <span name="booklanguage"><?php echo $booklanguage; ?></span></li>
          <li>Edition : <span name="bookedition"><?php echo $bookedition; ?></span></li>
          <li>Pages : <span name="numberofpages"><?php echo $numberofpages; ?></span></li>
        </ul>
        <h4 class="description">Description</h4>
        <p name="description"><?php echo $aboutthebook; ?></p>
        <h4 class="book-usage">Book Usage Details</h4>
        <ul>
          <li>Book Condition : <span name="bookcondition"><?php echo $bookcondition; ?></span></li>
          <li>Usage : <span name="bookusedfor"><?php echo $bookusedfor; ?></span></li>
        </ul>
        <h5 class="no-of-books-avail">Number books available : <span name="booksavailable"><?php echo $booksavailable; ?></span></h5>

        <div class="deatils-page-btn">
          <a href="booking.php"><button class="get-now-btn">Get Now</button></a>
          <a href="books-for-dashboard.php"><button class="other-books-btn">View other Books</button></a>
        </div>
      </div>
      <?php
      }
      }
      ?>
    </div>
  </div>
  <!-- End of Book Details Section -->
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
                      <li><a href="index.php">Dashboard</a></li>
                      <li><a href="books.php">Books</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="widget_menu">
                    <h3>Links</h3>
                    <ul>
                      <li><a href="#">Donate Now</a></li>
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
