<?php

$fName=$_POST['fName'];
$Email=$_POST['Email'];
$contact=$_POST['contact'];

// Create connection
$conn = new mysqli('localhost','root','','sapribha');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  $sql = $conn->prepare("INSERT INTO contact_us(fName, Email, contact)
  VALUES (?,?,?)");
  $sql->bind_param("ssi",$fName,$Email,$contact);
  $sql->execute();
  echo "we will contact you soon!";
  $sql->close();

   $conn->close();



}
?>