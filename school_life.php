<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
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
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                     <h2>School Life</h2>
                     <ul>
                        <li><a href="index">Home</a></li>
                        <li>School life</li>
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
   

<section id="updates" class="blog-area pt-100 pb-100">
    <div class="container">
       <div class="section-title">
          <div class="bar"></div>
          <p>Explore the school's great activities.</p>
       </div>
       <div class="row">
         
       <?php 
          $db = mysqli_connect('localhost', 'taqwaschools', 'Point066@@', 'taqwaschools');
        
                $per_page_record = 10;  // Number of entries to show in a page.   
                // Look for a GET variable page if not found default is 1.        
                if (isset($_GET["next"])) {    
                    $page  = $_GET["next"];    
                }    
                else {    
                  $page=1;    
                }    
            
                $start_from = ($page-1) * $per_page_record; 
                $fetchyyy = mysqli_query($db,"SELECT * FROM `updates` WHERE type = 'school_life' ORDER BY id DESC LIMIT $start_from, $per_page_record");
             
            
             $rs_result =$fetchyyy;
        ?>
        
           
            <?php
                    if(mysqli_num_rows($fetchyyy) > 0){
                      while($fetch = mysqli_fetch_assoc($fetchyyy)){
                            echo'
                            
                             <div class="col-lg-6 col-md-6">
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
                                       <h3>
                                          <a href="single-blog.html">
                                            '.$fetch["title"].'
                                          </a>
                                       </h3>
                                       <p style="text-align: justify;">'.$fetch["text"].'</p>
                                       <!-- <a href="single-blog.html" class="read-more">
                                       Read More
                                       </a> -->
                                    </div>
                                 </div>
                            </div>
                            
                            ';
                      }
                    }
                
            ?>

          <div class="col-lg-6 col-md-6">
             <div class="single-blog">
                <div class="image">
                   <a href="#">
                   <img src="assets/img/school_life/1.jpeg" alt="image">
                   </a>
                   <div class="btn">
                      <a href="#">internship</a>
                   </div>
                </div>
                <div class="content">
                   <h3>
                      <a href="single-blog.html">
                        Internship Programmes
                      </a>
                   </h3>
                   <p style="text-align: justify;">
                     This is a follow-up program to one of our initiatives to enable our learners to practically see the way and manner of professionals practicing in their proposed career path. This helps to ease them into maturity, responsibility, and life in a guided way.
                     <br><br>
                     Again, these programmes are set to enable learners to see work patterns in different businesses and give their feedback on their experiences. Our staff will make unscheduled visits to our learners to see how they are faring in such organizations.
                     <br><br>
                     From our experience, this has enabled our learners, appreciate the efforts of their parents and build their love or dislike for a chosen career path affording them ample time to make necessary changes to their career paths.
                     </p>
                   <!-- <a href="single-blog.html" class="read-more">
                   Read More
                   </a> -->
                </div>
             </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/2.jpg" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">Robotics</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        Robotics
                     </a>
                  </h3>
                  <p style="text-align: justify;">
                    
                  Robotics, also known in the school as LEGO has become part of our curricula. It is aimed at sharpening the problem-solving abilities of our learners. It also unearths a passion for technology.
                     <br><br>
                  Taqwa emerged winners of the 2014 National Robot Olympiad which qualified us to participate in the 2014 International Robot Olympiad, held in Russia.
                     <br><br>
                  We also partook in the 2015 International Robot Olympiad, held in Qatar. Our prowess on the subject has ensured that the International Robot Olympiad has become an annual event for the school.

                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/3.jpg" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">Taqwa Schools</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        Pastoral Care
                     </a>
                  </h3>
                  <p style="text-align: justify;">
                    
                  Taqwa is an inclusive institution guided by its all-encompassing ethos. We are extremely proud of our faith, its values, its impact on humanity and its well-grounded etiquettes on every subject.
                     <br><br>
                  Our job is to ensure that all learners and teachers are able to live their lives according to the value of self-discipline, tolerance and mutual respect for one another regardless of our differences. These fundamentals underpin the Islamic faith.
                     <br><br>
                  Further to our religious beliefs, we want to groom our learners to be high achieving members in a multi-faceted world of strong and divergent views.
                     <br><br>
                  We are not associated with any religious group, neither do we speak the views of any existing or past religious groups or sect [if any].

                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/4.jpeg" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">Uniforms</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        Uniforms
                     </a>
                  </h3>
                  <p style="text-align: justify;">
                  
                     Our uniforms are made to be smart and practical. They are to exude prestige and responsibility in their appearance.
                     <br><br>
                     It makes every learner take pride in being part of the school. The hijab is a part of our uniform for the Muslim girls that choose to wear it.
                     <br><br>
                     However, we respect the dress demands of learners from other faiths and are open to discussing such demands during the learner’s induction.
                     <br><br>
                     Notwithstanding that the final decision rests with the School Administrator, no learner is forced to wear religious clothing of any faith.

                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/5.jpeg" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">Food and Catering</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        Food and Catering
                     </a>
                  </h3>
                  <p style="text-align: justify;">
                                    
                  We promote healthy food intake amongst our learners. To this extent we provide halaal meals for our learners.
                     <br><br>
                  We are open to catering for other cultures and faiths including vegetarian options.

                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/6.jpeg" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">Taqwa Schhols</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        In and Around the School
                     </a>
                  </h3>
                  <p style="text-align: justify;">
                     We have non muslim staff and celebrate selected secular holidays such as mother’s day. We do not pressure any learner to take part in any optional faith based activities.
                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/3.jpg" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">Spirituality</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        Spirituality
                     </a>
                  </h3>
                  <p style="text-align: justify;">
                    

                  Taqwa was founded on Islamic Values and has stood on such grounded principles.
                     <br><br>
                  We observe all daily prayers [both obligatory and voluntary prayers]. Our muslim learners are also expected to partake in quaran memorization before or after every prayer.
                     <br><br>
                  We have three dedicated Imams who rotate all prayers including friday prayers [Jumu’ah] amongst themselves.
                     <br><br>
                  As part of our learning process, we also nominate Imams [Junior
                     <br><br>
                  Imams] from the senior learners. This builds their self confidence and ability to speak publicly.

                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/7.jpeg" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">Health Bay</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        Health and Wellbeing
                     </a>
                  </h3>
                  <p style="text-align: justify;">

                  At Taqwa, we take the issue of health and wellbeing of our learners and staff with utmost importance. Our staff take responsibility for the academic performance and social well-being of each learner in their care. They along with the school, parents and/or guardians ensure the school provides the right care for the learners severally.
                     <br><br>
                  An established fabric of the school is our Sickbay which essentially meets the needs of learners who require immediate medical attention and health/hygiene education.
                     <br><br>
                  The Sickbay is led by a Matron with the support of another nurse. The Nursing team also contribute to the delivery of the school’s personal, social and health education [PSHE] programme.
                     <br><br>
                  Our Health policy can be read here

                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/8.jpeg" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">School Residence</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        School Residence
                     </a>
                  </h3>
                  <p style="text-align: justify;">


                     Over 30 to 70 learners register at Taqwa each session between the ages of 0 and 15 years.
                     <br><br>
                     Of the number, about 70% become school residents. Subsequent to learners joining the Taqwa Community as residents, save for the classroom, his residence will be the hub of his life in Taqwa under the care of House Master or House Mistress and the Matron of the Residence.
                     <br><br>
                     These officials are assisted by senior school residents of impeccable moral standards appointed as Hostel Captains. The Captains learners experience the ropes of responsibility while enjoying their stay in their residence.
                     <br><br>
                     Every school residence has sleeping facilities for each resident, common study, dining rooms and a laundry area manned by a dedicated laundry man.
                     <br><br>
                     The school residence is also internet enabled because we believe that teaching and learning must go beyond the classroom.
                     <br><br>
                     All school residents are entitled short holidays in December & April and are also entitled to a long holiday in July.
                     
                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="single-blog">
               <div class="image">
                  <a href="#">
                  <img src="assets/img/school_life/9.png" alt="image">
                  </a>
                  <div class="btn">
                     <a href="#">Bus Transit</a>
                  </div>
               </div>
               <div class="content">
                  <h3>
                     <a href="#">
                        Bus Transit
                     </a>
                  </h3>
                  <p style="text-align: justify;">

                     Taqwa offers this service to non resident learners who subscribe for the service at the beginning of the term.
                     <br><br>
                     We have invested in top range mid-size buses to convey our learners to and from school grounds to their homes within the fastest possible times in company of tested and responsible drivers and conductors or conductresses.
                     <br><br>
                     We have earmarked routes for each bus, however we are open to extending such routes upon requests.
                     <br><br>
                     This service is run by the Buildings and Facilities department of the school
                     
                    </p>
                  <!-- <a href="single-blog.html" class="read-more">
                  Read More
                  </a> -->
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-12">
              <div class="pagination-area">
                <?php  
                        $query = "SELECT COUNT(*) FROM updates WHERE type = 'school_life'";     
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
          <!-- <div class="col-lg-12 col-md-12">
             <div class="pagination-area">
                <a href="#" class="prev page-numbers">
                <i class="fa fa-chevron-left"></i>
                </a>
                <a href="#" class="page-numbers">1</a>
                <span class="page-numbers current" aria-current="page">2</span>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="next page-numbers">
                <i class="fa fa-chevron-right"></i>
                </a>
             </div>
          </div> -->
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

