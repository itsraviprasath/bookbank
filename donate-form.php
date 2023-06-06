<!DOCTYPE html>
<html>
<head>
  <style>
    .upload-image{
      text-align: left;
    }
  </style>
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
  <?php
  session_start();
  $username=$_SESSION['username'];
  ?>
  <!-- Donate section -->
  <div class="login-section">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Enter your Book details</h3>
        </div>
        <div class="card-body">
        <form method="post" action="donatedb.php" enctype='multipart/form-data'>
            <div class="input-group form-group">
              <input type="text" name="bookname" class="form-control" placeholder="Book Name" >
            </div>
            <div class="input-group form-group">
              <input type="text" name="authorname" class="form-control" placeholder="Author Name">
            </div>
            <div class="input-group form-group">
              <input type="text" name="publisher" class="form-control" placeholder="Publisher" >
            </div>
            <div class="input-group form-group">
              <input type="text" name="booklanguage"class="form-control" placeholder="Book Language" >
            </div>
            <div class="input-group form-group">
              <input type="text" name="bookedition"class="form-control" placeholder="Book Edition" >
            </div>
            <div class="input-group form-group">
              <input type="number" name="numberofpages" class="form-control" placeholder="No. Of Pages" >
            </div>
            <div class="input-group form-group">
              <textarea type="text" name="aboutthebook" class="form-control" placeholder="Description" ></textarea>
            </div>
            <div class="input-group form-group">
              <select type="text" name="bookcondition" class="form-control">
                <option value="Book Condition">Select Your Book Condition</option>
                <option value="Good">Good</option>
                <option value="Moderate">Moderate</option>
                <option value="Bad">Bad</option>
              </select>
            </div>
            <div class="input-group form-group">
              <select type="text" name="bookusedfor" class="form-control">
                <option value="book_used_for">Book Used for</option>
                <option value="Less then 1 year">Less then 1 year</option>
                <option value="1 Year">1 Year</option>
                <option value="2 Years">2 Years</option>
                <option value="3 Years">3 Years</option>
                <option value="4 Years">4 Years</option>
                <option value="5 Years">5 Years</option>
                <option value="More then 5 Years">More then 5 Years</option>
              </select>
            </div>
            <div class="input-group form-group">
              <input type="text" name="booksavailable" class="form-control" placeholder="No. of Books Available" >
            </div>
            <p class="upload-image" style="text-align=left">Image(Front Cover):</p>
            <div class="input-group form-group">
              <input type="file"  name="file"  class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" name='submit' value="submit" class="form-btn">Donate</button>
            </div>
            <input type="hidden" name="c_username" value="<?php echo $username;?>">
          </form>
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


