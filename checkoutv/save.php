<?php

include('../msql/dbconfig.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$highschool = $_POST['highschool'];
$college = $_POST['college'];
$zip = $_POST['zip'];




$sql = "INSERT INTO customer_info (fname, lname, username, email, highschool, college, zip) VALUES (:fname, :lname, :email, :username, :highschool, :college, :zip);"; // insert data to database
$params = array(':fname' => $fname , ':lname' => $lname, ':username' => $username, ':email' => $email, ':highschool' => $highschool, ':college' => $college, ':zip' => $zip);

$stmt = $DB_con->prepare($sql);
$stmt->execute($params);


/*
$target_path = "/home/ubuntu/workspace/my-final-project"; 
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']); 
 
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) { 
 echo "File uploaded successfully!"; 
} else{ 
 echo "Sorry, file not uploaded, please try again!"; 
} 
*/


if(!empty($_POST['checkoutForm']))
{
  header("Location: /postorder/postorder.php"); 
}





echo "New record inserted sucessfully";







?>