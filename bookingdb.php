<?php
        $conn = mysqli_connect("localhost", "root", "", "bookbank");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $c_username =  $_REQUEST['c_username'];
        $name =  $_REQUEST['name'];
        $doornumber = $_REQUEST['doornumber'];
        $streetname =  $_REQUEST['streetname'];
        $city = $_REQUEST['city'];
        $district = $_REQUEST['district'];
        $state =  $_REQUEST['state'];
        $country = $_REQUEST['country'];
        $pincode =  $_REQUEST['pincode'];
        $sql = "INSERT INTO booking (c_username,name,doornumber,streetname,city,district,state,country,pincode)
        VALUES('$c_username','$name','$doornumber','$streetname','$city','$district','$state','$country','$pincode')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
            echo nl2br("\n$name\n $doornumber\n "
                . "$streetname\n $city\n $district\n $state\n $country\n "
                . "$pincode\n");
                header('location: booking-success.php');
        }
        else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>
