<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Taqwa Private School | Nigeria – One of the Nigeria’s leading independent schools for boys and girls aged 3 – 18</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
  </head>
  <body data-spy="scroll" data-offset="120">
    <div class="preloader">
      <div class="preloader">
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="logo">
          <a href="index">
          <img src="assets/img/lite-logo.png" alt=""  class="logo-alti">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index" class="nav-link">
              Home
              </a>
            </li>
            <li class="nav-item">
              <a href="updates" class="nav-link">
              News & Updates
              </a>
            </li>
            <li class="nav-item">
              <a href="contact" class="nav-link">
              Contact
              </a>
            </li>
          </ul>
          <div class="others-option">
            <div class="d-flex align-items-center">
              <div class="option-item">
                <a href="admission" class="default-btn">
                Admission
                <span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
      <div class="page-title-area" style="height:100px">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="container">
                  <div class="page-title-content">
                     <h2>Updates & News</h2>
                     <ul>
                        <li><a href="index">Home</a></li>
                        <li>Updates</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="default-shape">
            <div class="shape-1">
               <img src="assets/img/shape/1.png" alt="image">
            </div>
            <div class="shape-2 rotateme">
               <img src="assets/img/shape/2.png" alt="image">
            </div>
            <div class="shape-3">
               <img src="assets/img/shape/3.svg" alt="image">
            </div>
            <div class="shape-4">
               <img src="assets/img/shape/4.svg" alt="image">
            </div>
            <div class="shape-5">
               <img src="assets/img/shape/5.png" alt="image">
            </div>
         </div>
      </div>
<?php 
  $db = mysqli_connect('localhost', 'root', '', 'taqwaschools');

        $per_page_record = 10;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["next"])) {    
            $page  = $_GET["next"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record; 
        $fetchyyy = mysqli_query($db,"SELECT * FROM `updates` ORDER BY id DESC LIMIT $start_from, $per_page_record");
     
    
     $rs_result =$fetchyyy;
?>
      <section id="updates" class="blog-area pt-100 pb-100">
        <div class="container">
          
            <div class="row">
             
            <?php
                    if(mysqli_num_rows($fetchyyy) > 0){
                      while($fetch = mysqli_fetch_assoc($fetchyyy)){
                            echo'
                            
                            <div class="col-lg-4 col-md-6">
                            <div class="single-blog">
                              <div class="image">
                                  <a href="assets/img/school_life/'.$fetch["picture"].'">
                                  <img src="assets/img/school_life/'.$fetch["picture"].'" alt="image">
                                  </a>
                                  <div class="btn">
                                    <a href="#">Taqwa Schools</a>
                                  </div>
                              </div>
                              <div class="content">
                                  <ul class="post-meta">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        '.$fetch["date_added"].'
                                    </li>
                                  </ul>
                                  <h3>
                                    <a href="details?title='.$fetch["id"].'">
                                    '.$fetch["title"].'
                                    </a>
                                  </h3>
                                  <a href="details?title='.$fetch["id"].'" class="read-more">
                                  Read
                                  </a>
                              </div>
                            </div>
                        </div>
                            ';
                      }
                    }
                
            ?>

              <div class="col-lg-12 col-md-12">
                  <div class="pagination-area">
                    <?php  
                        $query = "SELECT COUNT(*) FROM updates";     
                        $rs_result = mysqli_query($db, $query);     
                        $row = mysqli_fetch_row($rs_result);     
                        $total_records = $row[0];     
                        // Number of pages required.   
                        $total_pages = ceil($total_records / $per_page_record);  
                      
                        if($page>=2){ 
                            echo'
                            <a href="updates?next='.($page-1).'" class="prev page-numbers">
                            <i class="fa fa-chevron-left"></i>
                            </a>
                            ';
                        }       
                        if($page<$total_pages){   
                            echo'
                            <a href="updates?next='.($page+1).'" class="next page-numbers">
                            <i class="fa fa-chevron-right"></i>
                            </a>
                            '; 
                        }   
                    ?>
                  </div>
              </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1">
              <img src="assets/img/shape/1.png" alt="image">
            </div>
            <div class="shape-2 rotateme">
              <img src="assets/img/shape/2.png" alt="image">
            </div>
            <div class="shape-3">
              <img src="assets/img/shape/3.svg" alt="image">
            </div>
            <div class="shape-4">
              <img src="assets/img/shape/4.svg" alt="image">
            </div>
            <div class="shape-5">
              <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
      </section>


 
      <section class="footer-area pt-100 pb-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="single-footer-widget">
                <a href="#" class="logo">
                  <h2>TAQWA TODAY</h2>
                </a>
                <p style="text-align: justify;">Taqwa is a co-educational school with over 300 learners and 80 staff. We are an English and Arabic speaking school that has deployed necessary modern means of education to impact teaching and learning. With our modern libraries and library lounge, equipped ICT/Server room, Laboratories, Music room, Workshops, and accessible sports facilities, the only way is up. </p>
                <br>
                <p style="text-align: justify;"> The school has a nursery, primary and secondary classrooms and an enviable residence within the school grounds for learners who choose to reside with us during the session.</p>
                <br>
                <p style="text-align: justify;"> We know our clients’ brands inside and out to create bespoke campaigns that bring the brand story to life, engage with consumers and inspire the media.</p>
                <ul class="social-list">
                  <li>
                    <a href="https://web.facebook.com/taqwaprivateschools" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/taqwaprivateschools" target="_blank">
                    <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/taqwaschools/" target="_blank">
                    <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12" style="border-radius: 10px 40px 10px 40px !important;">
              <section  class="screenshot-area screenshot-area2 ptb-100" >
                <div class="container-fluid">
                  <div class="section-title">
                    <h2>Why Ifako - Ijaye</h2>
                    <div class="bar"></div>
                    <p style="text-align: justify;">Taqwa Private School is strategically situated in the peaceful town of Ifako, in the Ifako-Ijaiye Local Government Area of Lagos State. Our schools’ location at Ifako has a dual advantage;</p>
                    <p style="text-align: justify;"> 
                      <ul style="color:white; text-align: left; list-style-type: none;">
                          <li class="mb-1"><i class="fa fa-arrow-right p-2" style="border-radius:50%; color:white;"></i>distance from the hustle and bustle of Lagos and</li>
                          <li class=""><i class="fa fa-arrow-right p-2" style="border-radius:50%; color:white;"></i>accessibility from any part of Lagos and the outskirts of Lagos</li>
                      </ul>
                    
                    </p>
                    <p style="text-align: justify;">It is approximately one hour’s drive from Lagos Island, about forty-five minutes from Lagos mainland, and fifteen minutes from Ikeja and the Airport.</p>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <div class="copy-right" >
        <div class="container">
          <div class="copy-right-content">
            <p >
              Copyright © 2021 TAQWA SCHOOLS.
            </p>
          </div>
        </div>
      </div>
      <div class="go-top">
        <i class="fa fa-chevron-up"></i>
        <i class="fa fa-chevron-up"></i>
      </div>
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/jquery.appear.js"></script>
      <script src="assets/js/odometer.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/particles.min.js"></script>
      <script src="assets/js/jquery.ripples-min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/jquery.ajaxchimp.min.js"></script>
      <script src="assets/js/form-validator.min.js"></script>
      <script src="assets/js/contact-form-script.js"></script>
      <script src="assets/js/main.js"></script>
    </body>
  </html>

