<<<<<<< HEAD
<?php 
  $db = mysqli_connect('localhost', 'taqwaschools', 'Point066@@', 'taqwaschools');
    
    if(isset($_GET['title'])){
        $next = $_GET['title'];
        
        $fetchyyy = mysqli_query($db,"SELECT * FROM `updates` WHERE id = '$next'");
        
    }else{
        header('refresh:0;url=updates');
       
    }  
?>
=======
>>>>>>> c70b5ea9d4313f9bd665a05ea8a4ef73f3c1f02f
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<<<<<<< HEAD
    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
=======
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
>>>>>>> c70b5ea9d4313f9bd665a05ea8a4ef73f3c1f02f
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
<<<<<<< HEAD
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

=======
>>>>>>> c70b5ea9d4313f9bd665a05ea8a4ef73f3c1f02f
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
                     <h2>Updates And NEWS</h2>
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
   
 

<section class="single-blog-area pt-100 pb-100">
   <div class="container">
      <div class="row">
        <div class="col-1"></div>
<<<<<<< HEAD
        <?php

                if(mysqli_num_rows($fetchyyy) > 0){
                    while($fetch = mysqli_fetch_assoc($fetchyyy)){
                        echo'
                        <div class="col-lg-10 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image">
                              <img src="assets/img/school_life/'.$fetch["picture"].'" alt="image">
                            </div>
                            <div class="article-content">
                              <div class="entry-meta">
                                  <ul>
                                    <li>
                                        <span>Posted On:</span>
                                        <a href="#">'.$fetch["date_added"].'</a>
                                    </li>
                                   
                                  </ul>
                              </div>
                              <h3>'.$fetch["title"].'</h3>
                             '.$fetch["text"].'
                             <br>';
                             if($fetch["video"] != ""){
                                echo'
                                    <div class="article-image">
                                      <video class="" style="height:200px; width:100%;" src="assets/img/school_vid/'.$fetch["video"].'" controls autoplay muted></video>
                                    </div>
                                '; 
                             }
                             if($fetch["quote"] != ""){
                                  echo'<blockquote class="wp-block-quote">
                                      <p>'.$fetch["quote"].'</p>
                                      <cite>Taqwa Schools</cite>
                                  </blockquote>';
                             }
                        echo'
                          </div>
                          
                            <div class="post-navigation">
                              <div class="navigation-links">
                                  <div class="nav-previous">
                                    <a href="#" onclick="goBack()">
                                    <i class="flaticon-left"></i>
                                    Go back
                                    </a>
                                  </div>
                                  <!-- <div class="nav-next">
                                    <a href="index.html">
                                    Next Post
                                    <i class="flaticon-right"></i>
                                    </a>
                                  </div> -->
                              </div>
                            </div>
                          
                        </div>
                      </div>
                        ';
                    }
                }
            
        ?>
         
=======
         <div class="col-lg-10 col-md-12">
            <div class="blog-details-desc">
               <div class="article-image">
                  <img src="assets/img/school_life/6.jpeg" alt="image">
               </div>
               <div class="article-content">
                  <div class="entry-meta">
                     <ul>
                        <li>
                           <span>Posted On:</span>
                           <a href="index.html">September 31, 2021</a>
                        </li>
                        <li>
                           <span>Posted By:</span>
                           <a href="index.html">John Anderson</a>
                        </li>
                     </ul>
                  </div>
                  <h3>Weather Evident Smiling Bed Against</h3>
                  <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                  <blockquote class="wp-block-quote">
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                     <cite>Taqwa Schools</cite>
                  </blockquote>
              </div>
              
               <div class="post-navigation">
                  <div class="navigation-links">
                     <div class="nav-previous">
                        <a href="index.html">
                        <i class="flaticon-left"></i>
                        Go back
                        </a>
                     </div>
                     <!-- <div class="nav-next">
                        <a href="index.html">
                        Next Post
                        <i class="flaticon-right"></i>
                        </a>
                     </div> -->
                  </div>
               </div>
             
            </div>
         </div>
       
>>>>>>> c70b5ea9d4313f9bd665a05ea8a4ef73f3c1f02f
      </div>
   </div>
</section>

<<<<<<< HEAD
<script>
function goBack() {
  window.history.back();
}
</script> 
=======
>>>>>>> c70b5ea9d4313f9bd665a05ea8a4ef73f3c1f02f
 
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

