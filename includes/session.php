<?php

	// Include the database connection script
	require 'database-connection.php';

	session_start();										 // Start/renew session

	$logged_in = $_SESSION['logged_in'] ?? false; 		    // Is user logged in?


	function login($username)          					  // Remember user passed login
	{
    	// session_regenerate_id(true); 					 // Update session id
	    $_SESSION['logged_in'] = true; 					// Set logged_in key to true
	    $_SESSION['username'] = $username;		       // Set username key to one from form 
	}

	function authenticate($pdo, $username, $password) {
	    $sql = "SELECT username, password
	            FROM login_info
	            WHERE username = :username AND password = :password";

	    $user = pdo($pdo, $sql, ['username' => $username, 'password' => $password])->fetch();

	    return $user;
  	}

	function require_login($logged_in)
	{
	    if ($logged_in == false) { 
	        header('Location: login.php'); 
	        exit;    
	    }
	}

	function logout()     
	{
	    $_SESSION = [];

	    $params = session_get_cookie_params();
	    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'],
	        $params['secure'], $params['httponly']);

	    session_destroy();
	}

?>