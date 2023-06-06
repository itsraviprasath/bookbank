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
<body>
  <div class="logo">
    <a href="index.php"><img width="200" src="images/logo.png" alt="#"></a>
  </div>
<?php
  session_start();
  $username=$_SESSION['username'];
  ?>
  <!-- Booking Section -->
  <div class="login-section">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Enter your Booking details</h3>
        </div>
        <div class="card-body">
          <form method="post" action="bookingdb.php">
            <div class="input-group form-group">
              <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="input-group form-group">
              <input type="text" name="doornumber" class="form-control" placeholder="Door Number" required >
            </div>
            <div class="input-group form-group">
              <input type="text" name="streetname" class="form-control" placeholder="Street Name" required>
            </div>
            <div class="input-group form-group">
              <input type="text" name="city" class="form-control" placeholder="City" required>
            </div>
            <div class="input-group form-group">
              <input type="text" name="district"class="form-control" placeholder="District" required>
            </div>
            <div class="input-group form-group">
              <select type="text" name="state" class="form-control" required>
                <option value="State">Select Your State</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Ladakh">Ladakh</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
              </select>
            </div>
            <div class="input-group form-group">
              <input type="text" name="country" class="form-control" placeholder="Country" value="India" required>
            </div>
            <div class="input-group form-group">
              <input type="tel" name="pincode" class="form-control" placeholder="Pincode"required>
            </div>
            <div class="input-group form-group">
              <input type="checkbox" name="checkbox" class="form-control" required>
              <p style="margin-bottom: 0px; width: 400px;">I understood, the booking cannot be cancelled once ordered.</p>
            </div>
            <div class="form-group">
              <a href="booking-success.php"><input style="margin-left: 0px; margin-bottom: 0px;" type=submit class="form-btn" value="Confirm Booking"></a>
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
