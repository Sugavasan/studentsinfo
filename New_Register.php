<?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student register"; 



$connection = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}

$Nname = $_POST['Nname'];
$Nemail = $_POST['Nemail'];

// Check if the email already exists
$SELECT = "SELECT Nemail FROM register WHERE Nemail = ?";
$stmt = $connection->prepare($SELECT);
$stmt->bind_param("s", $Nemail);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    echo "Email already exists"."<br>"."please Check again.".'<meta http-equiv="refresh" content="3;url=login.html">';
} else {
    // Insert a new record
    $INSERT = "INSERT INTO register (Nname, Nemail) VALUES (?, ?)";
    $stmt = $connection->prepare($INSERT);
    $stmt->bind_param("ss", $Nname, $Nemail);
    if ($stmt->execute()) {
        echo "New Record Inserted".'<meta http-equiv="refresh" content="5;url=table.html">';
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$connection->close();
?>
