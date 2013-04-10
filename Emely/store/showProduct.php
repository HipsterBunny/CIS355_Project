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
            <a class="brand" href="index.php">

<?php
$currentID = $_GET['ID']; 

#determine which record to read from as well as the file path to all img data ( tweak? )
$id = 2;
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
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="products.php">Products</a></li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                  </ul>
                </li> -->
                <li><a href="#contactModal" data-toggle="modal">Contact</a></li>
                <li><a href="#registerModal" data-toggle="modal">Register</a></li>
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
  
  <div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true" >
      <div class = "modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Please Register</h3>
      </div>
      <div class = "modal-body">
    <form action="register.php" method="post">
      <input class="span2" type="text" placeholder="Name">
      <input class="span2" type="text" placeholder="Email"><br>
            <input class="span2" type="password" placeholder="Password"><br>
            <button type="submit" class="btn">Register</button>
    </form>
      </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing products">

      <!-- Three columns of text below the carousel -->
<?php 
#insert third headline, lead and button info from database
$query = $link->query("SELECT productName, price, stockCount, shipping, imgPath1, imgThumb, description, dimension FROM products WHERE ID = ". $currentID . "");
if ($query) {
  $count = 0;
  while ($row = $query->fetch_assoc()) {
      echo '<div class="row">';
   
    //echo '<img class="img-circle" ' . $currentImgPath . $row["imgThumb"] . '" alt="showProduct.php?ID='.$row["ID"].'">'; 
    echo '<div class="span6">';
    echo '<img class="img-rounded" data-src="holder.js/500x500">';
    echo '</div>';
    echo '<div class="span6">';
    echo '<h1>' . $row["productName"] . '</h1>';
    echo '<p>'. $row["description"].'</p>';
    echo '<div class="floatright">';
    echo '<h3>Price: '. $row["price"].' </h3>';
    
    if ($row["stockCount"] != 0) {
      echo '<p> In Stock</p>';
    }
    else {
      echo '<p> Out Of Stock :(</p>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
}
?>
    </div>
      <hr class="featurette-divider">
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
    <script src="assets/js/holder/holder.js"></script>
  </body>
</html>
