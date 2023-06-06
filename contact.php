<!DOCTYPE html>
<html>
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
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class="sub_page">
  <div class="hero_area">
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="books-for-home.php">Books</a>
              </li>
              <li class="nav-item  active">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <a href="sign-in.php"><button class="login_btn">Sign In</button></a>
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
            <h3>Contact Us</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end inner page section -->
  <!-- Contact section -->
  <section class="why_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="full">
            <form method="post" action="contact-db.php">
              <fieldset>
                <input type="text" placeholder="Enter your full name" name="name" required />
                <input type="email" placeholder="Enter your email address" name="email" required />
                <textarea name="message" placeholder="Enter your message" required></textarea>
                <a href="index.php"><input class="submit" type="submit" value="Submit" /></a>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact section -->
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
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="books-for-home.php">Books</a></li>
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="sign-in.php">Sign in</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="widget_menu">
                    <h3>Links</h3>
                    <ul>
                      <li><a href="sign-in.php">Donate Now</a></li>
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
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>
