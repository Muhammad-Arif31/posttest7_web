<?php 
    require 'connect.php';
    if(isset($_POST['register'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $cpass = $_POST['cpass'];
      if($password === $cpass){
          $password = password_hash($password, PASSWORD_DEFAULT);
          $result = mysqli_query($conn, "SELECT username from user WHERE username = '$username'");
          if(mysqli_fetch_assoc($result)){
              echo "
                  <script>
                      alert('Username Telah digunakan Tuan >_<');
                      document.location.href = 'regist.php';
                  </script>";
          }
          else{
              $sql = "INSERT INTO user VALUES ('','$username','$password','user')";
              $result = mysqli_query($conn, $sql);

              if(mysqli_affected_rows($conn) > 0){
                  echo "
                      <script>
                          alert('Registrasi Berhasil Tuan >_<');
                          document.location.href = 'login.php';
                      </script>";
              }else{
                  echo "
                      <script>
                          alert('Registrasi Gagal Berhasil Tuan >_<');
                          document.location.href = 'regist.php';
                      </script>";
              }
          }
      }
      else{
          echo "
              <script>
                  alert('Password tidak sama Tuan >_<');
                  document.location.href = 'regist.php';
              </script>";
      }
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
      <h1>Register</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="cpass" required>
          <span></span>
          <label>Konfirmasi Password</label>
        </div>
        <input type="submit" value="Register" name="register">
      </form>
    </div>

</body>

</html>