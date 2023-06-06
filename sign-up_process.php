<?php
session_start();
// initializing variables
$firstname = "";
$lastname = "";
$email = "";
$mobilenumber = "";
$aadharnumber = "";
$address = "";
$role = "";
$username = "";
$password1 = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bookbank');
// REGISTER USER
if (isset($_POST['mobilenumber'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  $aadharnumber = mysqli_real_escape_string($db, $_POST['aadharnumber']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $role = mysqli_real_escape_string($db, $_POST['role']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password1 = md5(mysqli_real_escape_string($db, $_POST['password1']));
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($mobilenumber)) { array_push($errors, "mobilenumber is required"); }
  if (empty($aadharnumber)) { array_push($errors, "aadharnumber is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($role)) { array_push($errors, "role is required"); }
  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($password1)) { array_push($errors, "password is required"); }
  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE aadharnumber='$aadharnumber' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['aadharnumber'] === $aadharnumber) {
      array_push($errors, "Aadhar Number already exists");
    }
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password =$password1;//encrypt the password before saving in the database
  	$query = "INSERT INTO users (firstname,lastname,email,mobilenumber,aadharnumber,address,role,username,password)
  			  VALUES('$firstname','$lastname','$email','$mobilenumber','$aadharnumber','$address','$role','$username','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: dashboard.php');
  }
}
