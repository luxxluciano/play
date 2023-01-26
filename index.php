<?php

require_once 'dbconn.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
    $count = $stmt->rowCount();
    if($count > 0){
        // login successful
    }else{
        // login failed
        header('Location: /register.php');
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>PlayBMDS</title>
</head>
<body>
    <div class="header">
        <form method="post" class="form-inline">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
    </div>

  <div class="container">
    <div class="left-column">
      <!-- Google AdSense code goes here -->
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4477910970457919"
     crossorigin="anonymous"></script>
    </div>
    <div class="center-column">
    <iframe src="https://nogs-gl-stage.nyxmalta.com/game/?clienttype=flash&nogscurrency=USD&nogsgameid=70444&nogslang=en_us&nogsmode=demo&nogsoperatorid=241?embedded=true" frameborder="0" id="gamefileEmbed1" scrolling="no"></iframe>
    </div>
    <div class="right-column">
      <!-- Google AdSense code goes here -->
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4477910970457919"
     crossorigin="anonymous"></script>
    </div>
  </div>
  <div class="footer">
    <p>Footer</p>
  </div>



</body>
</html>