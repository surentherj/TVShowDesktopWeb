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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>TV show web</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins" , sans-serif;
    }
    body{
      min-height: 100vh;
      width: 100%;
      background: #eeeeee;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container{
      width: 85%;
      background: #fff;
      border-radius: 6px;
      padding: 20px 60px 30px 40px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    .container .content{
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .container .content .left-side{
      width: 25%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: 15px;
      position: relative;
    }
    .content .left-side::before{
      content: '';
      position: absolute;
      height: 70%;
      width: 2px;
      right: -15px;
      top: 50%;
      transform: translateY(-50%);
      background: #afafb6;
    }
    .content .left-side .details{
      margin: 14px;
      text-align: center;
    }
    .content .left-side .details i{
      font-size: 30px;
      color: #f04f01;
      margin-bottom: 10px;
    }
    .content .left-side .details .topic{
      font-size: 18px;
      font-weight: 500;
    }
    .content .left-side .details .text-one,
    .content .left-side .details .text-two{
      font-size: 14px;
      color: #afafb6;
    }
    .container .content .right-side{
      width: 75%;
      margin-left: 75px;
    }
    .content .right-side .topic-text{
      font-size: 23px;
      font-weight: 600;
      color: #f04f01;
    }
    .right-side .input-box{
      height: 50px;
      width: 100%;
      margin: 12px 0;
    }
    .right-side .input-box input,
    .right-side .input-box textarea{
      height: 100%;
      width: 100%;
      border: none;
      outline: none;
      font-size: 16px;
      background: #F0F1F8;
      border-radius: 6px;
      padding: 0 15px;
      resize: none;
    }
    .right-side .message-box{
      min-height: 110px;
    }
    .right-side .input-box textarea{
      padding-top: 6px;
    }
    .right-side .button{
      display: inline-block;
      margin-top: 12px;
    }
    .right-side .button input[type="submit"]{
      color: #fff;
      font-size: 18px;
      outline: none;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      background: #f04f01;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .button input[type="submit"]:hover{
      background: #f04f01;
    }

    @media (max-width: 950px) {
      .container{
        width: 90%;
        padding: 30px 40px 40px 35px ;
      }
      .container .content .right-side{
       width: 75%;
       margin-left: 55px;
    }
    }
    @media (max-width: 820px) {
      .container{
        margin: 40px 0;
        height: 100%;
      }
      .container .content{
        flex-direction: column-reverse;
      }
     .container .content .left-side{
       width: 100%;
       flex-direction: row;
       margin-top: 40px;
       justify-content: center;
       flex-wrap: wrap;
     }
     .container .content .left-side::before{
       display: none;
     }
     .container .content .right-side{
       width: 100%;
       margin-left: 0;
     }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">TVshowinfo@gmail.com</div>
          <div class="text-two">info.ShowSeries@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Contact Us</div>
        <p>Please use the form below to send us a message and we'll get back to you as soon as possible.</p>
      <form method="post" action="contact.php">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="username" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" required>
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message" name="subject" required></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send Now" name="submit">
        </div>
      </form>
    </div>
    </div>
  </div>
  <?php
      $mysqli = new mysqli("localhost", "id18719974_root", "TVShowWeb@123", "id18719974_api");
      if ($mysqli -> connect_errno) 
      {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $sql = "INSERT INTO contact VALUES ('$username', '$email', '$subject')";
        $mysqli = $mysqli -> query($sql);
        echo '<script>window.alert("Thanks for contacting us :)");</script>';
        echo "<script>location.href='index.php'</script>";
      }
    ?>
</body>
</html>