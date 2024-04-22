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
  } else {
    $login_err = "Invalid username or password";
  }
}
?> 

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cosmic Horoscopes</title>
</head>

<body>
  <header>
    <div>
      <div>
      </div>

      <nav>
        <ul>
          <li><a href="index.php">Horoscopes</a></li>
        </ul>
      </nav>
    </div>

    <div>
      <ul>
        <li><?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="index.php">Log In</a>'; ?></li>
      </ul>
    </div>
  </header>

  <div>
    <h1>Log In</h1>
    <hr />
    <br />
    <?php if(isset($login_err)) { ?>
      <p style="color: red;"><?php echo $login_err; ?></p>
    <?php } ?>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      Username: <input type="text" name="username"><br>
      Password: <input type="password" name="password"><br>
      <input type="submit" value="Log In">
    </form>

  </div>

</body>
</html>
