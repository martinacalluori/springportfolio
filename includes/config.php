<?php
$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
  // Local database credentials
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "martipd7_idm232";
}
else {
  // Remote database credentials
  $dbhost = "localhost";
  $dbuser = "martipd7_marty";
  $dbpass = "mpc4567data";
  $dbname = "martipd7_idm232";
}

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
  );
}
function redirect_to($location)
{
  header('Location:' .$location);
  exit;
}
?>
