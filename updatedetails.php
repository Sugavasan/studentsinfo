<?php

// Check if the form has been submitted
if(empty($id)||empty($fname)||empty($lname)||empty($eday)||
empty($edate)||empty($pa)){

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "student register"; 

    // Create connection
    $connection = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }

    // Define the data arrays
    $data1 = [
        $_POST['id'],
        $_POST['fname'],
        $_POST['lname'],
        $_POST['eday'],
        $_POST['edate'],
        $_POST['pa']
    ];

    $data2 = [
        $_POST['id1'],
        $_POST['fname1'],
        $_POST['lname1'],
        $_POST['eday1'],
        $_POST['edate1'],
        $_POST['pa1']
    ];

  $data3=[
    $_POST['id2'],
    $_POST['fname2'],
    $_POST['lname2'],
    $_POST['eday2'],
    $_POST['edate2'],
    $_POST['pa2']
  ];

  $data4=[
    $_POST['id3'],
    $_POST['fname3'],
    $_POST['lname3'],
    $_POST['eday3'],
    $_POST['edate3'],
    $_POST['pa3']
  ];

  $data5=[
    $_POST['id4'],
    $_POST['fname4'],
    $_POST['lname4'],
    $_POST['eday4'],
    $_POST['edate4'],
    $_POST['pa4']
  ];
    // Prepare statement for INSERT
    $INSERT = "INSERT INTO student (id, fname, lname, eday, edate, pa) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare and execute the first INSERT
    $stmt = $connection->prepare($INSERT);
    $stmt->bind_param("isssis", ...$data1); // Using the splat operator to unpack the array
    $stmt->execute();
    $stmt->close();

    // Prepare and execute the second INSERT
    $stmt = $connection->prepare($INSERT);
    $stmt->bind_param("isssis", ...$data2); 
    $stmt->execute();
    $stmt->close();

    $stmt = $connection->prepare($INSERT);
    $stmt->bind_param("isssis",...$data3);
    $stmt->execute();
    $stmt->close();

    $stmt = $connection->prepare($INSERT);
    $stmt->bind_param("isssis",...$data4);
    $stmt->execute();
    $stmt->close();

    $stmt = $connection->prepare($INSERT);
    $stmt->bind_param("isssis",...$data5);
    $stmt->execute();
    $stmt->close();

    echo "The records inserted successfully.".'<meta http-equiv="refresh"content="5;url=login.html">';

    $connection->close();
}
else{
  echo "please check again.";
}
?>
