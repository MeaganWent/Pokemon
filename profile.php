<?php
	include 'includes/session.php';

	require_login($logged_in);

	$username = $_SESSION['username'];

	$sql = "SELECT username.login_info AS uname, player.name AS nametrue, 
			FROM login_info
			JOIN player ON player.Username = login_info.username 
			WHERE username = :username";

	$user = pdo($pdo, $sql, ['username' => $username])->fetch();


	// if (!isset($_SESSION['horoscope'])) {

	// 	$sql = "SELECT * 
	// 		FROM horoscope 
	// 		ORDER BY RAND() LIMIT 1";

	// 	$details = pdo($pdo, $sql)->fetch();

	// 	$_SESSION['horoscope'] = $details;
	// }

	$horoscope = $_SESSION['horoscope'];

?>

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Cosmic Horoscopes</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press Start 2P">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>

			<header>
				<div>

		      		<nav>
		      			<ul>
		      				<li><a href="index.php">Test</a></li>
				        </ul>
				    </nav>
			   	</div>

			    <div class="header-right">
			    	<ul>
			    		<li><?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="login.php">Log In</a>'; ?></li>
			    	</ul>
			    </div>
			</header>

			<div>
				<h1><?= $user['uname'] ?>'s Personal Horoscope</h1>
				<hr />
				<br />

				<div>

			    <div>
			        <div>
			            <h2><?= $user['uname'] ?></h2>
			            <p><?= $user['nametrue'] ?></p>
			        </div>

			    </div>

			    <hr />

			</div>			

			</div>

		</body>
	</html>
