<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrace</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body{
        font-family: 'Open Sans', sans-serif;
        overflow-x:hidden;
       
    }
    .bg-grey{
        /* background-color:grey; */
        background-image:url('Untitled design (2).png');
        
        background-size: contain;
}


 

    .cmeFormButtonWl, .cmeFormButton, .goLive, .btn-start-course, .start-enrolled-course {
    border-radius: 5px;
    border: solid 1px #d00062;
    background-color: #d00062;
    /* font-family: OpenSansBold; */
    font-size: 16px;
    color: #ffffff;
    float: right;
    cursor: pointer;
    padding: 0.375rem 10px;
    width: 195px;
    text-align: center;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

    .course-shortname {
    /* font-family: OpenSansRegular; */
    font-size: 12px;
    color: #33ccff;
    text-transform: uppercase;
    float: left;
    width: 100%;
    overflow: hidden;
}

.course-name {
    /* font-family: OpenSansBold; */
    font-size: 24px;
    color: #333333;
    float: left;
    font-weight: bolder;
}


.course-speaker {
    /* font-family: OpenSansRegular; */
    font-size: 14px;
    color: #333333;
    float: left;
    width: 100%;
    overflow: hidden;
    margin-bottom: 26px;
}

.course-speaker .name {
    /* font-family: OpenSansRegular; */
    font-size: 14px;
    color: #ff9933;
}
a {
    color: #c0392b;
    text-decoration: none;
}

.course-social-hld {
    float: left;
    width: 100%;
    /* overflow: hidden; */
    padding: 15px 20px 30px;
    border-top: 1px solid grey;
}

.share-icon {
    background-image: url(https://cdn.onference.in/images/cutouts/share.png);
    background-repeat: no-repeat;
    background-size: 18px 16px;
    background-position: center;
    width: 18px;
    height: 16px;
    float: left;
    margin-right: 10px;
    margin-top: 2px;
}

.course-desc-hld {
    float: left;
    width: 100%;
    overflow: hidden;
    padding: 0px 20px 25px;
}

.desc-head {
    /* font-family: OpenSansBold; */
    font-size: 16.5px;
    color: #333333;
    padding-bottom: 10px;
}

.description {
    /* font-family: OpenSansRegular; */
    font-size: 14px;
    color: #333333;
}

.fa{
    color:white;
    padding:10px;
    border-radius:50%;
}

#toggle,.share-list{
    display:none;
}

#myBtn{
    color:#33ccff;
    cursor: pointer;
}

.btn{
    display:none;
}

button:hover{
    background-color:#d00062cc;
    color:white;
    font-weight:bolder;
}

@media only screen and (max-width: 320px){
.course-name {
    font-size: 18px;
    padding-bottom: 5px;
}}
</style>
<body>
    <!-- navbar -->
    <div class="container-well">
<div class="m-4 pb-4">
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><img src="assets/img/AAG LOGO.png" class="logo" alt="integrace"></a>
            <!-- <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <a href="#" class="nav-item nav-link">Messages</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </div> -->
        </div>
    </nav>
</div>
<!-- div 1 -->
<div class="row pt-5 bg-grey">
<div class="col-md-2 "></div>
  <div class="col-md-8 text-center">
    <!-- <div class="pb-3">
      .col-md-4
    </div> -->
    <!-- video -->
    <!-- <video id="myVideo" width="640" height="360" controls>
      <source src="AWARD STAGE F-1 ANIMATION MUMBAI INDIANS.mp4" type="video/mp4" />
        
    </video> -->
<!-- <img src="thumbnail.png" alt="thumbnail" style="width: 100%;height: auto;">
<video id="myVideo" width="900" height="500" controls>
      <source src="AWARD STAGE F-1 ANIMATION MUMBAI INDIANS.mp4" type="video/mp4" />
     
      
        Your browser does not support the video tag.
    </video> -->
    <video id="myVideo" style="width: 100%;height: auto;" controls>
      <source src="AWARD STAGE F-1 ANIMATION MUMBAI INDIANS.mp4" type="video/mp4" />
     
      
        Your browser does not support the video tag.
    </video>
 
  </div>
  <div class="col-md-2 "></div>
