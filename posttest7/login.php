<?php 
  session_start();
  require 'connect.php';
  if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
  }
  if(isset($_POST['login'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

      if(mysqli_num_rows($result) === 1){
          $row = mysqli_fetch_assoc($result);
          if(password_verify($password, $row['password'])){
              $_SESSION['login'] = $row["username"];
              $_SESSION['priv'] = $row["priv"];
              if($_SESSION['priv'] == "admin"){
                  header("Location: tampiladmin.php");
              }
              else{header("Location: index.php");}
              exit;
          }
      }
      $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="bravo-logo.png">
    <title>RIPCORD | Perlengkapan Komputer & Accesories</title>
</head>

<body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text"  name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="login">
        <div class="signup_link">
          Not a member? <a href="regist.php">Signup</a>
        </div>
      </form>
    </div>
</body>

</html>