<?php

  require 'includes/session.php';


  if ($logged_in) {   
    header('Location: index.php'); 
    exit;
  }    


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $user = authenticate($pdo, $username, $password);

    if ($user) {
      login($username);                               
      header('Location: index.php');
      exit;   
    }
  }

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
      <div class="header-left">
        <div class="logo">
          <img src="imgs/logo.png" alt="URI Cosmic Horoscopes Logo">
            </div>

            <nav>
              <ul>
                <li><a href="index.php">Horoscopes</a></li>
              </ul>
          </nav>
        </div>

        <div class="header-right">
          <ul>
            <li><?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="login.php">Log In</a>'; ?></li>
          </ul>
        </div>
    </header>

    <div id="content" class="animate-bottom">
      <h1>Log In</h1>
      <hr />
      <br />
      
      <form method="POST" action="login.php">
        Username: <input type="username" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Log In">
      </form>

    </div>

  </body>
</html>


