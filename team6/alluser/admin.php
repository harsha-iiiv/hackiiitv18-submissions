<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style3.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", "surisetty@1999"); // Establishing Connection with Server
$db = mysql_select_db("allusers", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from users", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href="admin.php?id={$row['id']}">{$row['username']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from users where id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['username']; ?>
<span>E-mail:</span> <?php echo $row1['email']; ?>
 
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>