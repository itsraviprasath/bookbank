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
$statusMsg = '';
// File upload path
$targetDir = "uploads/videos/";
$fileName = basename($_FILES["file"]["name"]);
$book_image=$targetDir.$fileName;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('mp4');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database

            $update = $db->query("UPDATE donate SET book_video = '".$targetFilePath."' WHERE id = '".$id."' ");
            if($update){
                header('location: donate-success.php');
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only MP4 files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
// Display status message
echo $statusMsg;
?>