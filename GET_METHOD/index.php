<?php

try {
    // Get the data from the URL
    $name = $_GET["name"];
    $occupation = $_GET["occupation"];
    $gender = $_GET["gender"];
    $contact_no = $_GET["contact_no"];
} catch (Exception $e)
{
    echo "error";
}


// Database server details
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_database_name = "customer";

// Database connection
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_database_name);
if (!$conn) {
    echo mysqli_error($conn);
    die();
}

// Query
$query = "INSERT INTO information (name, occupation, gender, contact_no) VALUES ('$name', '$occupation', '$gender', '$contact_no')";
if (mysqli_query($conn, $query)) {
    echo "done";
} else {
    echo "error";
}



?>