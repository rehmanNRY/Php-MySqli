<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  include 'partials/_dbconnect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];
  if($password == $c_password){
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
      echo "Username already exists";
    } else {
      // hash password and save
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo "Registration successful";
      } else {
        echo "Registration failed";
      }
    }
  }else{
    echo "password and c password must be same";
  }
}





?>





<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Regitser your account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php require 'partials/_nav.php' ?>
  <div class="container">
    <h1 class="my-3">Register to your account</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
        <label for="c_password" class="form-label">Confrom Password</label>
        <input type="password" class="form-control" id="c_password" name="c_password">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>