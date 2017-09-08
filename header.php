<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>GTS Website - Demo</title>

    <meta name="description" content="global telecom supply">
    <meta name="author" content="tiffanylo">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS/CDN for Yeti BootSwatch Theme -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-HzUaiJdCTIY/RL2vDPRGdEQHHahjzwoJJzGUkYjHVzTwXFQ2QN/nVgX7tzoMW3Ov" crossorigin="anonymous">

    <!-- font awesome CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- custom CSS -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <!-- <div class="container-fluid"> -->
    	<div class="row">
    		<div class="col-md-12">
    			<img class="img-responsive" id="bbb" src="Images/bbb.png" alt="">
    				<div class="col-md-4">
              <ul class="media-list" data-toggle="collapse" data-parent="custom-collapse">
                <li>
                  <img src="Images/media-icon/phone.png" alt=""> <a href="tel:18664003737">+1.866.400.3737</a>
                </li>
                <li>
                  <img src="Images/media-icon/mail.png" alt=""> <a href="mailto:joe@example.com?subject=feedback">info@mail.com</a>
                </li>
                <li>
                  <img src="Images/media-icon/person.png" alt=""> <a href="#">Client Support</a>
                </li>
              </ul>
    				</div>
    				<div class="col-md-4">
    					<img class="img-responsive" id="main-logo" alt="Global Telecom Supply" src="Images/logo.png">
    				</div>
    				<div class="col-xs-6 col-sm-3">

    				</div> <!-- ./list col-->

    		</div> <!-- ./col-12-->
    	</div> <!-- ./1st row-->

	<div class="row">
		<div class="col-md-12">
      <!-- navbar .\ -->
			<nav class="navbar navbar-default" id="custom-nav" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="http://globaltelecomsupply.com">Global Telecom Supply</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
            <!-- ./ dropdown company button -->
            <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="about.php">About</a></li>
                    <li><a href="mission-statement.php">Mission Statement</a></li>
                    <li><a href="careers.php">Careers</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </li> <!-- ./ dropdown buttons -->
						<li class="">
							<a href="#jump">Partners</a>
						</li>
            <!-- dropdown buttons \. -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solutions <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Unified Communucations</a></li>
                <li><a href="#">Contact Center</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Carrier Srvices</a></li>
                <li><a href="#">Surveillance Systems</a></li>
                <li><a href="#">Infastructure Cabling</a></li>
                <li><a href="#">Implementation</a></li>
                <li><a href="#">Relocation Services</a></li>
                <li><a href="#">Support Services</a></li>
              </ul>
            </li> <!-- ./ dropdown buttons -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Leasing & Financing <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="leasing-and-financing.php">Leasing Overview</a></li>
                <li><a href="leasing-options.php">Leasing Options</a></li>
                <li><a href="#">Leasing Partners</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="http://globaltelecomsupply.com/files/CIT_credit_app.pdf" target="_blank">Credit Application</a></li>
              </ul>
            </li> <!-- ./ dropdown buttons -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="support.php">General Inquiries</a></li>
                <li><a href="#">Sales Inquiries</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Open a Ticket</a></li>
                <li><a href="#">Support Packages</a></li>
                <li><a href="faqs.php">FAQs</a></li>
                <li><a href="#">How to Video's</a></li>
              </ul>
            </li> <!-- ./ dropdown buttons -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Client Area<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Register</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </li> <!-- ./ dropdown buttons -->
            <li class="">
              <a href="careers.php">Careers</a>
            </li>
          </ul>


          <form class="navbar-form navbar-right" method="GET" role="search"  name="search" action="search.php" onsubmit="return validateSearch();">
        		<div class="input-group">
        			<input type="text" class="form-control" placeholder="Search" name="srch-term" id="input-custom" value="" id="search">
        				<button class="btn btn-default" id="custom-btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        			</div>
        		</div>
        	</form>
			  </nav>