</div>
<!-- div 2 -->
<div class="row">
<div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="pb-3">
    
    </div>
    <div class="row">
      <div class="col-md-12">
          


      <div class="course-name-hld ml-2">

<div class="course-shortname">Live On 12th June 22</div>

<div class="course-name-start mb-3">
<div>
    <span class="course-name mb-4">The Romance of the Obstetric Forceps</span>
    <!-- <span class="course-speaker">Speaker: <a target="_blank" href="/speaker/1/afg/628f41adef6c5d071810fb76" class="name">AFG</a></span> -->
     
  <a href="./quizfile/pretest.php">  <button class="cmeFormButton btn mb-2 mr-2"  id="btn1"  data-modal="enroll-with-login">  Next Module </button></a>
</div>
   

</div>

</div>


<div class="course-social-hld text-right ">
<!-- <hr> -->
                        <div class="course-share">

                        <div class="share"><i class="fa fa-share-square-o p-0" style="font-size:22px; color: #333333;" aria-hidden="true"></i>
                       <span>Share</span>
                    </div>

                         

                            <div class="share-list">
                            <i class="fa fa-facebook" style="background-color:rgb(59 89 152);padding: 10px 14px;" aria-hidden="true"></i>
                            <i class="fa fa-twitter" style="background-color:rgb(29 161 242)" aria-hidden="true"></i>
                            <i class="fa fa-envelope" style="background-color:rgb(204 204 204)" aria-hidden="true"></i>
                            <i class="fa fa-link" style="background-color:rgb(23 139 244)" aria-hidden="true"></i>
                            <i class="fa fa-whatsapp" style="background-color:rgb(77 194 71)" aria-hidden="true"></i>
                            </div>

                        </div>

                    </div>
                    
                    <div class="course-desc-hld">

                        <div class="desc-head"> <strong>Description</strong> </div>

                        <div class="description ddd-truncated" style=""><p>Association of Fellow Gynaecologists</p><p>Date: 12th June 2022 (Sunday)</p><p>Time: 11.00 AM To 01.00 PM (Indian Standard Time +05.30 GMT)</p><p><a href="https://drive.google.com/file/d/1uSA6z4sYjmtN6SdaX-gIZg-b9GE-9niY/view?usp=sharing">Click Here For Schedule</a></p><p></p><a class="toggle-show-more ddd-keep" href="javascript:void(0)"></a>
                    <div id="toggle">
                        <p>Note:</p>
                        <p>1.Please use Chrome/Safari Browser in case you are facing any issues.</p>
                        <p>2.No State Medical Council Points are allocated to the event.</p>
                        <p dir="ltr">3.No Certificate will be issued.</p>
                        <p dir="ltr"><strong>Contact Us</strong></p>
                        <p dir="ltr">You can reach us for any queries regarding login/ live session/ enrollment-&nbsp;contact@onference.in</p>
                        </div>
                    </div>
                    <a  id="myBtn" >[ Show more ]</a>
                    <hr>
                    </div>
                   
</div></div>
      <!-- <div class="col-md-6">
         
      </div> -->
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
</div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".share").click(function(){
    $(".share-list").toggle();
  });
});

$(document).ready(function(){
  $("#myBtn").click(function(){
      $("#myBtn").text("[ Show Less ]");
    $("#toggle").toggle();
  });
});
</script>

<script type="text/javascript">
      $(document).ready(function(){   
       $("#myVideo").bind('ended', function(){
        //   location.href="video.php";   
          $(".btn").css("display", "block");
        
       }); 
      });

      $(document).ready(function(){
  $("#btn1").click(function(){
    $("#myVideo1").css("display", "block");
    $(".btn").css("display", "none");
  });
});
//       $('#btn1').click(function() {
//     // location.href='video.php';
//     $("#myVideo1").css("display", "block");
// });
    </script>
</body>
</html>
<?php require_once "audi-script.php" ?>