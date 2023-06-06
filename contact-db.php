<?php
        $conn = mysqli_connect("localhost", "root", "", "bookbank");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message =  $_REQUEST['message'];
        $sql = "INSERT INTO contact (name,email,message)
        VALUES('$name','$email','$message')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n $name\n $email\n $message\n ");
                header('location: index.php');
        }
        else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>
