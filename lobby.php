<?php
// require_once "logincheck.php";
// require_once "functions.php";

// $exhib_id = '913234bfe40b6433e81ceb7573bdd9b9c069ad2c08d89d3beb33bdc351ed5954';
// require_once "exhibcheck.php";
// $curr_room = 'bondk';
require_once "logincheck.php";
$curr_room = 'lobby';

?>
<?php require_once 'header.php';  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Integrace</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
#customers {
  /* font-family: Arial, Helvetica, sans-serif; */
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #166ab51a;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #166ab51a}

/* #customers tr:hover {background-color: #ddd;} */

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#166ab5;
  color: white;
}
</style>
</head>

<body>
<!-- <div id="mobile-portrait" class="">
    <img src="assets/img/rotatedevice.gif" alt="" class="center-device">
  </div> -->
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:contactus@integracehealth.com">contactus@integracehealth.com</a>
                <i class="bi bi-phone"></i>+91-022 68456900
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
                <a href="https://www.facebook.com/VKonnectHealth/" class="facebook"><i class="bi bi-facebook"></i></a>
                <!-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> -->
                <a href="https://www.linkedin.com/company/vkonnect-health/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->scoreboard
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="lobby.php" class="logo me-auto"><img src="logo-new.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  
                    <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                    <li><a class="nav-link scrollto" href="#departments">Modules</a></li>
                    <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
                    <li><a class="nav-link scrollto" href="#services">Certificate</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#scoreboard">Score Board</a></li> -->
                    <!-- <li><a class="nav-link scrollto" href="#appointment">Appointment</a></li> -->
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->
            <a href="logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Logout</a>
        </div>
        
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container hero2">
            <!-- <h1>Welcome to</h1> -->
            <!-- <img src="assets/img/AAG LOGO.png" class="img-fluid" alt=""> -->
            <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
           
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Rise in Infertility</h3>
                         

                            <p>A double-digit growth of infertility in India has made it a personal as well as public health issue, Among Indian population about 10-14 percent couples are currently affected with infertility, as per the Indian Society of
                                Assisted Reproduction (ISAR) estimates.
                                <span id="dots">...</span> </p>

                            <p><span id="more">  In urban areas, prevalence of infertility is higher compared to rural areas. In urban areas, one out of six couples is impacted. Research by Med Tech Company reveals that nearly 27.5 million couples actively trying to conceive suffer from infertility
                              in India. The number is estimated to rise by more than 10 per cent by 2020.
                            <br><br><b>Reasons for infertility </b><em>It is widely admitted that a modern lifestyle, rapid urbanization, hormonal changes (especially in prolactin levels), job pressures, stress, vehicular pollution, and postponing parenthood
                              are main reasons for infertility in India.</em> </span>
                            </p>

                            <div class="text-center">
                                <button onclick="myFunction()" id="myBtn" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></button>
                                <!-- <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Potential</h4>
                                        <p>India sees about 2-2.5 lakh IVF cycles in a year and has the potential to do about 5-6 Lakh IVF cycles. While there are over 20,000 ART clinics across the country </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Estimated</h4>
                                        <p>The number of IVF cycles per couple is estimated to increase from 1.5 in 2015 to 3.5 lac in 2022.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                             
                                    <div class="icon-box1 mt-5 mt-xl-0">
                                        <i class="mt-5 bx bx-"></i><br>
                                        <!-- <h4 class="mt-4"> <a href="./quizfile/index.php" class="btn-get-started  btn-start bg-primary scrollto">Get Started</a></h4> -->
                                        <button onclick="document.getElementById('id01').style.display='block'" class="btn-get-started  btn-start bg-primary scrollto">Get Started</button>
                                        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
                                        
                                        <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> -->
                                    </div>


                                <div id="id01" class="w3-modal mt-5">
                                    <div class="w3-modal-content w3-card-4 w3-animate-zoom mt-5" style="max-width:600px">

                                    <div class="w3-center"><br>
                                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                        <!-- <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top"> -->
                                    </div>

                                    <form   class="w3-container"action='./quizfile/reg.php' method="post" role="form">
                              
                                    <!-- <form class="w3-container" action="./quizfile/index.php" method="post"> -->
                                        <div class="w3-section">
                                        <label><b>To avail certification and credit hours, add your Registration Number</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="number"  placeholder="Enter Registration number" name="doctors_id" required>
                                        <!-- <label><b>Password</b></label>
                                        <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required> -->
                                        <button class="w3-button w3-block w3-blue w3-section w3-padding" id="formsubmit" type="submit">Submit and Continue</button>
                                        <!-- <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me -->
                                        </div>
                                    </form>

                                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                        <!-- <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button> -->
                                        <!-- <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span> -->
                                    </div>

                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                              <!-- Modal content--> 
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End Why Us Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                <h2>Certificate</h2>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-3 d-flex align-items-stretch"></div>
                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch pl-5">
                        <!-- <div class="icon-box"> -->
                        <img src="assets/img/interconnected-icon-19.jpg" alt="" class="img-fluid" style="height:100px;width:120px">
                        <p class="m-1"><h6>To Access The Module</h6></p>
                            <!-- <div class="icon"><i class="fas fa-heartbeat"></i></div>
                            <h4><a href="">Osteoporosis</a></h4>
                            <p>Osteoporosis is a bone disease in which bones become weak, and even a simple fall or bump can cause a bone to break.</p> -->
                        <!-- </div> -->
                    </div>

                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 pl-5">
                        <!-- <div class="icon-box"> -->
                            <img src="assets/img/certi.png" alt="" class="img-fluid" style="height:105px;width:120px">
                          <p class="m-2"> <h6>Avail Certification & Cerdits Hours</h6></p> 
                            <!-- <h4><a href="">Osteoarthritis</a></h4>
                            <p>Osteoarthrithis (OA) is a chronic, progressive musculoskeletal disorder characterized by gradual loss of cartilage in joints which results in bones rubbing together and creating stiffness, pain, and impaired movement.</p> -->
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch"></div>
                    <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-hospital-user"></i></div>
                            <h4><a href="">Pain-management</a></h4>
                            <p>Pain is one way the body tells you something's wrong and needs attention. Pain is classified into acute pain & chronic pain. Acute pain can last a moment; rarely does it become chronic pain. Chronic pain persists for long periods.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-dna"></i></div>
                            <h4><a href="">Antibiotics</a></h4>
                            <p>An antibiotic is a type of antimicrobial substance active against bacteria and is the most important type of antibacterial agent for fighting bacterial infections. Antibiotic medications are widely used in the treatment and
                                prevention of such infections. They may either kill or inhibit the growth of bacteria.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-wheelchair"></i></div>
                            <h4><a href="">Anti-Ulcerant</a></h4>
                            <p>Anti Ulcer Drugs are medicines used to treat ulcers in the stomach and the upper part of the small intestine. Ulcers are sores or raw areas that form in the lining of the stomach or the duodenum (the upper part of the intestine).</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-notes-medical"></i></div>
                            <h4><a href="">Fungal Infection</a></h4>
                            <p>A fungus is a micro organism that invades the tissue causing infection of the skin, bones and vaginal tract or urinary tract. It can even affect the whole body depending on the severity of infection.</p>
                        </div>
                    </div> -->

                </div>

            </div>
        </section>
        <!-- End Services Section -->
        <!-- ======= Services Section ======= -->
        <section id="about" class="about">
            <div class="container">
            <!-- <div class="section-title"> -->
                    <!-- <h2>Certificate</h2> -->
                    <!-- <p>Evolving into Bone Health, Pain Management and Gynee therapy areas</p> -->
                <!-- </div> -->
                <!-- <div class="row mb-4">

                    <div class="col-xl-2 col-lg-2"></div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                        <div class="col-xl-2 col-lg-2"></div>
                    <div class="col-xl-2 col-lg-2">
                    <img src="assets/img/interconnected-icon-19.jpg" alt="" class="img-fluid" style="height:105px;width:110px">

                    </div>
                    <div class="col-xl-2 col-lg-2 mt-2 mr-4">
                    <h5 >To Access The Module</h5>
                    </div>
                    
                    <div class="col-xl-2 col-lg-2">
                    <img src="assets/img/certi.png" alt="" class="img-fluid" style="height:110px;width:110px">
                    
                    </div>
                    <div class="col-xl-2 col-lg-2 mt-2">
                    <h5>Avail Certification & Cerdits Hours</h5>
                    </div>
                    <div class="col-xl-2 col-lg-2"></div>
                    </div>
                    </div>
                    <div class="col-xl-2 col-lg-2"></div>
                </div> -->
              

                <div class="row">
                    <div class="col-xl-3 col-lg-3"></div>
                  
                    <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <!-- <div class="section-title">
                    <h2>Certificate</h2>
                    </div> -->
                        <!-- <a href="https://www.youtube.com/watch?v=MsXEg_-xe7o" class="glightbox play-btn mb-4"></a> -->
                    </div>
                    <div class="col-xl-3 col-lg-3"></div>
                </div>

            </div>
        </section>
        <!-- End Services Section -->
      
      
           <!-- ======= Departments Section ======= -->
           <section id="departments" class="departments">
            <div class="container">

                <div class="section-title">
                    <h2>All About Gestation Modules Information</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p> -->
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Module 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Module 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Module 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Module 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Module 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Module 6</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>MODULE 1-PHYSIOLOGY OF THE MENSTRUAL CYCLE</h3>
                                        <p class="fst-italic">Module 1 will take you in depth on the phases of normal menstrual cycle, right from follicular phase, folliculogenesis, pre-ovulatory period, ovulation, luteal phase, hormonal profile during the menstrual cycle,
                                            female sexual cycle, endometrial changes during the menstrual cycle, menstruation, and role of hypothalamus in menstrual cycle.
                                        </p>
                                        <button onclick="document.getElementById('id01').style.display='block'" class="btn-get-started  btn-start bg-primary scrollto">Get Started</button>
                                        <!-- <h4 class="mt-4"> <a href="./quizfile/index.php" class="btn-get-started  btn-start bg-primary scrollto">Get Started</a></h4> -->
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/module/1.png" alt="" class="img-fluid">
                                        <!-- <img src="assets/img/module/1.png" alt="" class="img-fluid" onclick="document.getElementById('modal10').style.display='block'" class="w3-hover-opacity"> -->
                                        
                                    </div>
                                    <!-- <div id="modal10" class="w3-modal w3-animate-zoom" onclick="this.style.display='none'">
                                        <img class="w3-modal-content" src="assets/img/module/1.png" style="width:540px;height:500px;text-align:center" >
                                    </div> -->
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>MODULE 2-PHYSIOLOGY OF CONCEPTION</h3>
                                        <p class="fst-italic">Module 2 enables a participant to get in-depth knowledge on physiology of conception. Module would cover topics and details about Oocyte, sperm, fertilization, morula, stages of blastocyst development, implantation,
                                            mediators of implantation and factors affecting implantation.</p>



                                        <script type = "text/javascript">
      
                                        function Redirect() {
                                            <?php
                                                $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_assoc($result);
                                                    if(isset($row['posttest'])==1){
                                            ?>
                                                window.location = "./quizfile/pretest2.php";
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                               alert("KINDY FINISH MODULE 1");
                                            <?php
                                                }
                                            ?>
                                            }
                                        
                                        </script>

                                        <!-- <button onclick="Redirect()" class="btn-get-started  btn-start bg-primary scrollto">Get Started</button> -->
                                            <h4 class="mt-4"> <a href="./quizfile/pretest2.php" class="btn-get-started  btn-start bg-primary scrollto">Get Started</a></h4>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/module/2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3 style="text-transform: uppercase;">Module 3-Luteal Phase Defect</h3>
                                        <p class="fst-italic">Coming to module 3, the participant will be able to deep dive in the topic: “luteal phase defect”. Module covers prevalence, pathophysiology of LPD, clomiphene and LPD, gonadotrophins and LPD, and exercise and LPD.
                                            It also includes, recurrent spontaneous abortion, IVF cycles and LPD, how to suspect LPD, diagnosis of LPD, treatment of LPD, role of progesterone, dydrogesterone and GnRh agonist in LPS.</p>
                                            <script type = "text/javascript">
      
                                        function Redirect_one() {
                                            <?php
                                                $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_assoc($result);
                                                    if(isset($row['posttest1'])==1){
                                            ?>
                                                window.location = "./quizfile/pretest3.php";
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                               alert("KINDY FINISH MODULE 2");
                                            <?php
                                                }
                                            ?>
                                            }
                                        
                                        </script>

                                        <!-- <button onclick="Redirect_one()" class="btn-get-started  btn-start bg-primary scrollto">Get Started</button> -->
                                        <h4 class="mt-4"> <a href="./quizfile/pretest3.php" class="btn-get-started  btn-start bg-primary scrollto">Get Started</a></h4>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/module/3.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3 style="text-transform: uppercase;">Module 4-Recurrent Implantation Failure</h3>
                                        <p class="fst-italic">Module 4 will enable learning on Recurrent implantation failure. The topic will be covered in detail, including the following pointers: definition, incidence, etiology, gamete/embryo quality, uterine factors, acquired
                                            uterine anomalies, investigations, evaluation of embryo, endometrial receptivity, and management.
                                        </p>
                                        <script type = "text/javascript">
      
                                        function Redirect_two() {
                                            <?php
                                                $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_assoc($result);
                                                if(isset($row['posttest3'])==1 && !empty($row['posttest3']) && ($row['posttest3'])!=Null){
                                                    // if(isset($row['posttest3']) ==1 ){
                                            ?>
                                                window.location = "./quizfile/pretest4.php";
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                               alert("KINDY FINISH MODULE 3");
                                            <?php
                                                }
                                            ?>
                                            }
                                        
                                        </script>

                                        <!-- <button onclick="Redirect_two()" class="btn-get-started  btn-start bg-primary scrollto">Get Started</button> -->
                                        <h4 class="mt-4"> <a href="./quizfile/pretest4.php" class="btn-get-started  btn-start bg-primary scrollto">Get Started</a></h4>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/module/4.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3 style="text-transform: uppercase;">Module 5-Investigations of male and female infertility</h3>
                                        <p class="fst-italic">Module 5 will take the participant through Investigations of male and female infertility. This module will cover all topics including initial assessment, physical examination, examination of uterus, diagnostic approach
                                            to infertility in woman, test for ovulatory function, test for ovarian reserve, AMH levels and advantages, tubal evaluation test, tests of limited clinical utility, investigations of male infertility, semen
                                            analysis-prerequisites, additional tests, endocrine testing, scrotal and transrectal ultrasound.</p>
                                            <script type = "text/javascript">
      
                                        function Redirect_three() {
                                            <?php
                                                $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_assoc($result);
                                                if(isset($row['posttest5'])==1 && !empty($row['posttest5']) && ($row['posttest5'])!=Null){
                                                    // if(isset($row['posttest3']) ==1 ){
                                            ?>
                                                window.location = "./quizfile/pretest5.php";
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                                alert("KINDY FINISH MODULE 4");
                                            <?php
                                                }
                                            ?>
                                            }
                                        
                                        </script>

                                        <!-- <button onclick="Redirect_three()" class="btn-get-started  btn-start bg-primary scrollto">Get Started</button> -->
                                        <h4 class="mt-4"> <a href="./quizfile/pretest5.php" class="btn-get-started  btn-start bg-primary scrollto">Get Started</a></h4>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/module/5.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-6">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>MODULE 6-INTRAUTERINE INSEMINATION</h3>
                                        <p class="fst-italic">Module 6 teaches you everything about IUI. The participant will be able to gain knowledge on all points including patient selection- male and female partners, contraindications, prognostic factors, screening, stimulation,
                                            clomiphene citrate, letrozole, combination of Cc + Gn, dosage, step up, step down, sequential protocol, cancellation of cycle, monitoring, trigger and timing, sperm preparation, methodology of IUI, complications,
                                            LPS and follow up, failure of IUI.</p>
                                            <script type = "text/javascript">
      
                                    function Redirect_four() {
                                        <?php
                                            $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
                                            $result=mysqli_query($conn,$sql);
                                            $row=mysqli_fetch_assoc($result);
                                            if(isset($row['posttest6'])==1 && !empty($row['posttest6']) && ($row['posttest6'])!=Null){
                                                // if(isset($row['posttest3']) ==1 ){
                                        ?>
                                            window.location = "./quizfile/pretest6.php";
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                            alert("KINDY FINISH MODULE 5");
                                        <?php
                                            }
                                        ?>
                                        }
                                    
                                    </script>

                                    <!-- <button onclick="Redirect_four()" class="btn-get-started  btn-start bg-primary scrollto">Get Started</button> -->
                                    <h4 class="mt-4"> <a href="./quizfile/pretest6.php" class="btn-get-started  btn-start bg-primary scrollto">Get Started</a></h4>
                                            <!-- <b class="text-warning">We will be Live on 1 July 2022; 10:00 AM Onwards</b>
                                        <h4 class=""> <a href="" class="btn-get-started  btn-start bg-primary scrollto">Get Started</a></h4> -->
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/module/6.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Departments Section -->
       <!-- ======= Counts Section ======= -->
       <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fas fa-file-video"></i>
                            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Live Modules</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="fas fa-hospital-user"></i>
                            <!-- <span data-purecounter-start="0" data-purecounter-end="2105" data-purecounter-duration="1" class="purecounter"></span> -->
                            <?php 
                   $query = "SELECT id FROM tbl_users";$query_run=mysqli_query($conn,$query);$row=mysqli_num_rows( $query_run); echo '<span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1">'.$row.'</span>';
                    // echo '<span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>'?>
                            <p>Registered Participants</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0"><div class="count-box"><i class="fas fa-user-clock"></i><?php 
                 //   $query = "SELECT id FROM tbl_users";$query_run=mysqli_query($conn,$query);$row=mysqli_num_rows( $query_run); echo '<span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1">'.$row.'</span>';
                    // echo '<span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>'?>
                    <!-- <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span> -->
                    <div id="onlineCount"><b>Online:</b> 1</div>
                    <p>Live Participants</p></div> </div>
                    <!-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Registration Count</p>
                        </div>
                    </div> -->

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <?php 
                    $query = "SELECT posttest FROM `tbl_users` WHERE posttest='1'";$query_run=mysqli_query($conn,$query);$row=mysqli_num_rows($query_run); echo '<span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1">'.$row.'</span>';
                    // echo '<span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>'?>
                            <p>Module Completed</p>
                        </div>
                    </div>

                </div>

            </div>
