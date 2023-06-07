<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation_project";

$link = new mysqli($servername, $username, $password, $dbname);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

// Get form data
$name =$_POST["name"];
$email =$_POST["email"];
$comments =$_POST["comments"];


// Insert data into donors table
$sql = "INSERT INTO comment (name, email, comments)
        VALUES ('$name', '$email', '$comments')";

if ($link->query($sql) === TRUE) {
//    echo "<script> swal('Good job!, Donor Information Update!, successfully'); </script>";

header("Location: aboutus.html"); 

} 
else { echo "Error: " . $sql . "<br>" . $link->error;
    }

    $link->close();

    ?>