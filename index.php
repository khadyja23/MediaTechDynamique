<?php include ('Tinscription.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
              <img class="full-left" src="img/tl.png">

      <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="connexion-site.php"></a></li>
        <li><a href="affichage-videos.php">Videos</a></li>
         <li><a href="avis-des-internautes.php"> Vos avis</a></li>
         <li> <a href="administrateur.php"> Administrateur</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->

      </div><!-- /.container-collapse -->
  </nav>
<div id="myCarousel" class="carousel slide head-t-mar-70" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://images.pexels.com/photos/66997/pexels-photo-66997.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="caraous-title">
            <div class="col-md-12">
                <div class="col-md-6">
                    <span></span>
                    <h1>Small Effort <br> Make Big Change </h1>
                    <h3></h3>
                    <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                </div>
                <div class="col-md-6 caraous-img-box">
                   <img src="http://wpocean.com/tf/html/naima/assets/img/app/about-app.png"class="img-responsive">
                </div>
                
            </div>
        
        </div>
      </div>
    </div>
    <div class="item">
      <img src="https://images.pexels.com/photos/760681/pexels-photo-760681.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" class="img-responsive">
      <div class="container">
        <div class="caraous-title">
            <div class="col-md-12">
                <div class="col-md-6">
                    <span></span>
                    <h1>Small Effort <br> Make Big Change </h1>
                    <h3></h3>
                    <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                </div>
                <div class="col-md-6 caraous-img-box">
                   <img src="http://premiumlayers.net/demo/html/maxlaw/assets/images/slide-men.png"class="img-responsive">
                </div>
            </div>
        
        </div>
      </div>
    </div>
    <div class="item">
      <img src="https://images.pexels.com/photos/763771/pexels-photo-763771.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" class="img-responsive">
      <div class="container">
        <div class="caraous-title">
            <div class="col-md-12">
                <div class="col-md-6">
                    <span>Non-Profit Organization</span>
                    <h1>Small Effort <br> Make Big Change </h1>
                    <h3>We are non-profit NGO & Charity Organization</h3>
                    <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                </div>
            </div>
        
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>  
  <!--End of carroussel-->
<!-- s'inscrireeeeeeee -->

<div class="container-fluid" style="margin-top:50px;">
  <div class="container" style="background-color: lightblue;">
      <div class="row main">
        <div class="col-md-5">
        <h1 style="margin-top: 70px;">S'inscrire</h1>
          <form method="post" action="Tinscription.php">
            
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Your Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input style="margin-top:30px;" type="text" class="form-control" name="nom" id="name"  placeholder="Enter your Name"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Your Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input style="margin-top:30px;" type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input style="margin-top:30px;" type="text" class="form-control" name="login" id="username"  placeholder="Enter your Username"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="pwd" id="pwd"  placeholder="Enter your Password"/>
                </div>S'inscrire
              </div>
            </div>


            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="Confirm" id="confirm"  placeholder="Confirm your Password"/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <input type="submit" id="btn-login" class="btn btn-primary btn-sm btn-block" value="Log in" name="inscrire">
            </div>
            
          </form>
<!-- finnnn inscription -->
        </div>
        <div style="background-color: lightblue;" class="col-md-7 full-right">
          <section id="login">
    <div class="container">
      <div class="row">
          <div class="col-xs-12" style="margin-top:150px;">
              <div>
                <h1>Log in with your email account</h1>
                    <form role="form" class="col-md-7" action="connexion-site.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input  type="email" name="email" id="email" class="form-control input-sm" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="pwd" id="key" class="form-control input-sm" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-primary btn-sm btn-block" value="Log in" name="connect">
                    </form>
                  
                    <hr>
              </div>
        </div> <!-- /.col-xs-12 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
        </div>
      </div>
    </div>
</div>
    
</body>
</html>
 