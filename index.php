<?php
  require_once('admin/config.php');
  session_start();
  try {
    $sql = "SELECT * FROM categories";
    $categories = $pdo->query($sql);
    $i=0;
    $cat_name = array();
    $cat_ids = array();
    foreach ($categories as $item) {
      $cat_name[$i] = $item['name'];
      $cat_ids[$i] = $item['id'];
      $i++;
    }
    $sql = "SELECT * FROM faq WHERE answer Is Not NULL ORDER BY id DESC";
    $all_questions = $pdo->query($sql);
    $questions_ids_array = array();
    $questions_cat_ids_array = array();
    $questions_questions_array = array();
    $questions_answers_array = array();
    $indexCount = 0;
    foreach ($all_questions as $item) {
        $questions_ids_array[$indexCount] = $item['id'];
        $questions_cat_ids_array[$indexCount] = $item['cat_id'];
        $questions_questions_array[$indexCount] = $item['question'];
        $questions_answers_array[$indexCount] = $item['answer'];
        $indexCount++;
    }
  } catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <title>Demo Website</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navbar-fixed.js"></script>
    <script src="admin/js/jquery.easing.js"></script>
    <script>
      $(function(){
        $("#getting-started-accordian").hide();
        $("#solution-accordian").hide();
        $("#technology-accordian").hide();
        $("#company-accordian").hide();
        $("#the-basic").find('p i').css('color', 'white');
        $("#the-basic").click(function(){
          $("#the-basic-accordian").show(500);
          $("#getting-started-accordian").hide(500);
          $("#solution-accordian").hide(500);
          $("#technology-accordian").hide(500);
          $("#company-accordian").hide(500);
          $(this).children('.tabs-style').addClass('active').find('i').css('color','white');
          $("#getting-started").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#solution").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#technology").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#company").children('.tabs-style').removeClass('active').find('i').css('color','black');
        });
        $("#getting-started").click(function(){
          $("#the-basic-accordian").hide(500);
          $("#getting-started-accordian").show(500);
          $("#solution-accordian").hide(500);
          $("#technology-accordian").hide(500);
          $("#company-accordian").hide(500);
          $(this).children('.tabs-style').addClass('active').find('i').css('color','white');
          $("#the-basic").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#solution").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#technology").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#company").children('.tabs-style').removeClass('active').find('i').css('color','black');
        });
        $("#solution").click(function(){
          $("#the-basic-accordian").hide(500);
          $("#getting-started-accordian").hide(500);
          $("#solution-accordian").show(500);
          $("#technology-accordian").hide(500);
          $("#company-accordian").hide(500);
          $(this).children('.tabs-style').addClass('active').find('i').css('color','white');
          $("#the-basic").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#getting-started").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#technology").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#company").children('.tabs-style').removeClass('active').find('i').css('color','black');
        });
        $("#technology").click(function(){
          $("#the-basic-accordian").hide(500);
          $("#getting-started-accordian").hide(500);
          $("#solution-accordian").hide(500);
          $("#technology-accordian").show(500);
          $("#company-accordian").hide(500);
          $(this).children('.tabs-style').addClass('active').find('i').css('color','white');
          $("#the-basic").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#getting-started").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#solution").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#company").children('.tabs-style').removeClass('active').find('i').css('color','black');
        });
        $("#company").click(function(){
          $("#the-basic-accordian").hide(500);
          $("#getting-started-accordian").hide(500);
          $("#solution-accordian").hide(500);
          $("#technology-accordian").hide(500);
          $("#company-accordian").show(500);
          $(this).children('.tabs-style').addClass('active').find('i').css('color','white');
          $("#the-basic").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#getting-started").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#technology").children('.tabs-style').removeClass('active').find('i').css('color','black');
          $("#solution").children('.tabs-style').removeClass('active').find('i').css('color','black');
        });
      });
    </script>
    <script>
      $(function(){
        "use strict";
        // Scroll to top button appear
        $(document).on('scroll', function() {
          var scrollDistance = $(this).scrollTop();
          if (scrollDistance > 1) {
            // $('.navbar-brand img').css('width', '80px');
            $('.top-menu').slideUp();
            $('nav.navbar').removeClass('scrollUpHeight');
            $('nav.navbar').addClass('scrollDownHeight');
            $('.scroll-to-top').fadeIn();
          } else if (scrollDistance < 1) {
            // $('.navbar-brand img').css('width', '120px');
            $('.top-menu').slideDown();
            $('nav.navbar').removeClass('scrollDownHeight');
            $('nav.navbar').addClass('scrollUpHeight');
            $('.scroll-to-top').fadeOut();
          }
        });

        // Smooth scrolling using jQuery easing
        $(document).on('click', 'a.scroll-to-top', function(e) {
          var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
          }, 1000, 'easeInOutExpo');
          e.preventDefault();
        });
      });
  </script>
