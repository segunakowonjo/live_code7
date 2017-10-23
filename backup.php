<?php

echo "<h1>PDO demo!</h1>";

$hostname = "sql2.njit.edu";
$username = "ssa39";
$password = "PWiV2bts";
try {
	    $conn = new PDO("mysql:host=$hostname;dbname=ssa39",
	    $username, $password);
	    echo "Connected successfully<br>"; 
	    $sql = "select id, email from accounts";
	    $q = $conn->prepare($sql);
	    $q->execute();
	    $results = $q->fetchAll();
	    

	    if($q->rowCount()){


	    	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th></tr>";
	    	foreach ($results as $row) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td></tr>";
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