<?php



if(empty($fname)||empty($pass))
{

 $host="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbname="student register";
 
 $connection=new mysqli($host,$dbusername,$dbpassword,$dbname);

 if(mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_error.')'.mysqli_connect_error());
 }

 $logindata=[
    $_POST['fname'],
    $_POST['pass']
 ];

 $INSERT="INSERT into login_details(fname,pass) values(?,?)";
 $stmt = $connection->prepare($INSERT);
 $stmt->bind_param("si",...$logindata);
 $stmt->execute();
 $stmt->close();

 echo "The record inserted successfully"."<br>".'<meta http-equiv="refresh" content="5;url=table.html">';
 $connection->close();
}else{
    echo "please check again.";
}