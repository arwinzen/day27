<?php
    $servername = "localhost";
    $username = "rwin";
    $password = "rw1ng00Z3n";
    $dbname = "attendance_system";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // $getdb = mysqli select db($conn, "training");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully"."<br>";
    echo "<br>";

    
?>