<?php
  session_start();
?>

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
	<title>TV shows web</title>
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
    .front-image img{
      width: 100%;
      height: 380px;
      object-position: 0% 93%;
      object-fit: cover;
    }
    .movie-heading p{
      padding-left: 70px;
      font-size: 30px;
      font-weight: bold;    
      text-transform: uppercase;
    }
    #gridview {
      text-align: center;
    }
    div.image {
      margin-left: 25px;
      margin-bottom: 15px;
      display: inline-block;
      position: relative;
    }

    div.image img {
      width: auto;
      height: auto;
      border: 1px solid #ccc;
    }

    div.image img:hover {
      box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.32), 0 0 0 0px
          rgba(0, 0, 0, 0.16);
    }

    .heading {
      padding: 10px 10px;
      margin-bottom: 10px;
      font-size: 1.2em;
    }

    #grid {
      margin-bottom: 30px;
    }

    .product-info {
      position: absolute;
      bottom: 4px;
      left: 0;
      right: -1px;
      padding: 15% .75rem .75rem .75rem;
      background-color: transparent;
      background-image: -webkit-linear-gradient(transparent,rgba(0,0,0,0.8));
      background-image: linear-gradient(transparent,rgba(0,0,0,0.8));
      background-position-y: -1px;
      color: #FFF;
      text-align: left;
    }

    div.image ul {
      margin: 0;
      padding: 0;
    }

    div.image li {
      cursor: pointer;
      list-style-type: none;
      display: inline-block;
      color: #F0F0F0;
      text-shadow: 0 0 1px #666666;
      font-size: 10px;
    }

    div.image .selected {
      color: #ffdb7f;
      text-shadow: 0 0 5px #fdc42c;
    }

    .product-title {
      font-size: 1.1em;
    }

    .product-category {
      margin-top: 10px;
      font-size: 0.6em;
      text-transform: uppercase;
      color: #c4c4c5;
      border-left: #c4c4c5 3px solid;
      padding: 0px 5px 0px 5px;
    }

    div.image .product-info img {
      width: 30px;
      height: auto;
      border: none;
    }
    .star span{
      margin-bottom: 200px;
    }
    .image img:hover{
      transform: scale(1.05); 
    }

    @media screen and (min-width: 1224px) {
        div.image {
          width: 240px;
        }
    }

    @media screen and (min-width: 1044px) and (max-width: 1224px) {
        div.image {
          width: 250px;
        }
    }

    @media screen and (min-width: 845px) and (max-width: 1044px) {
        div.image {
          width: 200px;
        }
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
    a:hover{
      text-decoration: none;
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
    <!--TVShowWeb@123-->
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
              if (isset($_SESSION['recge'])){
                  $genre=$_SESSION['recge'];
              ?>
                <a href="index.php?reset=0&genre=<?php echo $genre; ?>" class="nav-item nav-link">Recommended</a>
               <?php
               }else if(isset($_SESSION['recse'])){
                   $search =$_SESSION['recse'];
                   ?>
                <a href="index.php?reset=0&search=<?php echo $search; ?>" class="nav-item nav-link">Recommended</a>
               <?php
               }else{
                   ?>
                   <a href="index.php?reset=0" class="nav-item nav-link">Recommended</a>
              <?php 
               }
           }?><div class="nav-item dropdown">
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
        $mysqli = new mysqli("localhost", "id18719974_root", "TVShowWeb@123", "id18719974_api");
        if ($mysqli -> connect_errno) 
        {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
          exit();
        }
        $api=file_get_contents('https://api.tvmaze.com/shows', false,stream_context_create($arrContextOptions));
        $data_e = json_decode($api);
        if(isset($_SESSION['email'])){
          $email=$_SESSION['email'];
          $sql = "SELECT * FROM recommend WHERE email='$email'";
          $result = $mysqli -> query($sql);
          $num = $result->num_rows;
          if ($num==1){
            $row = $result -> fetch_row();
            if($row[3]!=null && $row[3] > 6){
              $api=file_get_contents("https://api.tvmaze.com/search/shows?q=$row[1]", false,stream_context_create($arrContextOptions));
              $data_e6 = json_decode($api);
              $search = true;  
            }else{
              $api=file_get_contents('https://api.tvmaze.com/shows', false,stream_context_create($arrContextOptions));
              $data_e = json_decode($api);
              $search = false;
            }  
          }else{
            $api=file_get_contents('https://api.tvmaze.com/shows', false,stream_context_create($arrContextOptions));
            $data_e = json_decode($api);
            $search = false;  
          }
        }else{
            $api=file_get_contents('https://api.tvmaze.com/shows', false,stream_context_create($arrContextOptions));
            $data_e = json_decode($api);
            $search = false;  
        }
        ?>
          <div class="movie-heading">
          <?php
          if(isset($_SESSION['email']) && (!isset($_GET['reset']) || (isset($_GET['reset']) && $_GET['reset'] ==0))){
            ?><br><br><p>Recommended TV Shows</p>
          <?php
        }else{?>
            <br><br><p>TV SHOWS</p>
          <?php }?>
          </div>
          <?php
          if(isset($_GET['search'])){
              $search= $_GET['search'];
              $api1=file_get_contents("https://api.tvmaze.com/search/shows?q=$search",false,stream_context_create($arrContextOptions));
              $data_e7 = json_decode($api1);
             if(count($data_e7)>0){
                foreach($data_e7 as $item){
                  ?>
                  <div class="image">
                  <a href="show.php?id=<?php echo $item->show->id;?>"><img src="<?php  echo $item->show->image->medium;  ?>"></a>
                  <div class="product-info">
                      <?php echo $item->show->name; echo "  ";?>
                      <div class="star">
                        <i class="fa fa-star fa-lg "></i>
                        <span><?php echo  $item->show->rating->average; ?></span>
                      </div>
                      <div class="product-category">
                        <?php 
                        foreach($item->show->genres as $genere){
                            echo $genere;
                            echo " / ";
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <?php 
                }
              }else{
                echo "<div style='text-align:center'>No Results Found For Your Search!!!</div>";
              }
          }
          else if(isset($_GET['reset']) && $_GET['reset'] == 1 ){
            foreach($data_e as $item){
                ?>
                <div class="image">
                <a href="show.php?id=<?php echo $item->id;?>"><img src="<?php  echo $item->image->medium;  ?>"></a>
                <div class="product-info">
                    <?php echo $item->name; echo "  ";?>
                    <div class="star">
                      <i class="fa fa-star fa-lg "></i>
                      <span><?php echo  $item->rating->average; ?></span>
                    </div>
                      <div class="product-category">
                      <?php 
                      foreach($item->genres as $genere){
                          echo $genere;
                          echo " / ";
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <?php 
              }
            }
            else if(isset($_GET['reset']) && $_GET['reset'] == 2 ){
              $email=$_SESSION['email'];
              $sql = "DELETE FROM recommend WHERE email='$email'";
              $result = $mysqli -> query($sql);
              if ($result){
                  unset($_SESSION['recge']);
                  unset($_SESSION['recse']);
                  $_SESSION['recge'] = null;
                  $_SESSION['recse'] = null;
                echo '<script>window.alert("Cleared TV Shows Recommendations");</script>';
              }else{
                echo '<script>window.alert("Try Again After Sometime");</script>';
              }
              $api=file_get_contents('https://api.tvmaze.com/shows', false,stream_context_create($arrContextOptions));
              $data_e = json_decode($api);
              $search = false;
              foreach($data_e as $item){
                  ?>
                  <div class="image">
                  <a href="show.php?id=<?php echo $item->id;?>"><img src="<?php  echo $item->image->medium;  ?>"></a>
                  <div class="product-info">
                      <?php echo $item->name; echo "  ";?>
                      <div class="star">
                        <i class="fa fa-star fa-lg "></i>
                        <span><?php echo  $item->rating->average; ?></span>
                      </div>
                        <div class="product-category">
                        <?php 
                        foreach($item->genres as $genere){
                            echo $genere;
                            echo " / ";
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <?php 
                }
              }
          else if (isset($_GET['genre'])){
            if(isset($_SESSION['email'])){
              $email=$_SESSION['email'];
              $sql = "SELECT * FROM recommend WHERE email='$email'";
              $result = $mysqli -> query($sql);
              $num = $result->num_rows;
              if ($num==1){
                $genre= $_GET['genre'];
                $sql1 =" UPDATE recommend SET genre = '$genre' WHERE email ='$email'";
                $mysqli1 = $mysqli -> query($sql1);
              }else{
                $genre= $_GET['genre'];
                $sql1 =" INSERT INTO recommend VALUES ('$email', null,'$genre',null,null,null)";
                $mysqli1 = $mysqli -> query($sql1);
              }
            }
            foreach($data_e as $item){
              if (in_array($_GET['genre'], $item->genres))
              {
                ?>
                <div class="image">
                <a href="show.php?id=<?php echo $item->id;?>"><img src="<?php  echo $item->image->medium;  ?>"></a>
                <div class="product-info">
                    <?php echo $item->name; echo "  ";?>
                    <div class="star">
                      <i class="fa fa-star fa-lg "></i>
                      <span><?php echo  $item->rating->average; ?></span>
                    </div>
                      <div class="product-category">
                      <?php 
                      foreach($item->genres as $genere){
                          echo $genere;
                          echo " / ";
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <?php 
              }
            }
          }
          else if (isset($_POST['submit'])){
              $search= $_POST['search'];
              $api1=file_get_contents("https://api.tvmaze.com/search/shows?q=$search",false,stream_context_create($arrContextOptions));
              $data_e1 = json_decode($api1);
              if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $sql = "SELECT * FROM recommend WHERE email='$email'";
                $result = $mysqli -> query($sql);
                $num = $result->num_rows;
                if ($num==1){
                  $count =count($data_e1);
                  $sql1 =" UPDATE recommend SET search = '$search',searchCount = '$count' WHERE email ='$email'";
                  $mysqli1 = $mysqli -> query($sql1);
                }else{
                    $count =count($data_e1);
                  $sql1 =" INSERT INTO recommend VALUES ('$email','$search',null,'$count',null,null)";
                  $mysqli1 = $mysqli -> query($sql1);
                }
              }
              if(count($data_e1)>0){
                foreach($data_e1 as $item){
                  ?>
                  <div class="image">
                  <a href="show.php?id=<?php echo $item->show->id;?>"><img src="<?php  echo $item->show->image->medium;  ?>"></a>
                  <div class="product-info">
                      <?php echo $item->show->name; echo "  ";?>
                      <div class="star">
                        <i class="fa fa-star fa-lg "></i>
                        <span><?php echo  $item->show->rating->average; ?></span>
                      </div>
                      <div class="product-category">
                        <?php 
                        foreach($item->show->genres as $genere){
                            echo $genere;
                            echo " / ";
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <?php 
                }
              }else{
                echo "<div style='text-align:center'>No Results Found For Your Search!!!</div>";
              }
          }
          else if($search == true){
            foreach($data_e6 as $item){
              ?>
              <div class="image">
              <a href="show.php?id=<?php echo $item->show->id;?>"><img src="<?php  echo $item->show->image->medium;  ?>"></a>
              <div class="product-info">
                  <?php echo $item->show->name; echo "  ";?>
                  <div class="star">
                    <i class="fa fa-star fa-lg "></i>
                    <span><?php echo  $item->show->rating->average; ?></span>
                  </div>
                  <div class="product-category">
                    <?php 
                    foreach($item->show->genres as $genere){
                        echo $genere;
                        echo " / ";
                    }
                    ?>
                  </div>
                </div>
              </div>
              <?php 
            }
          }
          else{
            foreach($data_e as $item){
              ?>
              <div class="image">
                <a href="show.php?id=<?php echo $item->id;?>"><img src="<?php  echo $item->image->medium;  ?>"></a>
                <div class="product-info">
                  <?php echo $item->name; echo "  ";?>
                  <div class="star">
                    <i class="fa fa-star fa-lg "></i>
                    <span><?php echo  $item->rating->average; ?></span>
                  </div>
                  <div class="product-category">
                    <?php 
                    foreach($item->genres as $genere){
                        echo $genere;
                        echo " / ";
                    }
                    ?>
                  </div>
                </div>
              </div>
              <?php 
            }
          }
    ?>
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