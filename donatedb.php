<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "bookbank";
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$c_username =  $_REQUEST['c_username'];
$bookname =  $_REQUEST['bookname'];
$authorname = $_REQUEST['authorname'];
$publisher =  $_REQUEST['publisher'];
$booklanguage = $_REQUEST['booklanguage'];
$bookedition = $_REQUEST['bookedition'];
$aboutthebook = $_REQUEST['aboutthebook'];
$numberofpages =  $_REQUEST['numberofpages'];
$bookcondition =  $_REQUEST['bookcondition'];
$bookusedfor =  $_REQUEST['bookusedfor'];
$booksavailable =  $_REQUEST['booksavailable'];
$statusMsg = '';
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$book_image=$targetDir.$fileName;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into donate (c_username,bookname,authorname,publisher,booklanguage,bookedition,numberofpages,aboutthebook,bookcondition,bookusedfor,booksavailable,book_image,
            uploaded_on) VALUES ('".$c_username."','".$bookname."','".$authorname."','".$publisher."','".$booklanguage."','".$bookedition."','".$numberofpages."','".$aboutthebook."','".$bookcondition."'
            ,'".$bookusedfor."','".$booksavailable."','".$targetFilePath."', NOW())");
            if($insert){
                header('location: video-verification.php');
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG & PNG files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
// Display status message
echo $statusMsg;
?>