<?php
// connection information
$server = 'localhost';
$username = 'root';
$password = 'password';
$database = 'store';

$link = @mysqli_connect($localhost, $username, $password, $database);

if (!$link) {
    die('Error Connecting: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?>
