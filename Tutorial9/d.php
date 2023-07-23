<html>
<body>

<?php

$fName=$_REQUEST['firstName'];
$lName=$_REQUEST['lastName'];
$uName=$_REQUEST['userName'];
$pwd=$_REQUEST['password'];
$gR=$_REQUEST['gender'];
$aYear=$_REQUEST['academicYear'];
$epwd=$_REQUEST['email'];
$pN=$_REQUEST['phone'];


?>

<table border="1"">
<tr>

<td>First Name</td>
<td><?php echo $fName ?></td>
</tr>

<td>Last Name</td>
<td><?php echo $lName ?></td>
</tr>

<td>User Name</td>
<td><?php echo $uName ?></td>
</tr>

<td>Password</td>
<td><?php echo $pwd ?></td>
</tr>

<td>Gender</td>
<td><?php echo $gR ?></td>
</tr>

<td>Phone Number</td>
<td><?php echo $pN ?></td>



</body>
</html>