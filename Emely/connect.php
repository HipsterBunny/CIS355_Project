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

/*echo 'YOU ARE CONNECTED!...  using ' . mysqli_get_host_info($link) . "\n";
echo '<br><br>';

$result = $link->query("SELECT firstName, lastName, gpa, major FROM students WHERE gpa > 3");
if($result){
     // Cycle through results
    while ($row = $result->fetch_assoc()){
        printf ("%s , %s , %s (%s)\n", 
               $row["firstName"], $row["lastName"],$row["gpa"], $row["major"]); 
	echo '<br>';
    }

    // Free result set
    $result->close();
    $link->next_result();
}
mysqli_close($link);
*/
?>
