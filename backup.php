<?php

echo "<h1>PDO demo!</h1>";

$hostname = "sql2.njit.edu";
$username = "ssa39";
$password = "PWiV2bts";
try {
	    $conn = new PDO("mysql:host=$hostname;dbname=ssa39",
	    $username, $password);
	    echo "Connected successfully<br>"; 
	    $sql = "select * from accounts where id < 6";
	    $q = $conn->prepare($sql);
	    $q->execute();
	    $results = $q->fetchAll();
	    

	    if($q->rowCount()){
	    	echo count($results);


	    	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Birthday</th><th>Gender</th><th>Pass</th></tr>";
	    	foreach ($results as $row) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["phone"]."</td><td>".$row["birthday"]."</td><td>".$row["gender"]."</td><td>".$row["password"]."</td></tr>";
    		}
	    }else{
	    	echo '0 results';
	    } 

    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
$conn = null;

?>