<?php

$database= mysqli_connect('localhost', 'root', '', 'taqwaschools');
date_default_timezone_set("Africa/Lagos");
if(!$database){
    die("Could not connect to mysql".mysqli_error($database));
}

?>
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
    <!-- <div class="preloader">
      <div class="preloader">
        <span></span>
        <span></span>
      </div>
    </div> -->
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
                     <h2>Add Update</h2>
                     <ul>
                        <li><a href="index">Home</a></li>
                        <li>Add Update</li>
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
   
   
      <div class="row">
        <div class="col-2"></div>
        <div class="comments-area col-8">
              
          <div class="comment-respond">
            <?php
              if(isset($_POST['submit'])){
   
                $title = mysqli_real_escape_string($database,$_POST['title']);
                 $text = mysqli_real_escape_string($database,$_POST['text']);
                $quote = mysqli_real_escape_string($database,$_POST['quote']);
                //  $picture = mysqli_real_escape_string($database,$_POST['picture']);
                // $video = mysqli_real_escape_string($database,$_POST['video']);
                 $type = mysqli_real_escape_string($database,$_POST['type']);
                 $date = date("Y/m/d - h:i:sa");
                  /////////////////////////////////////////////////////////////////////////////////////////////
                      $picture_name =$_FILES['picture']['name'];
                      $picture_type =$_FILES['picture']['type'];
                      $picture_tmpname =$_FILES['picture']['tmp_name'];
                      $picture_error =$_FILES['picture']['error'];
                      $picture_size =$_FILES['picture']['size'];
                      if(!empty($picture_name)){     
                          //getting the extension
                          $file_ext = explode('.', $picture_name);
                          $pic_ext = strtolower(end($file_ext));
                          //allowed extensions
                          $extensions = array('jpg','png','jpeg','svg');
                          if (in_array($pic_ext, $extensions )) {
                              if ($picture_error === 0) {
                                      if ($picture_size < 3000) {
                                          $file_newname = uniqid('', true);
                                          $picture_name = $file_newname.".".$pic_ext;
                                          $path = 'assets/img/school_life/'.$picture_name;
                                          move_uploaded_file($picture_tmpname,$path);
                                              $picture = $picture_name;
                                      }else{
                                        echo '<div class="alert alert-danger">Image should not be greater than 3Mb</div>';
                                        $picture = "";
                                      }
                              }
                          }
                        }else{
                          $picture = "";
                        }
                        ///////////////////////////videos//////////////////////
                        $picture_name =$_FILES['video']['name'];
                        $picture_type =$_FILES['video']['type'];
                        $picture_tmpname =$_FILES['video']['tmp_name'];
                        $picture_error =$_FILES['video']['error'];
                        $picture_size =$_FILES['video']['size'];
                        if(!empty($picture_name)){     
                            //getting the extension
                            $file_ext = explode('.', $picture_name);
                            $pic_ext = strtolower(end($file_ext));
                            //allowed extensions
                            $extensions = array('mpeg','ogg','mp4','webm','3gp','mov','flv','avi','wmv','ts');
                            if (in_array($pic_ext, $extensions )) {
                                if ($picture_error === 0) {
                                        if ($picture_size < 100000) {
                                            $file_newname = uniqid('', true);
                                            $picture_name = $file_newname.".".$pic_ext;
                                            $path = 'assets/img/school_vid/'.$picture_name;
                                            move_uploaded_file($picture_tmpname,$path);
                                                $video = $picture_name;
                                        }else{
                                          echo '<div class="alert alert-danger">video too large</div>';
                                          $video = "";
                                        }
                                }
                            }
                          }else{
                            $video = "";
                          }
                  ////////////////////////////////////////////////////////////////////////////////////////////// 
                if (empty($title) || empty($text) || empty($quote) || empty($type) ) {
                     echo '<div class="alert alert-danger">No field should be left empty</div>';
                }else{
              
                   
                    $fet = mysqli_query($database, "INSERT INTO `updates` (`id`, `type`, `picture`, `video`, `title`, `text`, `quote`, `date_added`) 
                        VALUES ('', '$type', '$picture', '$video', '$title', '$text', '$quote', '$date');");
              
                    if ($fet) {
                      echo '<div  class="alert alert-success">Post added succesfully.</div>';
                    }else{
                      echo '<div class="alert alert-danger">Something went wrong. Please retry</div>';
                    }
                }
               
              }
            ?>
              <h3 class="comment-reply-title">Post an update</h3>
              <form class="comment-form" action="" method="post" enctype="multipart/form-data">
              <p class="comment-form-comment">
                    <label>Title <span class="required">*</span></label>
                    <input type="text"  name="title" required="required">
                </p>
                <p class="comment-form-comment">
                    <label>Post</label>
                    <textarea name="text" id="comment" required="required"></textarea>
                <!-- include libraries(jQuery, bootstrap) -->
													 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
													<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
													
													<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
													<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
													<!-- summernote css/js -->
													<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
													<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
													<script type="text/javascript">
														$('#comment').summernote({
															height: 300
														});
													</script>
                </p>
                <p class="comment-form-comment">
                    <label>Quote <span class="required">*</span></label>
                    <input type="text" name="quote" required="required">
                </p>
                <p class="comment-form-comment">
                    <label>Picture <span class="required">*</span></label>
                    <input type="file" accept="image/*"  name="picture" class="form-control">
                </p>
                <p class="comment-form-comment">
                    <label>Video <span class="required">*</span> <small>Max 3MB</small></label>
                    <input type="file" accept="video/*"  name="video"  class="form-control">
                </p>
                <p class="comment-form-comment">
                    <label>Type <span class="required">*</span> <small>Max 10MB</small></label>
                    <select name="type" required="required" class="form-control">
                       <option value="school_life">School Life</option>
                       <option value="update" selected>Update</option>
                    </select>
                </p>
                <p class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Save Post">
                </p>
              </form>
          </div>
        </div>
      </div>

 
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

