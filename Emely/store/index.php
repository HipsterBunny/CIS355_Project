<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HB &middot; Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- style sheets -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
  </head>
  <body>
<?php 
  #connect to database
  require ('../connect.php');
?>
    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">

<?php 
#determine which record to read from as well as the file path to all img data ( tweak? )
$id = 3;
$currentImgPath = 'assets/img/examples/';
#insert brand name in from database
$query = $link->query("SELECT brand FROM homeInfo WHERE ID = $id");
if ($query) {
  while ($row = $query->fetch_assoc()) {
    echo $row["brand"];
  }
}
?>          </a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#aboutModal" data-toggle="modal">About</a></li>
                <li><a href="#products">Products</a></li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                  </ul>
                </li>-->
                
                <li><a href="#contactModal" data-toggle="modal">Contact</a></li>
                
                <!-- this has the cart info. You will want to make the number = to session total items-->
                <li><a href="#cart"><i class="icon-shopping-cart"></i>0</a></li>
              </ul>
              <form class="navbar-form pull-right">
                <input class="span2" type="text" placeholder="Email">
                <input class="span2" type="password" placeholder="Password">
                <button type="submit" class="btn">Sign in</button>
              </form>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper --> 

    <!--modal info-->
    <div id="contactModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true" >
      <div class = "modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Contact Information</h3>
      </div>
      <div class = "modal-body">
        <h2>Emely</h2>
        <p>ercurtis@svsu.edu</p>
        <hr>
        <h2>Brandon</h2>
        <p>bmjones1@svsu.edu</p>
        <hr>
        <h2>Dave</h2>
        <p>damass@svsu.edu</p>
      </div>
    </div>

    <div id="aboutModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true" >
      <div class = "modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>About our Store</h3>
      </div>
      <div class = "modal-body">
        <h2>How did we start</h2>
        <p>Our store started out as a very hypothetical idea.  A small group of us had ideas for handmade and interesting items
          that we wanted to buy but couldn't fine.  We have since pooled together all of our talents and brought those items
          all into one place so that others can enjoy the things we enjoy</p>
        <hr>
        <h2>Are these items safe for our pets</h2>
        <p>Almost all of these items are currently used at our own homes and with our own pets.  We only sell high quality, handmade
          organic and fun items here.  There is of course the issue of how rough your pet will be with these items, but I can assure you
          that you will not be dismayed by the quality.</p>
        <hr>
        <h2>How much do your artists make?</h2>
        <p>each artist makes 80% of every item that they make and sell on our site.  This is fair to the artist and should make you
          sleep better at night knowing that you are actually paying the artists.</p>
      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">

<?php 
#insert first headline, lead and button info from database
$query = $link->query("SELECT headline1, lead1, button1, href1, img1 FROM homeInfo WHERE ID = $id");
if ($query) {
  while ($row = $query->fetch_assoc()) {
    echo '<img src="'. $currentImgPath . $row["img1"] . '" alt="">
          <div class="container">
          <div class="carousel-caption">';
    echo '<h1>' . $row["headline1"] . '</h1>';
    echo '<p class="lead">' . $row["lead1"] . '</p>';
    echo '<a class="btn btn-large btn-inverse href ="' . $row["href1"] . '">' . $row["button1"] . '</a>';
  }
}
    echo '
          </div>
          </div>
          </div>
          <div class="item">';

#insert second headline, lead and button info from database
$query = $link->query("SELECT headline2, lead2, button2, href2, img2 FROM homeInfo WHERE ID = $id");
if ($query) {
  while ($row = $query->fetch_assoc()) {
        echo '<img src="' . $currentImgPath . $row["img2"] . '" alt="">
          <div class="container">
          <div class="carousel-caption">';
    echo '<h1>' . $row["headline2"] . '</h1>';
    echo '<p class="lead">' . $row["lead2"] . '</p>';
    echo '<a class="btn btn-large btn-inverse href ="' . $row["href2"] . '">' . $row["button2"] . '</a>';
  }
}
?>
            </div>
          </div>
        </div>
        <div class="item">

<?php 
#insert third headline, lead and button info from database
$query = $link->query("SELECT headline3, lead3, button3, href3, img3 FROM homeInfo WHERE ID = $id");
if ($query) {
  while ($row = $query->fetch_assoc()) {
        echo '<img src="' . $currentImgPath . $row["img3"] . '" alt="">
          <div class="container">
          <div class="carousel-caption">';
    echo '<h1>' . $row["headline3"] . '</h1>';
    echo '<p class="lead">' . $row["lead3"] . '</p>';
    echo '<a class="btn btn-large btn-inverse href ="' . $row["href3"] . '">' . $row["button3"] . '</a>';
  }
}
?>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
<?php 
$query = $link->query("SELECT featureHead1, featureHead2, featureLead1, featureLead2, featureFoot1, featureFoot2, featureImg1, featureImg2 FROM homeInfo WHERE ID = $id");
if ($query) {
  while ($row = $query->fetch_assoc()) {
    echo '<div class="featurette">
            <img class="featurette-image pull-right" src="' . $currentImgPath . $row["featureImg1"] . '"">
            <h2 class="featurette-heading">'. $row["featureHead1"] . '<span class="muted">'.$row["featureFoot1"].'</span></h2>
            <p class="lead">'.$row["featureLead1"].'</p>
          </div>

        <hr class="featurette-divider">

          <div class="featurette">
            <img class="featurette-image pull-left" src="' . $currentImgPath . $row["featureImg2"] . '"">
            <h2 class="featurette-heading">'. $row["featureHead2"] . '<span class="muted">'.$row["featureFoot2"].'</span></h2>
            <p class="lead">'.$row["featureLead2"].'</p>
          </div>

      <hr class="featurette-divider">';
  }
}?>
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Hipster Bunny &middot; <a href="#contactModal" data-toggle="modal">Contact</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="assets/js/holder/holder.js"></script>
  </body>
</html>
