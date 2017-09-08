<!-- social media icons -->
<div class="row">
  <div class="col-sm-12" id="social-media">
    <p class="text-right">
      <a href="https://www.linkedin.com/in/global-telecom-supply-19685435"> <img src="Images/media-icon/LinkedIn.png" alt=""></a>
      <!-- <a href="https://www.youtube.com/user/GlobalTelecomSupply"> <img src="Facebook.png" alt=""></a> -->
      <a href="https://www.youtube.com/user/GlobalTelecomSupply"> <img src="Images/media-icon/YouTube.png" alt=""></a>
      <a href="https://twitter.com/global_telecom"> <img src="Images/media-icon/Twitter.png" alt=""></a>
    </p>
  </div>
</div> <!-- ./ social media icons -->
<!-- FLOATING SLIDEOUT BUTTON -->
<div class="row">
  <div class="" id="slideout">
    <img src="Images/button_get-a-quote.png" alt="Feedback" />
    <div id="slideout_inner">
      <!-- FORM CODE ./ -->
    <form name="form-test" action="includes/get_quote_process.php" method="post" onsubmit="return validateQuote();">
      <div>
        <?php
        if($_GET['success']=='true'){
            echo "<span class='form-success'>Your info has been submitted. We will be in touch shortly. Thank you!</span>";
            echo "<style>#lower-body{height:518px;background-color:#58585c;}</style>";
        }
        ?>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <input class="form-control" type="text" name="name" id="name" placeholder="Name">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input class="form-control" type="text" name="name" id="email" placeholder="E-Mail">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <input class="form-control" type="text" name="name" id="company" placeholder="Company Name">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <input class="form-control" type="text" name="name" id="telephone" placeholder="Phone Number">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-default">Clear</button>
            </div>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </form>
        <!-- ./ FORM CODE -->
    </div>
  </div> <!-- ./ FLOATING SLIDEOUT BUTTON -->

  <footer class="footer" id="custom-footer">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-4">
          <h2 class="footer-header">Global Telecom Supply</h2>
          Welcome to the leading company delivering services that combine quality, realiability and compliance!
    		</div>
        <div class="col-md-4">
          <h2 class="footer-header">Sitemap</h2>
          <a href="business-solutions.php" class="btn active btn-link btn-lg" type="button">Solutions</a> <a href="about.php" class="btn active btn-link btn-lg" type="button">About</a>
          <a href="#" class="btn active btn-link btn-lg" type="button">Blog</a> <a href="careers.php" class="btn active btn-link btn-lg" type="button">Careers</a> <br />
          <a href="#" class="btn active btn-link btn-lg" type="button">Systems</a> <a href="#" class="btn active btn-link btn-lg" type="button">Support</a>
          <a href="#" class="btn active btn-link btn-lg" type="button">Locations</a> <a href="#" class="btn active btn-link btn-lg" type="button">Link</a>
          <a href="#" class="btn active btn-link btn-lg" type="button">Link</a> <a href="#" class="btn active btn-link btn-lg" type="button">Link</a>
          <a href="#" class="btn active btn-link btn-lg" type="button">Link</a>
    		</div>
    		<div class="col-md-4">
          <h2 class="footer-header">Contact Info</h2>
          <ul class="fa-ul">
            <li>  <i class="fa fa-phone fa-2x" aria-hidden="true"></i> <a href="tel:866-400-3737"> &nbsp; &nbsp; &nbsp; (866) 400-3737 </a></li>
            <li>  <i class="fa fa-envelope fa-2x" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp; info@gts.com</li>
            <li>  <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp; Mon - Fri: 9:00AM - 5:00PM </li>
            <li>  <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i> <a href="https://goo.gl/maps/N9hCEWQYjrj"> &nbsp; &nbsp; &nbsp; 3 EXPRESSWAY PLAZA SUITE #114</li> <p class="block">ROSLYN HEIGHTS, NY 11577 </a></p>
             <p class="text-right"><a href="#">Other Locations >> </a> </p>
          </ul>
    		</div>
    	</div> <!--  ./ row -->
    </div>   <!--  ./ container-fluid -->
  </footer>

  <script src=”//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js”></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
  <!--  custom js -->
  <script src="Assets/main.js"></script>
</body>
</html>
