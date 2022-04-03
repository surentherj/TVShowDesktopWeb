<?php
  session_start();
  $mov_id=$_GET['id'];
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <title>TV show web</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      font-family: "Poppins" , sans-serif;
    }
    body{
      background: #eeeeee;
    }
    .navbar {
	font-size: 14px;
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #d6d6d6;
	box-shadow: 0 0 4px rgba(0,0,0,.1);		
}
.navbar .navbar-brand {
	color: #555;
	padding-left: 0;
	font-size: 20px;
	padding-right: 50px;
	font-family: 'Raleway', sans-serif;
	text-transform: uppercase;
}
.navbar .navbar-brand b {
	color: #f04f01;
}
.navbar .navbar-nav a {
	font-size: 96%;
	font-weight: bold;		
	text-transform: uppercase;
}
.navbar .navbar-nav a.active {
	color: #f04f01 !important;
	background: transparent !important;
}
.search-box input.form-control, .search-box .btn {
	font-size: 14px;
	border-radius: 2px !important;
}
.search-box .input-group-append {
	padding-left: 4px;		
}
.search-box input.form-control:focus {
	border-color: #f04f01;
	box-shadow: 0 0 8px rgba(240,79,1,0.2);
}
.search-box .btn-danger, .search-box .btn-danger:active {
	font-weight: bold;
	background: #f04f01 !important;
	border-color: #f04f01;
	text-transform: uppercase;
	min-width: 90px;
}
.search-box .btn-danger:hover, .search-box .btn-danger:focus {
	background: #eb4e01 !important;
	box-shadow: 0 0 8px rgba(240,79,1,0.2);
}
.search-box .btn span {
	transform: scale(0.9);
	display: inline-block;
}
.navbar .nav-item.open > a {
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a, .navbar .dropdown-menu a:active {
	color: #777;
	padding: 8px 20px;
	font-size: 13px;
  	background: #fff;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {
	color: #333;
  	background: #f8f9fa;
}
@media (min-width: 992px){
	.form-inline .input-group .form-control {
		width: 225px;			
	}
}
@media (max-width: 992px){
	.form-inline {
		display: block;
	}
}

    #gridview {
      text-align: center;
    }
    div.image {
      margin-left: 60px;
      margin-bottom: 15px;
      display: inline-block;
      position: relative;
    }

    div.image img {
      float: left;
      width: 150px;
      height: 200px;
      border: 1px solid #ccc;
    }
    div.image a{
      font-size: 19px;
      font-weight: 350;
    }
    div .image p{
      font-weight: 20px;
      font-size: 20px;
      float: right;
      width: 150px;
      height: 200px;
    }
    div.image span{
      font-size: 19px;
      font-weight: 350;
    }
    .front-image img{
      width: 100%;
      height: 500px;
      object-position: 0% 0%;
      object-fit: cover;
    }
    .movie-info{
      margin: 0px 70px 0px 70px;
    }
    .movie-left{
      float: left;
      width: 70%;
    }
    .movie-name p{
      font-size: 50px;
    }
    .movie-name p1{
      font-size: 20px;
    }
    .movie-genre{
      font-size: 20px;
      margin-top: -20px;
    }
    .rating p{
      float: left;
    }
    .rating p2{
      font-size: 25px;
    }
    .rating p1{
      font-size: 23px;
    }
    .movie-right{
      float: right;
      width: 30%;
      margin-top: 20px;
      padding-left: 200px;
    }
    .runtime p p2{
      font-size: 20px;
      font-weight: bold;
    }
    .runtime p1{
      font-size: 20px;
    }
    .poster{
      width: 60%;
      float: left;
    }
    .poster img{
      float: left;
      margin-right: 30px;
      width: 300px;
      height: 428px;
    }
    .director p{
      font-size: 18px;
      font-weight: bold;
    }
    .dir-name{
      margin-top: -10px;
    }
    .cast-heading{
      margin-top: 13px;
    }
    .youtube{
      float: right;
      width: 40%;
    }
    .youtube-video iframe{
      margin-top: 30px;
      margin-left: 40px;
    }
    .button {
      background-color: #f04f01;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      width: 100%;
    }
    .sample-images img{
      width: 200px;
    }
    .movie-images p{
      font-size: 25px;
      font-weight: bold;
      margin-left: 25px;
    }
    .movie-images p1{
      font-size: 25px;
      font-weight: bold;
     text-align: center;
    }
    .previous{
      margin-left: 25px;
      width: 50%;
    }
    .previous .heading p{
      font-size: 25px;
      font-weight: bold;
    }
    .previous p1{
      font-size: 20px;
    }
    .previous p2{
      font-size: 20px;
      font-weight: bolder;
    }
    .pre-image{
      width: 40%;
    }
    .pre-image img{
      margin: 30px;
      width: 400px;
      height: 270px;
    }
    .review p{
      font-size: 25px;
      font-weight: bold;
      margin-left: 25px;
    }
    .hidden-review p{
      font-size: 25px;
      font-weight: bold;
      text-align: center;
    }
    .review-box{
      border: none;
      padding: 10px;
    }
    .username p1{
      font-size: 22px;
      color: #f04f01;;
      font-weight: bold;
    }
    .username p3{
      font-size: 13px;
    }
    .review p2{
      margin-left: 50px;
      font-size: 17px;
      overflow-wrap: break-word;
    }
    .delete-button{
      border: 1px solid #f04f01;
      margin-left: 1100px;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 18px;
      color: white;
    }
    .review-button{
      border: 1px solid #f04f01;
      margin-left: 1040px;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 18px;
      color: white;
      padding: 8px;
    }
    .form-popup {
      margin-left: 350px;
      width: 550px;
      flex-wrap: nowrap;
      border: none;
      border-radius: 10px;
    }

    .form-container {
      border-radius: 10px;
      max-width: 550px;
      padding: 10px;
      background-color: white;
    }

    .form-container1 .btn {
      margin-left: 25px;
      border: 1px solid #f04f01;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 20px;
      color: white;
      padding: 8px;
      cursor: pointer;
      opacity: 0.8;
    }

    .review-written{
      width: 100%;
      height: 150px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    .form-container .btn {
      margin-left: 440px;
      margin-top: -70px;
      border: 1px solid #f04f01;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 20px;
      color: white;
      padding: 8px;
      cursor: pointer;
      opacity: 0.8;
    }

    .form-container .btn1 {
      margin-top: 1px;
      text-align: center;
      width: 90px;
      border: 1px solid #f04f01;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 20px;
      color: white;
      padding: 8px;
      cursor: pointer;
      opacity: 0.8;
    }

    .form-container .btn1:hover, .open-button:hover {
      opacity: 1;
    }

    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    }

    .rate {
        float: left;
        height: 46px;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        margin-left: 5px;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:35px;
        color:#ccc;
    }
    .rate:not(:checked) > label:before {
        content: '★  ';
    }
    .rate > input:checked ~ label {
        color: #ffc700;    
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;  
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }
    .footer-clean {
      padding:50px 0;
      background-color:#fff;
      color:#4b4c4d;
    }

    .footer-clean h3 {
      margin-top:0;
      margin-bottom:12px;
      font-weight:bold;
      font-size:16px;
    }

    .footer-clean ul {
      padding:0;
      list-style:none;
      line-height:1.6;
      font-size:14px;
      margin-bottom:0;
    }

    .footer-clean ul a {
      color:inherit;
      text-decoration:none;
      opacity:0.8;
    }

    a:hover{
      text-decoration: none;
    }

    .footer-clean ul a:hover {
      opacity:1;
    }

    .footer-clean .item.social {
      text-align:right;
    }

    @media (max-width:767px) {
      .footer-clean .item {
        text-align:center;
        padding-bottom:20px;
      }
    }

    @media (max-width: 768px) {
      .footer-clean .item.social {
        text-align:center;
      }
    }

    .footer-clean .item.social > a {
      font-size:24px;
      width:40px;
      height:40px;
      line-height:40px;
      display:inline-block;
      text-align:center;
      border-radius:50%;
      border:1px solid #ccc;
      margin-left:10px;
      margin-top:22px;
      color:inherit;
      opacity:0.75;
    }

    .footer-clean .item.social > a:hover {
      opacity:0.9;
    }

    @media (max-width:991px) {
      .footer-clean .item.social > a {
        margin-top:40px;
      }
    }

    @media (max-width:767px) {
      .footer-clean .item.social > a {
        margin-top:10px;
      }
    }

    .footer-clean .copyright {
      margin-top:14px;
      margin-bottom:0;
      font-size:13px;
      opacity:0.6;
    }

    .avatar img{
      width: 50px;
      height: 50px;
      border-radius: 5px;
      position: relative;
      display: inline-block;
    }
    .avatar .tooltiptext {
      visibility: hidden;
      width: 120px;
      font-size: 18px;
      background-color: white;
      color: black;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      top: 75px;
      right: 10px;
    }

    .avatar:hover .tooltiptext {
      visibility: visible;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light">
     <a href="index.php" class="navbar-brand"><i class="fa fa-film" aria-hidden="true"></i> TV<b>Shows</b></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
      <div class="navbar-nav">
        <a href="index.php?reset=1" class="nav-item nav-link">Home</a>
        <?php
            if (isset($_SESSION['email'])){
              ?>
        <a href="index.php?reset=0" class="nav-item nav-link">Recommended</a>
           <?php }?><div class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Genre</a>
            <div class="dropdown-menu">					      
            <a href="index.php?genre=Action" class="dropdown-item">Action</a>
            <a href="index.php?genre=Thriller" class="dropdown-item">Thriller</a>
            <a href="index.php?genre=Drama" class="dropdown-item">Drama</a>
            <a href="index.php?genre=Science-Fiction" class="dropdown-item">Science-Fiction</a>
            <a href="index.php?genre=Horror" class="dropdown-item">Horror</a>
            <a href="index.php?genre=Crime" class="dropdown-item">Crime</a>
            <a href="index.php?genre=Adventure" class="dropdown-item">Adventure</a>
            <a href="index.php?genre=Romance" class="dropdown-item">Romance</a>
            <a href="index.php?genre=Mystery" class="dropdown-item">Mystery</a>
            <a href="index.php?genre=Fantasy" class="dropdown-item">Fantasy</a>
            <a href="index.php?genre=Supernatural" class="dropdown-item">Supernatural</a>
          </div>
        </div>
        <a href="https://www.tvmaze.com/" class="nav-item nav-link">More Info</a>
        <a href="contact.php" class="nav-item nav-link">Contact</a>
        <?php
            
            if (isset($_SESSION['email'])){
              ?>
               <a href="index.php?reset=2" class="nav-item nav-link">Clear Recommends</a>
              <a href="logout.php" class="nav-item nav-link">Log out</a>
              <?php
            }
            if (!isset($_SESSION['email'])){
              ?>
              <a href="login.php" class="nav-item nav-link">Log In</a>
              <?php
            }
          
        ?>
      </div>
      <form class="navbar-form form-inline ml-auto" method="post" action="index.php">
        <div class="input-group search-box">
          <input type="text" class="form-control" placeholder="Search....." name="search">
          <div class="input-group-append">
            <button type="submit" class="btn btn-danger" name="submit" value="submit"><span>Search</span></button>
          </div>
        </div>
      </form>
      <div class="navbar-nav">
        <?php
            if (isset($_SESSION['email'])){
              $email = $_SESSION['email'];
              $username = $_SESSION['username'];
              if ($email){
                ?>
                <a class="avatar">&#160;&#160;&#160;<img src="https://spng.pngfind.com/pngs/s/5-52097_avatar-png-pic-vector-avatar-icon-png-transparent.png"><span class="tooltiptext"><?php echo $username; ?></span></a>
                <?php
              }
              ?>
              <?php
            }
        ?>
      </div>
    
    </div>
  </nav>

  <?php
  $arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
    ); 
    $str = $_GET['id'];
    $api1=file_get_contents("https://api.tvmaze.com/shows/$str", false, stream_context_create($arrContextOptions));
    $data_e1 = json_decode($api1);
    $api2=file_get_contents("https://api.tvmaze.com/shows/$str/images",false, stream_context_create($arrContextOptions));
   $data_e2 = json_decode($api2);
    $api3=file_get_contents("https://api.tvmaze.com/shows/$str/cast", false, stream_context_create($arrContextOptions));
   $data_e3 = json_decode($api3);
    if($data_e1->_links->previousepisode->href){
      $url=$data_e1->_links->previousepisode->href;
      $api4=file_get_contents("$url",false, stream_context_create($arrContextOptions));
      $data_e4 = json_decode($api4);
    }
        $mysqli = new mysqli("localhost", "id18719974_root", "TVShowWeb@123", "id18719974_api");
        if ($mysqli -> connect_errno) 
        {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
          exit();
        }
        if(isset($_SESSION['email'])){
          $email=$_SESSION['email'];
          $sql = "SELECT * FROM recommend WHERE email='$email'";
          $result = $mysqli -> query($sql);
          $num = $result->num_rows;
          if ($num==1){
            $genere =$data_e1->genres; 
            $genre1= $genere[0];
            $genre2= $genere[1];$sql1 =" UPDATE recommend SET genre1 = '$genre1',genre2='$genre2' WHERE email ='$email'";
            $mysqli1 = $mysqli -> query($sql1);
          }else{
            $genere =$data_e1->genres; 
            $genre1= $genere[0];
            $genre2= $genere[1];
            $sql1 =" INSERT INTO recommend VALUES ('$email', null,null,null,'genre1','genre2')";
            $mysqli1 = $mysqli -> query($sql1);
          }
        }
    ?>
    <div class="front-image">
      <img src="<?php 
      if($data_e2[1]){
        echo $data_e2[1]->resolutions->original->url;
      }else{
        echo $data_e2[0]->resolutions->original->url;
      } ?>">
    </div>
    <div class="movie-info">
      <div class="movie-left">
        <div class="movie-name" style="margin-bottom: 25px;">
          <p><?php echo $data_e1->name;?>                     <p1>(<?php echo $data_e1->language;?>)</p1></p>
        </div>
        <div class="movie-genre" style="margin-bottom: 20px;">
        <?php
        foreach($data_e1->genres as $genere){
          echo $genere;  
          echo " / ";
        }
        ?>
        </div>
        <div class="rating">
          <p>
            <p2>&#11088;</p2>            
            Ratings : <p1><?php echo $data_e1->rating->average; ?>(<?php echo $data_e1->weight; ?> votes)</p1> 
          </p>
        </div>
      </div>
      <div class="movie-right">
        <div class="runtime">
          <p><p2>RUNNING TIME : </p2><p1><?php echo $data_e1->runtime; ?> mins</p1></p>
        </div>
        <div class="runtime">
          <p><p2>RELEASE DATE : </p2><p1><?php echo $data_e1->premiered; ?></p1></p>
        </div>
      </div>
      <br><br><br><br><br><br><br><hr>
      <div class="poster">
        <img src="<?php echo $data_e1->image->original; ?>">
        <div class="director">
          <p>PLOT</p>
        </div>
        <div style="font-weight: 400;">
            <?php echo $data_e1->summary; ?>
        </div>  
      </div>
      <div class="youtube">
        <section style="margin-left: 70px;margin-top:auto;" >
            <section >
              <h3 style="font-weight: 300;">SHOW INFO</h3>
              <div style="margin-bottom: 5px;">
                <strong>Web channel: </strong>  <a href="#">TVInfo+</a>                        
                <span>(2022 now)</span>
              </div>
              <div style="margin-bottom: 5px;">
                <strong>Schedule:</strong> Thursdays(~ <?php echo $data_e1->averageRuntime; ?> min)
              </div>
              <div style="margin-bottom: 5px;">
                <strong>Status:</strong> <?php echo $data_e1->status; ?></div>
                <div style="margin-bottom: 5px;">
                  <strong>Show Type: </strong> <?php echo $data_e1->type; ?>
                </div>
                <div style="margin-bottom: 5px;">
                  <strong>Episodes ordered:</strong> <a>10 episodes</a>                    </div>
                  <div style="margin-bottom: 5px;">
                    <strong>Created by:</strong>
                    <span class="divider">
                      <span><a href="#" >TVInfoPersonA </a></span>
                      <span><a href="#">TVInfoPersonB </a></span>
                    </span>
                  </div>
                  <p>
                    <strong>Official site:</strong> <a href="#" rel="noopener" target="_blank"><?php echo $data_e1->officialSite; ?></a>                </p>
                    <p>
                  </section>
                  <button class="button">Watch on TVInfo Prime</button>
                  </section>
                </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
      <?php
        if($data_e1->_links->previousepisode->href){
          ?>
          <div style="height: 400px">
          <div class="previous" style="float: left;">
            <div class="heading">
              <p>PREVIOUS EPISODE: </p>
            </div>
            <p1><p2>Name &nbsp;: &nbsp;</p2><?php echo $data_e4->name; ?></p1><br>
            <p1><p2>Season &nbsp;: &nbsp;</p2><?php echo $data_e4->season; ?></p1><br>
            <p1><p2>Episode &nbsp;: &nbsp;</p2><?php echo $data_e4->number; ?></p1><br>
            <p1><p2>Release Date &nbsp;: &nbsp;</p2><?php echo $data_e4->airdate; ?></p1><br>
            <p1><p2>Summary &nbsp;: &nbsp;</p2><?php echo $data_e4->summary; ?></p1><br>
          </div>
          <div class="pre-image" style="float: right;">
            <img src="<?php echo $data_e4->image->original; ?>">
          </div>
          </div>
          <?php
        }
      ?>
      <hr>
      <div class="movie-images">
      <p1>CAST</p1>
        <br><br>
            <?php
            foreach($data_e3 as $item){
              ?>
              <div class="image">
                <img src="<?php echo $item->person->image->medium; ?>">
                <p>
                <a href="#" ><?php echo $item->person->name; ?></a>
                  <spam> as </spam>
                  <span>'<?php echo $item->character->name; ?>'</span>
                </p>
              </div>
              <?php
            }
            ?>
      </div></div>
  <div class="footer-clean">
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-4 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li>TVInfo, the world's most popular and authoritative source for TV shows and celebrity content.</li>
            </ul>
          </div>
          <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
            <p class="copyright">TVInfo © 2022</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>