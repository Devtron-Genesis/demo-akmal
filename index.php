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
    <script>
      $(function(){
        $("#getting-started-accordian").hide();
        $("#the-basic").find('p i').css('color', 'white');
        $("#the-basic").click(function(){
          $("#the-basic-accordian").show(500);
          $("#getting-started-accordian").hide(500);
          $(this).children('.tabs-style').addClass('active').find('i').css('color','white');
          $("#getting-started").children('.tabs-style').removeClass('active').find('i').css('color','black');
        });
        $("#getting-started").click(function(){
          $("#the-basic-accordian").hide(500);
          $("#getting-started-accordian").show(500);
          $(this).children('.tabs-style').addClass('active');
          $(this).find('p i').css('color', 'white');
          $("#the-basic").children('.tabs-style').removeClass('active').find('i').css('color','black');
        });
      });
    </script>
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white py-2 fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-expand">
                <img src="img/logo.png" style="width: 120px; height:65px;" alt="logo img">
            </a>
            <!-- Top Menu -->
            <div class="container-fluid mt-4">
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
              The Basic
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
          <div id="accordian">
            <div class="card">
              <div class="card-header">
                <a href="#menu1" class="card-link" data-toggle="collapse" aria-expanded="true" aria-controls="menu1">
                  Menu 1 <span class="collapsed"><p class="accordian-signs"><b>+</b></p></span>
                  <span class="expanded"><p class="accordian-signs"><b>-</b></p></span>
                </a>
              </div>
              <div id="menu1" class="collapse show">
                <div class="card-body">
                    Taj Mahal is built on the banks of river Yamuna and is surrounded by a beautiful garden. Mughal Emperor Shah Jahan constructed it for the commemoration of his wife Mumtaz Mahal. The construction was started in 1631 and in 1643, the construction of main building was completed. The construction of the whole complex was completed in 1653. Mumtaz Mahal is buried in Taj Mahal.
                </div>
              </div>
            </div>
            <!-- <br> -->
            <div class="card">
              <div class="card-header">
                <a href="#menu2" class="card-link" data-toggle="collapse" aria-expanded="false" aria-controls="menu2">
                  Menu 2 <span class="collapsed"><p class="accordian-signs"><b>+</b></p></span>
                  <span class="expanded"><p class="accordian-signs"><b>-</b></p></span>
                </a>
              </div>
              <div id="menu2" class="collapse">
                <div class="card-body">
                  Taj Mahal is built on the banks of river Yamuna and is surrounded by a beautiful garden. Mughal Emperor Shah Jahan constructed it for the commemoration of his wife Mumtaz Mahal. The construction was started in 1631 and in 1643, the construction of main building was completed. The construction of the whole complex was completed in 1653. Mumtaz Mahal is buried in Taj Mahal.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End  The Basic Accordian -->

        <!-- Getting Started Accordian -->
        <div class="row" id="getting-started-accordian">
            <div id="accordian">
              <div class="card">
                <div class="card-header">
                  <a href="#menu3" class="card-link" data-toggle="collapse" aria-expanded="true" aria-controls="menu3">
                    Menu 3 <span class="collapsed"><p class="accordian-signs"><b>+</b></p></span>
                    <span class="expanded"><p class="accordian-signs"><b>-</b></p></span>
                  </a>
                </div>
                <div id="menu3" class="collapse show">
                  <div class="card-body">
                      Taj Mahal is built on the banks of river Yamuna and is surrounded by a beautiful garden. Mughal Emperor Shah Jahan constructed it for the commemoration of his wife Mumtaz Mahal. The construction was started in 1631 and in 1643, the construction of main building was completed. The construction of the whole complex was completed in 1653. Mumtaz Mahal is buried in Taj Mahal.
                  </div>
                </div>
              </div>
              <!-- <br> -->
              <div class="card">
                <div class="card-header">
                  <a href="#menu4" class="card-link" data-toggle="collapse" aria-expanded="false" aria-controls="menu3">
                    Menu 4 <span class="collapsed"><p class="accordian-signs"><b>+</b></p></span>
                    <span class="expanded"><p class="accordian-signs"><b>-</b></p></span>
                  </a>
                </div>
                <div id="menu4" class="collapse">
                  <div class="card-body">
                    Taj Mahal is built on the banks of river Yamuna and is surrounded by a beautiful garden. Mughal Emperor Shah Jahan constructed it for the commemoration of his wife Mumtaz Mahal. The construction was started in 1631 and in 1643, the construction of main building was completed. The construction of the whole complex was completed in 1653. Mumtaz Mahal is buried in Taj Mahal.
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- End Getting Started Accordian -->
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
                <p class="small">Vienna<br>
                  London <br>
                  New York<br>
                  Wroclaw</p>
              </div>
              <div class="col-md-6">
                <p class="small">Sunnywale<br>
                  Milano<br>
                  Monterrey</p>
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
            <p>Privacy & Cookie Policy</p> 
            <p>Terms & Conditions</p>
            <p>Sitemap</p>
          </div>
          <div class="col-md-3">
            <p>Made with <i class="fa fa-heart" style="color: red;"></i> by Devtron Genesis</p>
          </div>
          <div class="col-md-4 footer-icon-style">
            <i class="fa fa-twitter"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-google-plus"></i>
            <i class="fa fa-youtube"></i>
            <i class="fa fa-vimeo"></i>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
</body>
</html>