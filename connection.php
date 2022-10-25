<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname ="contactform";
    
    
    $conn = mysqli_connect( $servername,$username,$password,$dbname);

    if($conn)
    {
        // echo"Connection done";
    }
    else{
        echo "Connection failed" .mysqli_connect_error();
    }

?>