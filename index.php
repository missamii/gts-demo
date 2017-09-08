<?php include("header.php"); ?>

  <!-- Carousel Bootstrap -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/gts-van.png" alt="Chania">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>NYC GTS family is always here to help.</p>
        </div>
      </div>
      <div class="item">
        <img src="/Images/Slide5.png" width="100%" alt="Chicago">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="item">
        <img src="/Images/banner-1.jpg" width="100%" alt="New York">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> <!-- ./ Carousel Bootstrap -->

  <div class="row"> <!-- Banner -->
    <div class="col-md-12">
      <img class="img-responsive" src="http://placehold.it/2000x150" alt="">
    </div>
    </div> <!-- ./ Banner -->
    <div class="row">
    <div class="col-md-4">
      <h2 class="centered-header">Recent Projects</h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <p>
        <a class="btn" href="#">View details »</a>
      </p>
    </div>
    <div class="col-md-4">
      <h2 class="centered-header">Testimonials</h2>
      <p>
        "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod."
      </p>
      <p>
        "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.  Donec sed odio dui."
      </p>
      <p>
        "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui."
      </p>
      <p>
        <a class="btn" href="#">View details »</a>
      </p>
    </div>
    <div class="col-md-4">
      <h2 class="centered-header">Customer Showcase</h2>
      <img src="http://placehold.it/250x80" alt=""> <img src="http://placehold.it/250x80" alt=""> <img src="http://placehold.it/250x80" alt=""> <img src="http://placehold.it/250x80" alt="">
      <p>
        <a class="btn" href="#">View details »</a>
      </p>
    </div>
  </div> <!-- ./ row -->
  <div class="row">
    <div class="col-md-12" id="index-quote">
      <p class="text-center">
        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor.
      </p>
    </div>

  <!-- venders -->
  <div id="jump"></div> <!-- ./ for venders page jump -->

    <div class="col-md-8 text-center" id="vendors"> &nbsp; &nbsp; &nbsp;
      <img src="Images/vendors/edge_sapphire_horz.gif" alt=""> &nbsp; &nbsp; &nbsp;
      <img src="Images/vendors/MitelLogo.png" alt=""> &nbsp; &nbsp; &nbsp;
      <img src="Images/vendors/ringcentral_logo.png" alt=""> &nbsp; &nbsp; &nbsp;
      <img src="Images/vendors/ArenaOne_wtag.png" alt=""> &nbsp; &nbsp; &nbsp;
      <div class="col-md-6"></div>
      <br />
      <p>
        <a class="btn-default btn-lg" href="venders.php">More Venders »</a>
      </p>
      <br /><br />
    </div> <!-- ./ venders -->


<?php include("footer.php"); ?>