</section>
        <!-- End Counts Section -->
                  <!-- start videos Section ======= -->
 <section >
            <div class="container">
            <div class="container">
    <div class="section-title">
        <h2>Introductory Videos</h2>
                   
    </div>
                <div class="row text-center">
                    <div class="col-md-6 mt-2">
                    <video width="480" height="360"  style="width: 100%;height: auto;" controls controlsList="nodownload" disablePictureInPicture>
  <source src="https://player.vimeo.com/progressive_redirect/playback/729188982/rendition/720p/file.mp4?loc=external&signature=b69ebdb69a116920e578c2d15b98c26355482d5c7c9c9aa80a2b3f7fd717c59e" type="video/mp4">
  <source src="Dr. Poonam Shah.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<h3>Dr. Poonam Shah</h3>
<h4>Manager- Medical Affairs

Integrace Private Limited</h4>
                    </div>
                    <div class="col-md-6 mt-2">
                    <video width="480" height="360" style="width: 100%;height: auto;" controls controlsList="nodownload" disablePictureInPicture >
  <source src="Dr.Gopinath Intro.mp4" type="video/mp4">
  <source src="Dr.Gopinath Intro.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<h3>Dr. Gopinath</h3>
<h4>
Director & Senior Consultant Institute of
OBG & IVF 
</h4>
<h4>SRM Institute for
Medical Sciences , Vadapalani Chennai .</h4>
                    </div>
                </div>

            </div>
        </section>
        <!-- End videos Section -->
        <!-- ======= Doctors Section ======= -->
  <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Our Maestros</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p> -->
                </div>

                <div class="row">

                    <!-- <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/Picture1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>DR. PRIYA SELVARAJ</h4>
                                <span>MD DNB MCE MNAMS FICOG</span>
                                <p>ASSOCIATE DIRECTOR, GG HOSPITAL, CHENNAI</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/Picture2.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>DR. P. M. GOPINATH </h4>
                                <span>MD  DGO  FMMC  FICS  FICOG  MBA ASRM Certified ANDROLOGIST </span>
                                <p>Director & Senior Consultant Institute of OBG & IVF SRM Institute for Medical Sciences , Vadapalani Chennai .
                                </p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/D-1 REVISED.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>DR. PRIYA SELVARAJ</h4>
                                <span>MD DNB MCE MNAMS FICOG</span>
                                <p>ASSOCIATE DIRECTOR, GG HOSPITAL, CHENNAI</p>
                                <h4>SCIENTIFIC AND CLINICAL  DIRECTOR </h4>
                                <!-- <span>Cardiology</span>-->
                                <h6>
                                <p>Fertility  Research and Women’s specialty <br>center at GG Hospital</p>Widely trained in Clinical and ART procedures <br>with more than 20 years of experience<p>
                                    Credited with achievements in the field of ART<br> from 2008 – 2020
                                   </p>Has many Journal articles and chapter publications <br>to her credit <p>
                                   Faculty in many national conferences <br>and presented papers at International conferences
                                    </p> 
                                    </h6>
                                    <h4>AFFILIATIONS </h4><p> Executive committee member - <br> ACE, FPS(I)
                                   Treasurer -  IFS TN Chapter</p>
                                           
                                  <h4> AREAS OF INTEREST:</h4>   
                                    <h6>
                                        <p> Onco-fertility and Fertility preservation techniques</p>
                                        <p> Pre-implantation genetic diagnosis and screening</p>
                                        <p> IVF related obstetrics </p>
                                        </h6>
                                <!-- <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/D-2 REVISED.jpg" width="100%" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>DR. P. M. GOPINATH </h4>
                                <span>MD  DGO  FMMC  FICS  FICOG </br> MBA ASRM Certified ANDROLOGIST </span>
                                <p>Director & Senior Consultant Institute of <br>OBG & IVF SRM Institute for Medical Sciences ,<br> Vadapalani Chennai .
                                </p>
                                <h4>PRESENT DESIGNATION:</h4>
                                <p>Director & Senior Consultant Institute of<br> OBG & IVF SRM Institute for<br> Medical Sciences , Vadapalani  Chennai .</p>
                                <h4>AFFILIATIONS:</h4>
                            
                                <p>PRESIDENT  -Fertility Preservation Society of India <br>
                                MEMBER - International Fertility Preservation Society<br>
                                Founder President  - Society of<br> Vaginal Surgeons of India TN branch<br>
                                Founder Secretary IFS Tamil Nadu chapter<br>
                                Member of IAGE / ISAR / ESHRE / ASRM 
                                </p>
                                <h4>ACHIEVEMENTS:</h4>
                            
                                <p>Invited Faculty in various national & international conferences <br>
                                Speciality Training in Fertility Preservations-<br>
                                Sheba Medical Centre, Israel <br>
                                Former Prof of O & G Madras Medical College<br>
                                Past President - OGSSI<br>
                                Awarded ‘Leading lights in ART’ in FERTIVISION 2018 in Kochi <br>
                                Awarded Ikon of the year in IVF south India 2019</p>
                                <!-- <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
  </section>
        <!-- End Doctors Section -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <!-- <div class="row">
                    <div class="col-xl-3 col-lg-3"></div>
                  
                    <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative"> -->
                    <!-- <div class="section-title">
                    <h2>Certificate</h2>
                    </div> -->
                        <!-- <a href="https://www.youtube.com/watch?v=MsXEg_-xe7o" class="glightbox play-btn mb-4"></a> -->
                    <!-- </div>
                    <div class="col-xl-3 col-lg-3"></div>
                </div> -->
                    <div class="row">
                    <div class="col-xl-1 col-lg-1"></div>
                    
                    <div class="col-xl-10 col-lg-10 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <div class="section-title">
                    <h2>There is a high demand for fertility practitioners in India</h2>
                    </div>
                    
                        <p>Research states that ethnicity also has a major impact on fertility. A study involving Spanish (n=229) and Indian women (n=236), in 2014, reported that:
                        </p>
                        <em>These factors combined make India an infertility capital with a huge potential for reproductive medicine. </em>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Reason I</a></h4>
                            <p class="description">Indian women had lower Anti-Mullerian Hormone levels (AMH), higher Follicular Stimulating Hormone (FSH) levels, and a longer duration of infertility despite being significantly younger.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-spa"></i></div>
                            <h4 class="title"><a href="">Reason II</a></h4>
                            <p class="description">Indian women had an earlier onset of decline in Antral Follicular Counts (AFC), nearly 6.3 years earlier than the Spanish cohort.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Reason III</a></h4>
                            <p class="description">Despite younger age and similar embryo quality, Indian American women had a significantly lower live birth rate following IVF than white American women (24 per cent versus 41 per cent, respectively) suggesting poorer ovarian
                                reserve. </p>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-hive"></i></div>
                            <h4 class="title"><a href="">Reason IV</a></h4>
                            <p class="description">Lower IVF success rates, longer duration of infertility, lower AFC and AMH levels in Indian and South Asian women, occurring at a younger age compared to Caucasians, suggest poor ovarian reserve and an earlier onset of infertility.</p>
                        </div>

                        <div>
                            <p><b>
                                All about Gestation is 1st time attempt from Integrace is bringing the opportunity to convert a normal clinic into a certified “Fertility Clinic”
                              </b>
                            </p>
                            <p>References:
                            <br>
                           1. Express healthcareare.in/interviews/india-can-be-the-worlds-capital-for-ivf-treatment-in-the-next-five-years/430491/.<br>
                           2. The challenges for fertility treatment in India | Parenting News, The Indian Express<br>
                           3. Ethnicity as a determinant of ovarian reserve: Differences in ovarian aging between Spanish and Indian women<br>
                           4. Fertility segment in India to see quick growth; onus on healthcare providers to make it accessible and affordable</p>
                            <p><i>All About Gestation is accredited with credit points through SRM institute TN
                              </i></p>


                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>

            </div>
        </section>



    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Integrace Pvt Ltd:</h3>
                      <p>  SF-A-06, ART GUILD HOUSE,<br>
                            LBS MARG, KURLA WEST MUMBAI<br>
                             400070<br>
                        <!-- <p>SF-A-06, ART GUILD HOUSE,<br>
                            LBS MARG, KURLA WEST<br>
                            MUMBAI 400070<br>
                      -->
                            <strong>Phone:</strong>+91-022 68456900<br>
                            <strong>Email:</strong>contactus@integracehealth.com<br>
                        </p>
                        <br>
                        <img src="AAG-003 (2).png" alt="" height="180" width="260" style="border:0px;">
                    </div>

                   

                    <div class="col-lg-3 col-md-6 footer-links">
                        <!-- <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul> -->
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <!-- <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form> -->
                    </div>

                    <!-- <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span> COACT</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                   <!-- Designed by <a href="https:// /">BootstrapMade</a>-->
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                <a href="https://www.facebook.com/VKonnectHealth/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                <a href="https://www.linkedin.com/company/vkonnect-health/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
      
</body>
<?php require_once "commons.php" ?>

<?php require_once "scripts.php" ?>
</html>
<?php require_once "ga.php"; ?>
<?php require_once "audi-script.php" ?>
<?php require_once 'footer.php';  ?>