</head>
<body id="page-top">
  <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white py-2 sticky-top scrollUpHeight">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo.png" alt="logo img">
            </a>
            <!-- Top Menu -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 top-menu">
                      <a href="#">Comapny</a>
                      <a href="#">Careers</a>
                      <a href="#">Contact</a>
                    </div>
                  </div>
                  <button class="navbar-toggler" data-toggle="collapse" data-target="#demo-nav">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="demo-nav">
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Product
                                  <i class="fa fa-chevron-down"></i>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Commerce & Sales</a>
                                  <a class="dropdown-item" href="#">Marketing</a>
                                  <a class="dropdown-item" href="#">Customer Service</a>
                                  <a class="dropdown-item" href="#">AdviceBots</a>
                                  <a class="dropdown-item" href="#">Omnichannel</a>
                              </div>
                          </li>
                          <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Industries
                                  <i class="fa fa-chevron-down"></i>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Retail</a>
                                  <a class="dropdown-item" href="#">Brand Manufacturing</a>
                                  <a class="dropdown-item" href="#">Fashion and Lifestyle</a>
                                  <a class="dropdown-item" href="#">Telecommunications</a>
                                  <a class="dropdown-item" href="#">Banking and Finance</a>
                                  <a class="dropdown-item" href="#">B2B Commerce</a>
                                  <a class="dropdown-item" href="#">Services</a>
                              </div>
                          </li>
                          <li class="nav-item"><a href="#" class="nav-link">Examples</a></li>
                          <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  How it Works
                                  <i class="fa fa-chevron-down"></i>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Technology</a>
                                  <a class="dropdown-item" href="#">FAQ</a>
                                  <a class="dropdown-item" href="#">Innovation Lab</a>
                              </div>
                          </li>
                          <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Partners
                                  <i class="fa fa-chevron-down"></i>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Solution Partners</a>
                                  <a class="dropdown-item" href="#">Technology Partner</a>
                                  <a class="dropdown-item" href="#">Become a Partner</a>
                              </div>
                          </li>
                          <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Media Center
                                  <i class="fa fa-chevron-down"></i>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">News</a>
                                  <a class="dropdown-item" href="#">Resources</a>
                                  <a class="dropdown-item" href="#">Events</a>
                              </div>
                          </li>
                      </ul>
                      <a href="admin/login.php" class="btn btn-primary ml-2 custom-btn">Get Started</a>
                  </div>
                </div>
            <!-- end top menu -->
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Showcase -->
    <section id="showcase" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-7 showcase-head">
                    <p class="showcase-style">Frequently asked questions</p>
                    <p class="showcase-style1">Get answers to your questions about Devtron Genesis</p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <!-- end showcase -->

    <!-- Flash Messages -->
      <?php
        flash_messages();
      ?>
    <!-- tabs -->
    <section class="pt-5 pb-2">
      <div class="container">
        <div class="row">
          <div class="col" id="the-basic">
            <p class="tabs-style active">
              <i class="fa fa-tv"></i><br><br>
              The Basics
            </p>
          </div>
          <div class="col" id="getting-started">
            <p class="tabs-style">
                <i class="fa fa-map"></i><br><br>
                Getting Started
            </p>
          </div>
          <div class="col" id="solution">
            <p class="tabs-style">
              <i class="fa fa-newspaper-o"></i><br><br>
              Solution
            </p>
          </div>
          <div class="col" id="technology">
            <p class="tabs-style">
              <i class="fa fa-dropbox"></i><br><br>
              Technology
            </p>
          </div>
          <div class="col" id="company">
            <p class="tabs-style">
              <i class="fa fa-users"></i><br><br>
              Company
            </p>
          </div>
        </div>
        <!-- accordian row -->
              <!-- The Basic Accordian -->
              <div class="row" id="the-basic-accordian">
              <div class="accordion" id="faqAccordion">
                <?php
                  for ($i=0; $i < count($questions_ids_array) ; $i++) { 
                    if ($questions_cat_ids_array[$i] == 1) { ?>
                      <div class="card">
                        <div class="card-header">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?=$questions_ids_array[$i]?>"
                            aria-expanded="true" aria-controls="<?=$questions_ids_array[$i]?>">
                            <?=$questions_questions_array[$i]?> <span class="collapsed"><p class="accordion-signs"><b>+</b></p></span>
                            <span class="expanded"><p class="accordion-signs"><b>&times;</b></p></span>
                            </button>
                          </h2>
                        </div>
                        <div id="<?=$questions_ids_array[$i]?>" class="collapse" data-parent="#faqAccordion">
                          <div class="card-body">
                            <?=$questions_answers_array[$i]?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php   } ?>
                  </div>
                </div>
              <!-- The Getting Started Accordian -->
              <div class="row" id="getting-started-accordian">
              <div class="accordion" id="faqAccordion1">
                <?php
                  for ($i=0; $i < count($questions_ids_array) ; $i++) { 
                    if ($questions_cat_ids_array[$i] == 2) { ?>
                      <div class="card">
                        <div class="card-header">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?=$questions_ids_array[$i]?>"
                            aria-expanded="true" aria-controls="<?=$questions_ids_array[$i]?>">
                            <?=$questions_questions_array[$i]?> <span class="collapsed"><p class="accordion-signs"><b>+</b></p></span>
                            <span class="expanded"><p class="accordion-signs"><b>&times;</b></p></span>
                            </button>
                          </h2>
                        </div>
                        <div id="<?=$questions_ids_array[$i]?>" class="collapse" data-parent="#faqAccordion1">
                          <div class="card-body">
                            <?=$questions_answers_array[$i]?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php   } ?>
                  </div>
                </div>
              <!-- Solution Accordian -->
              <div class="row" id="solution-accordian">
              <div class="accordion" id="faqAccordion2">
                <?php
                  for ($i=0; $i < count($questions_ids_array) ; $i++) { 
                    if ($questions_cat_ids_array[$i] == 5) { ?>
                      <div class="card">
                        <div class="card-header">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?=$questions_ids_array[$i]?>"
                            aria-expanded="true" aria-controls="<?=$questions_ids_array[$i]?>">
                            <?=$questions_questions_array[$i]?> <span class="collapsed"><p class="accordion-signs"><b>+</b></p></span>
                            <span class="expanded"><p class="accordion-signs"><b>&times;</b></p></span>
                            </button>
                          </h2>
                        </div>
                        <div id="<?=$questions_ids_array[$i]?>" class="collapse" data-parent="#faqAccordion2">
                          <div class="card-body">
                            <?=$questions_answers_array[$i]?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php   } ?>
                  </div>
                </div>
              <!-- Technology Accordian -->
              <div class="row" id="technology-accordian">
              <div class="accordion" id="faqAccordion3">
                <?php
                  for ($i=0; $i < count($questions_ids_array) ; $i++) { 
                    if ($questions_cat_ids_array[$i] == 6) { ?>
                      <div class="card">
                        <div class="card-header">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?=$questions_ids_array[$i]?>"
                            aria-expanded="true" aria-controls="<?=$questions_ids_array[$i]?>">
                            <?=$questions_questions_array[$i]?> <span class="collapsed"><p class="accordion-signs"><b>+</b></p></span>
                            <span class="expanded"><p class="accordion-signs"><b>&times;</b></p></span>
                            </button>
                          </h2>
                        </div>
                        <div id="<?=$questions_ids_array[$i]?>" class="collapse" data-parent="#faqAccordion3">
                          <div class="card-body">
                            <?=$questions_answers_array[$i]?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php   } ?>
                  </div>
                </div>
              <!-- Company Accordian -->
              <div class="row" id="company-accordian">
              <div class="accordion" id="faqAccordion4">
                <?php
                  for ($i=0; $i < count($questions_ids_array) ; $i++) { 
                    if ($questions_cat_ids_array[$i] == 7) { ?>
                      <div class="card">
                        <div class="card-header">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?=$questions_ids_array[$i]?>"
                            aria-expanded="true" aria-controls="<?=$questions_ids_array[$i]?>">
                            <?=$questions_questions_array[$i]?> <span class="collapsed"><p class="accordion-signs"><b>+</b></p></span>
                            <span class="expanded"><p class="accordion-signs"><b>&times;</b></p></span>
                            </button>
                          </h2>
                        </div>
                        <div id="<?=$questions_ids_array[$i]?>" class="collapse" data-parent="#faqAccordion4">
                          <div class="card-body">
                            <?=$questions_answers_array[$i]?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php   } ?>
                  </div>
                </div>
        <!-- end accordian row -->
      </div>
    </section>
    <!-- end tabs -->

    <!-- Form Section -->
    <section>
      <div class="slope-skew"></div>
      <div class="container-fluid slope">
        <div class="row">
          <div class="col">
            <h3 class="text-center text-white" style="font-size: 30px;">Could not find your question?</h3>
            <p class="text-center text-white lead">Send us your question.Please add your contact details, if we should inform you once your question<br>
            has been answered.</p>
            <form action="admin/create-faq.php" method="post">
              <div class="form-row">
                <div class="col-md-1"></div>
                <div class="form-group col-md-10">
                  <textarea name="question" class="form-control" rows="7" placeholder="Your question here" required></textarea>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="form-group col-md-5">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group col-md-5">
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <select class="form-control" name="cat_id" required>
                    <option disabled selected value="0">-Select Category-</option>
                    <?php for ($i=0; $i < count($cat_name) ; $i++) { ?>
                      <option value="<?=$cat_ids[$i];?>">
                        <?php echo $cat_name[$i] ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-5"></div>
                <div class="form-group col-md-2">
                  <input type="submit" class="btn bg-white" value="Send question">
                </div>
                <div class="col-md-5"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Form Section -->

    <!-- Footer -->
    <footer class="pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="img/logo.png" alt="footer logo" style="height: 40px; width: 80px;"><br><br> 
            <p class="text-dark text-justify">We are an internationa technology company with the mission to help people make more confident decisions and choose products they'll love.</p>
            <p class="text-dark">&copy;2019 Devtron Genesis.</p>
            <p>All rights reserved</p>
            <p>Locations</p>
            <div class="row ml-2" id="location-bg-image">
              <div class="col-md-6">
                <a href="#" class="small">Vienna</a>
                <a href="#" class="small">London</a>
                <a href="#" class="small">New York</a>
                <a href="#" class="small">Wroclaw</a>
              </div>
              <div class="col-md-6">
                <a href="#" class="small">Sunnywale</a>
                <a href="#" class="small">Milano</a>
                <a href="#" class="small">Monterrey</a>
              </div>
            </div>    
          </div>
          <div class="col-md-2">
            <h5 class="footer-heading-style">Our Products</h5>
            <a href="#">Commerce & Sales</a>
            <a href="#">Marketing</a>
            <a href="#">Customer Service</a>
            <a href="#">Advice Chatbot</a>
            <a href="#">Omnichannel</a>
            <a href="#">Examples</a>
          </div>
          <div class="col-md-2">
            <h5 class="footer-heading-style">Industry Solutions</h5>
            <a href="#">Retail </a>
            <a href="#">Brand Manufaturing</a>
            <a href="#">Fashion and Lifestyle</a>
            <a href="#">Telecommunications</a>
            <a href="#">B2B Commerce</a>
            <a href="#">Banking and Finance</a>
            <a href="#">Premium Services</a>
          </div>
          <div class="col-md-2">
            <h5 class="footer-heading-style">Company</h5>
            <a href="#">Management</a>
            <a href="#">Careers</a>
            <a href="#">Media Center</a>
            <a href="#">Become a Partner</a>
            <a href="#">Blog</a>
            <a href="#">Technology</a>
            <a href="#">Technology Updates</a>
          </div>
          <div class="col-md-2">
            <h5 class="footer-heading-style"> Get in Touch </h5>
            <a href="#">Contact</a>
            <a href="#">FAQ</a>
            <a href="#">30-Day Free Trial</a>
            <a href="#">See a Demo</a>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-5 footer-style">
            <a href="#">Privacy & Cookie Policy</a> 
            <a href="#">Terms & Conditions</a>
            <a href="#">Sitemap</a>
          </div>
          <div class="col-md-3">
            <p>Made with <i class="fa fa-heart" style="color: red;"></i> by Devtron Genesis</p>
          </div>
          <div class="col-md-4 footer-icon-style">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-vimeo"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up" style="font-weight: 900;"></i>
    </a>
</body>
</html>