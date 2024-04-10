<?php   										// Opening PHP tag
	
 	// Include the database connection script
 	//require 'includes/database-connection.php'; // comment out for now

// 	/*
// 	 * Retrieve toy information from the database based on the toy ID.
// 	 * 
// 	 * @param PDO $pdo       An instance of the PDO class.
// 	 * @param string $id     The ID of the toy to retrieve.
// 	 * @return array|null    An associative array containing the toy information, or null if no toy is found.
// 	 */
// 	function get_toy(PDO $pdo, string $id) {

// 		// SQL query to retrieve toy information based on the toy ID
// 		$sql = "SELECT * 
// 			FROM pokemon
// 			WHERE PokemonID= :id;";	// :id is a placeholder for value provided later 
// 		                               // It's a parameterized query that helps prevent SQL injection attacks and ensures safer interaction with the database.


// 		// Execute the SQL query using the pdo function and fetch the result
// 		$toy = pdo($pdo, $sql, ['PokemonID' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

// 		// Return the toy information (associative array)
// 		return $toy;
// 	}

// 	// Retrieve info about toy with ID '0001' from the db using provided PDO connection
// 	$toy1 = get_toy($pdo, '1');
	

// Closing PHP tag  ?> 

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>PokemonGo Leaderboard</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
	</head>

	<body>
    <p> Hello, this is a test </p>
    

	</body>
</html>
