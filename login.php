<?php
  session_start();
  $mysqli = new mysqli("localhost", "id18719974_root", "TVShowWeb@123", "id18719974_api");
	if ($mysqli -> connect_errno) 
	{
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
    if (isset($_POST['login'])){
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $sql = "SELECT * FROM login WHERE email='$email' AND pass='$pass'";
      $result = $mysqli -> query($sql);
      $num = $result->num_rows;
      if ($num==1){
        $_SESSION['email'] = $_POST['email'];
        while($row = $result->fetch_assoc()) {
          $_SESSION['username'] = $row["username"];
        }
        echo '<script>window.alert("Login Successful");</script>';
        $email1=$_SESSION['email'];
        $sql2 = "SELECT * FROM recommend WHERE email='$email1'";
        $result2 = $mysqli -> query($sql2);
        $num2 = $result2->num_rows;
        if ($num2==1){
          $row = $result2 -> fetch_row();
          if($row[3] != null && $row[3] > 6){
            $_SESSION['recse'] = $row[1];  
            echo "<script>location.href='index.php'</script>";
          }else if($row[2]!=null){
              $_SESSION['recge'] = $row[2];
            echo "<script>window.location='index.php?genre=$row[2]'</script>";
          }else if($row[4]!=null){
              $_SESSION['recge'] = $row[4];
            echo "<script>window.location='index.php?genre=$row[4]'</script>";
          }else if($row[5]!=null){
              $_SESSION['recge'] = $row[5];
            echo "<script>window.location='index.php?genre=$row[5]'</script>";
          }else{
            echo "<script>location.href='index.php'</script>";
          }  
        }else{
          echo "<script>location.href='index.php'</script>";
        }
      }
      else {
        echo '<script>alert("Account does not exits!Please create an account for TV show browsing");</script>';
        echo '<script>window.location="login.php"</script>';
      }
    }
    if (isset($_POST['signup'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $sql = "SELECT * FROM login WHERE email='$email'";
      $result = $mysqli -> query($sql);
      $num = $result->num_rows;
      if ($num==1){
        echo '<script>window.alert("Username already exists");</script>';
        echo '<script>window.location="login.php"</script>';
      }
      else {
        $_SESSION['email'] = $_POST['email'];
          $_SESSION['username'] = $_POST["username"];
        $sql1 =" INSERT INTO login VALUES ('$username', '$email', '$pass')";
        $mysqli1 = $mysqli -> query($sql1);
        echo '<script>window.alert("Sign up is successful");</script>';
        echo '<script>window.location="index.php"</script>';
      }
    }
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name = "language" content = "EN" />
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <title>TV show web</title>
  <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    * {
      box-sizing: border-box;
      font-family: "Poppins" , sans-serif;
    }

  body {
    background: url(https://media.istockphoto.com/vectors/grunge-abstract-cinema-background-vector-id119050302?k=20&m=119050302&s=612x612&w=0&h=wi2GzKL1AkNPGUHJ5QKlxdt_1wQmmnahdgUPndiuMDc=);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    margin: -20px 0 50px;
  }
  .front-image img{
      width: 100%;
      object-position: 0% 0%;
      object-fit: cover;
    }
  h1 {
    font-weight: bold;
    margin: 0;
  }

  h2 {
    text-align: center;
  }

  p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
  }

  span {
    font-size: 12px;
  }

  a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
  }

  .button {
    border-radius: 20px;
    border: 1px solid #FF4B2B;
    background-color: #FF4B2B;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
  }

  .button:active {
    transform: scale(0.95);
  }

  .button:focus {
    outline: none;
  }

  button {
    border-radius: 20px;
    border: 1px solid #FF4B2B;
    background-color: #FF4B2B;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
  }

  button:active {
    transform: scale(0.95);
  }

  button:focus {
    outline: none;
  }

  button.ghost {
    background-color: transparent;
    border-color: #FFFFFF;
  }

  form {
    background-color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
  }

  input {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
  }

  .container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
        0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
  }

  .form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
  }

  .sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
  }

  .container.right-panel-active .sign-in-container {
    transform: translateX(100%);
  }

  .sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
  }

  .container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
  }

  @keyframes show {
    0%, 49.99% {
      opacity: 0;
      z-index: 1;
    }
    
    50%, 100% {
      opacity: 1;
      z-index: 5;
    }
  }

  .overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
  }

  .container.right-panel-active .overlay-container{
    transform: translateX(-100%);
  }

  .overlay {
    background: #FF416C;
    background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
    background: linear-gradient(to right, #FF4B2B, #FF416C);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0 0;
    color: #FFFFFF;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
      transform: translateX(0);
    transition: transform 0.6s ease-in-out;
  }

  .container.right-panel-active .overlay {
      transform: translateX(50%);
  }

  .overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
  }

  .overlay-left {
    transform: translateX(-20%);
  }

  .container.right-panel-active .overlay-left {
    transform: translateX(0);
  }

  .overlay-right {
    right: 0;
    transform: translateX(0);
  }

  .container.right-panel-active .overlay-right {
    transform: translateX(20%);
  }
  </style>
</head>
<body>
<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form method="post" enctype="multipart/form-data">
      <h1>Create Account</h1>
      <input type="text" placeholder="Name" name="username" required>
      <input type="email" placeholder="Email" name="email" required>
      <input type="password" placeholder="Password" name="pass" required>
      <input type="submit" name="signup" class="button" value="SIGN UP">
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form method="post">
      <h1>Sign in</h1>
      <input type="email" placeholder="Email" name="email" required>
      <input type="password" placeholder="Password" name="pass" required><br>
      <input type="submit" name="login" class="button" value="LOG IN">
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button class="ghost" id="signIn">Log In Here</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Binge Watchers!</h1>
        <p>Enter your personal details and start browsing the TV Shows!!</p>
        <button class="ghost" id="signUp">Sign Up Here</button>
      </div>
    </div>
  </div>
</div>
<script>
  const signUpButton = document.getElementById('signUp');
  const signInButton = document.getElementById('signIn');
  const container = document.getElementById('container');

  signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
  });

  signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
  });
</script>
</body>
</html>