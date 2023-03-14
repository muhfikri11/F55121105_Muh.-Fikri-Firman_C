<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $username = $_POST['username'];
     $password = $_POST['password'];

     if ($username === 'admin' && $password === '12345') {
          
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header('Location: utama.php');
          exit;
     } else {
          
          $error = "Username atau password salah";
     }
}
?>

<!DOCTYPE html>
<html>
<head>
     <title>Login</title>
     <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <?php if (isset($error)): ?>
          <p><?php echo $error; ?></p>
     <?php endif; ?>

     <form action="formlogin.php" method="post">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username"><br><br>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password"><br><br>
          <input type="submit" value="Login">
     </form>
</body>
</html>
