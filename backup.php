<?php

echo "<h1>PDO demo!</h1>";

$hostname = "sql.njit.edu";
$username = "yz746";
$password = "Q5vvA0U";
try {
	    $conn = new PDO("mysql:host=$hostname;dbname=yz746",
	    $username, $password);
	    echo "Connected successfully"; 

    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
$conn = null;

?>