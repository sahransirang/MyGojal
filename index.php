<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyGojal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="youth.php">Youth</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>

      <li data-target="#myCarousel" data-slide-to="2"></li>

      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://concordia-expeditions.com/wp-content/uploads/2011/12/Borith-Lake-Gulmit-Gojal.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Borit lake</h3>
          <p style="background-color:black">
            The first valley of gojal with rich culture and eduation.
            Most of the population speaks brushki and amzing thing about rest of the waki
            speaker is that they also speak brushki at their homes
          </p>

        </div>
      </div>

      <div class="item">
        <img src="http://i.dawn.com/primary/2015/06/5572b6ac768fe.jpg?r=1535145341" alt="Image">
        <div class="carousel-caption">
        <h3>Nazim abad Shishket</h3>
        <p style="border-radius:2px color solid white">
          The first valley of gojal with rich culture and eduation.
          Most of the population speaks brushki and amzing thing about rest of the waki
          speaker is that they also speak brushki at their homes
        </p>
        </div>
      </div>
      <div class="item">
        <img src="http://www.pakwheels.com/forums/attachments/ask-travel-gurus/71414d1272979360-hunza-disaster-gojal-karakoram-highway-glaciated-mother-every-epic-drive-gulmit.jpg" alt="Image">
        <div class="carousel-caption">
        <h3>Nazim abad Shishket</h3>
        <p style="border-radius:2px color solid white">
          The first valley of gojal with rich culture and eduation.
          Most of the population speaks brushki and amzing thing about rest of the waki
          speaker is that they also speak brushki at their homes
        </p>
        </div>
      </div>
      <div class="item">
        <img src="http://2.bp.blogspot.com/-e5FEtv-LMbQ/VWdWTPdXsrI/AAAAAAAAVQg/YRFgCsxfc9o/s1600/Gojal%2BPakistan%2B%25283%2529.jpg" alt="Image">
        <div class="carousel-caption">
        <h3>Nazim abad Shishket</h3>
        <p style="border-radius:2px color solid white">
          The first valley of gojal with rich culture and eduation.
          Most of the population speaks brushki and amzing thing about rest of the waki
          speaker is that they also speak brushki at their homes
        </p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <div class="col-sm-4">
    <h3>Navigation contant</h3>
  </div>
  <div class="col-sm-4">
    <h3>social connection</h3>


                      <ul class="social-network social-circle">
                          <a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a>
                          <a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                          <a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                          <a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
                          <a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                      </ul>

                      </div>
  <div class="col-sm-4">
    <h2>Afflication</h2>
  </div>

</footer>

</body>
</html>
