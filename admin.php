<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-light bg-danger text-center" >
  <span class="navbar-brand mb-0 text-center"><h1 style="color:white; " >Dashboard</h1></span>
</nav>
<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>

<tr>

<th>Name</th>

<th>UserName</th>

<th>Email</th>

<th>Phone</th>

<th>Password</th>

<th>Confirm Password</th>

<th>Gender</th>

</tr>

</thead>


<?php

$conn = new mysqli("localhost", "root", "", "data");

$sql = "SELECT * from `form`";


$result = mysqli_query($conn,$sql);







if (mysqli_num_rows($result) > 0) {


while($row = mysqli_fetch_assoc($result)) { ?>

<tbody>

<tr>

<th>

<?php echo $row['names']; ?>

</th>

<td>

<?php echo $row['uname']; ?>

</td>

<td>

<?php echo $row['email']; ?>

</td>

<td>

<?php echo $row['pnum']; ?>

</td>

<td>

<?php echo $row['pass']; ?>

</td>

<td>

<?php echo $row['cpass']; ?>

</td>

<td>

<?php echo $row['gen']; ?>

</td>

</tr>

</tbody>

<?php
 }
}
?>

</table> 
</body>
</html>