
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
session_start();
$link = mysqli_connect("localhost", "root", "surisetty@1999", "allusers");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$donor = mysqli_real_escape_string($link, $_REQUEST['donor']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$addres = mysqli_real_escape_string($link, $_REQUEST['addres']);
// Attempt insert query execution
$sql = "INSERT INTO donord (donor,contact,city,addres) VALUES ('$donor','$contact','$city','$addres' )";
if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
    header('location:tq.php');
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 ?>