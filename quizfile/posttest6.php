<?php
require_once "../logincheck.php";
require_once "../functions.php";

$exhib_id = '6791545f8c2e37bf00ed5bcff5a40e8265c588742f154f49024247f80a57d3a8';
require_once "../exhibcheck.php";
$curr_room = 'posttest_module6';
?>
<title>Integrace</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Roboto&family=Tiro+Bangla&display=swap');
     :root {
        /* --body-bg: #d99e55;
        ; */
        --start_quiz-c: #1d9eab;
        --white: rgba(255, 255, 255, 0.4);
        --bg-button: #e0e0e0;
        /* --right: #87e487;
        --wrong: #f19a9a; */
        --right: #e0e0e0;
        --wrong: #1d9eab;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: "Raleway", sans-serif;
        height: 100vh;
        background-image: url("medical-education-2.png");
        /* background-image:linear-gradient(#155091, transparent); */
        background-size: cover;
        
    }
    
    input,
    button,
    h1,
    span {
        outline: 0;
        border: 0;
        font-family: "Raleway", sans-serif;
    }
    /* center all box  */
    
    .start{
        position: absolute;
        top:30%;
    left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50px;
        /* background: var(--white); */
        background-color:#1977cc !important;
        /* box-shadow: 15px 15px 24px #5f7197, -15px -15px 20px #df0e86; */
        box-shadow: 15px 15px 24px #5f7197;
        
    }

    .quiz_container,
    .result_box {
        position: absolute;
        top:60%;
    left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50px;
        /* background: var(--white); */
         background:white;
         
        /* background-color:#1977cc !important; */
        /* box-shadow: 15px 15px 24px #5f7197, -15px -15px 20px #df0e86; */
        box-shadow: 15px 15px 24px #5f7197;
        
    }
    .result_box{
  
    padding: 138px;
    width: 500px;
    height: 50%;
    border-radius: 5px;
 
 }  
    .start #start_quiz {
        padding:16px 30px;
    border-radius: 50px;
    /* color: var(--start_quiz-c); */
    /* color: #155091; */
    color: #fff;
    font-size: 1.4rem;
    /* width: 135%; */
    /* border-right: 3px solid #155091; */
    /* border-bottom: 5px solid #155091;
    border-right: 4px solid #155091; */
    }
    /* quiz box  */
    
    .quiz_container {
        border-radius: 20px;
        padding: 20px;
        width: 600px;
        display: none;
    }
    /* quiz_text  */
    
    .quiz_container .quiz_text {
        margin-bottom: 20px;
    }
    
    .quiz_container .quiz_text h1 {
        font-size: 1.5rem;
        letter-spacing: 2px;
        text-align: center;
    }
    /* quiz_box  */
    
    .quiz_box {
        padding: 10px 5px;
    }
    
    .quiz_box .quiz_question h1 {
        font-size: 1.1rem;
    }
    
    .quiz_box .quiz_question p {
        display: inline;
    }
    /* options  */
    
    .option_list {
        margin-top: 15px;
        font-size: 1rem;
        padding: 5px 15px;
        background-color: var(--bg-button);
        border-radius: 5px;
        cursor: pointer;
        transition: 0.5s ease;
        user-select: none;
        /* box-shadow: 1px 1px 8px #bebebe, -1px -1px 20px #ffffff */
    }
    
    .options .option_list:hover {
        background-color: var(--start_quiz-c);
    }
    
    /* .options .option_list.correct {
        background-color: var(--right);
    } */
    
    /* .options .option_list.wrong {
        background-color: var(--wrong);
    } */
    .options .option_list.selectedAnswer {
        background-color: var(--wrong);
    }
    
    .disabled {
        pointer-events: none;
    }
    /* footer  */
    
    footer {
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        user-select: none;
    }
    
    .center {
        display: flex;
        font-size: 2vmin;
        margin-left: 6px;
    }
    
    footer .buttons {
        margin-right: 6px;
    }
    
    .btn {
        padding: 7px 15px;
        border-radius: 50px;
        /* background: var(--start_quiz-c); */
        background: #155091;
        /* color: var(--white); */
        font-size: 1rem;
        cursor: pointer;
        color:white;
        
    width: 100%;
    margin-right: 77px;

    }

    .btn1 {
        padding: 7px 15px;
        border-radius: 50px;
        /* background: var(--start_quiz-c); */
        background: #155091;
        /* color: var(--white); */
        font-size: 1rem;
        cursor: pointer;
        color:white;
        
    width: 40%;
    margin-right: 0px;

    }
    .btn2 {
        padding: 7px 15px;
        border-radius: 50px;
        /* background: var(--start_quiz-c); */
        background: #155091;
        /* color: var(--white); */
        margin-top: 12px;
        font-size: 1rem;
        cursor: pointer;
        color:white;
        
    width: 80%;
    margin-right: 0px;

    }


    /* score  */
 
    .result_box {
        display: none;
        padding: 20px;
        text-align: center;
    }
    
    .score span {
        margin: 15px 0;
        display: flex;
        justify-content: center;
        font-size: 1rem;
        font-weight: 600;
    }
    
    span p {
        padding: 0 5px;
    }
    
    #quizQn {
        padding: 20px;
        /* background: #4c93ba; */
        background: #155091;
        color: #fff;
        font-size: 24px;
        border-radius: 10px;
    }
    
    .btn:hover {
        background-color: #4c93ba !important;
    }
    .btn1:hover {
        background-color: #4c93ba !important;
    }
    .btn2:hover {
        background-color: #4c93ba !important;
    }


    .skin {
    width:640px;
    margin:10px auto;
    padding:5px;
 }
nav {
    width:70px;
    height:22px;
    padding: 5px 0px;
    margin: 0 auto;
}


.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 0px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
   /* background-color: rgba(0,0,0,0.4);Black w/ opacity */
   background-color:#fff;
   border-radius: 20px;
  
}

.modal-backdrop {
    display: none !important;}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    /* padding: 13px; */
    border: 0px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #155091;
    float: right !important;
    font-size: 28px;
    position: relative;
    top: 0px;
    left: 2pc;
    font-weight: bold;
}


.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.thanks{
    font-family: "Raleway", sans-serif;
    font-weight: bold;
    color: #155091;
    font-size: 1.12rem;
}

@media only screen and (min-device-width: 320px) and (max-device-width: 425px){
      /* For portrait layouts only */
      .quiz_box .quiz_question h1 {
        font-size: 4vmin ;
    }

    .option_list {
        font-size: 3vmin;
        padding:32px 17px;
    }
    .quiz_container .quiz_text h1 {
        font-size: 3rem;
        
    }

    .quiz_container{
        width: 750px;
    }
  
    .btn {
        font-size:3vmin;
    }

    .score span {
        font-size:3vmin;
    }

    }
</style>

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}

@media only screen and (min-device-width: 319px) and (max-device-width: 425px){

.section-dropdown {
   
    top: 122px;
}

.dropdown:checked + label,
.dropdown:not(:checked) + label{   
font-size: 3vmin;
height: 5rem;
width: 18rem;
}
.dropdown-sub:checked + label, .dropdown-sub:not(:checked) + label{
font-size: 3vmin;
}
.dropdown-sub1:checked + label, .dropdown-sub1:not(:checked) + label{
font-size: 3vmin;
}
.dropdown-sub2:checked + label, .dropdown-sub2:not(:checked) + label{
font-size: 3vmin;
}
.dropdown-sub3:checked + label, .dropdown-sub3:not(:checked) + label{
font-size:3vmin;
}
.dropdown-sub4:checked + label, .dropdown-sub4:not(:checked) + label{
font-size: 3vmin;
}
.dropdown-sub5:checked + label, .dropdown-sub5:not(:checked) + label{
font-size: 3vmin;
}

.section-dropdown-sub a{
font-size: 3vmin;
}
.section-dropdown-sub1 a{
font-size:3vmin;
}
.section-dropdown-sub2 a{
font-size: 3vmin;
}
.section-dropdown-sub3 a{
font-size: 3vmin;
}
.section-dropdown-sub4 a{
font-size: 3vmin;
}
.section-dropdown-sub5 a{
font-size: 3vmin;
}
.a{
    font-size:4vmin;
}
}
a:hover {
    /* color: #ffffff; */
    text-decoration: none;
  
}
</style>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12 bg-white col-12 p-2 pl-4">
<!-- <img src="integrace_newlogo1.png"  width="260px" height="98px"  alt=""> -->
<img src="AAG LOGO.png"  width="260px" height="98px"  alt="">

<img src="logo-new.png"  width="260px" height="98px" style="float:right"  alt="">
        </div>
        <header class="start color" >
    <button id="start_quiz" style="background-color:#b30086;">ASSESSMENT 6 - INTRAUTERINE INSEMINATION</button>
</header>
<!-- <div class="sec-center"> 	
	  	<input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
	  	<label class="for-dropdown" for="dropdown"><a href="index.php" class="a" id="start_quiz"><i class="fa fa-arrow-left"> </i>&nbsp  Modules  </a></label>
  		
    </div> -->

    <div class="sec-center"> 	
	  	<input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
	  	<label class="for-dropdown" for="dropdown"> Modules  &nbsp <i class="fa fa-arrow-down"> </i></label>
  		<div class="section-dropdown"> 
  			<!-- <a href="#">Dropdown Link <i class="fa fa-arrow-right"></i></a> -->
		  	<input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub"/>
		  	<label class="for-dropdown-sub" for="dropdown-sub">Module 1 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub"> 
	  			<!-- <a href="index.php" class="a" id="start_quiz">Pre-test <i class="fa fa-arrow-right"></i></a> -->
	  			 <a href="../module1.php"  class="a" >Video <i class="fa fa-arrow-right"></i></a> <!--href="../module1.php" onclick="Redirectmod1()"-->
				 <a href="posttest1.php" class="a"  >Post-test <i class="fa fa-arrow-right"></i></a>   <!--href="posttest1.php" onclick="Redirectmod11()"-->
	  		</div>
			  <input class="dropdown-sub1" type="checkbox" id="dropdown-sub1" name="dropdown-sub1"/>
		  	<label class="for-dropdown-sub1" for="dropdown-sub1">Module 2 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub1"> 
	  		<a href="pretest2.php" class="a"  >Pre-test <i class="fa fa-arrow-right"></i></a>	<!--  onclick="Redirect()" -->
	  			 <a href="../module2.php" class="a" >Video <i class="fa fa-arrow-right"></i></a>  <!--href="../module2.php" onclick="Redirect00()"-->
				  <a href="posttest2.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a> <!--href="posttest2.php" onclick="Redirect01()"-->
	  		</div>
			  <input class="dropdown-sub2" type="checkbox" id="dropdown-sub2" name="dropdown-sub2"/>
		  	<label class="for-dropdown-sub2" for="dropdown-sub2">Module 3 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub2"> 
	  			<a href="pretest3.php" class="a"  >Pre-test <i class="fa fa-arrow-right"></i></a><!--onclick="Redirect_one()" -->
	  			<a href="../module3.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> <!-- ../module3.php onclick="Redirect10()-->
				  <a href="posttest3.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a>  <!--posttest3.php onclick="Redirect11()"-->
	  		</div>

			  <input class="dropdown-sub3" type="checkbox" id="dropdown-sub3" name="dropdown-sub3"/>
		  	<label class="for-dropdown-sub3" for="dropdown-sub3">Module 4 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub3"> 
	  			<a href="pretest4.php" class="a" >Pre-test <i class="fa fa-arrow-right"></i></a>  <!-- onclick="Redirect_two()" -->
	  			 <a href="../module4.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> <!--../module4.php onclick="Redirect20()" -->
				 <a href="posttest4.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a> <!-- posttest4.php onclick="Redirect21()"-->
	  		</div>

			  <input class="dropdown-sub4" type="checkbox" id="dropdown-sub4" name="dropdown-sub4"/>
		  	<label class="for-dropdown-sub4" for="dropdown-sub4">Module 5 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub4"> 
	  			<a href="pretest5.php" class="a" >Pre-test <i class="fa fa-arrow-right"></i></a> <!--onclick="Redirect_three()" -->
	  			 <a href="../module5.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> <!--../module5.php onclick="Redirect30()" -->
				   <a href="posttest5.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a><!-- posttest5.php  onclick="Redirect31()"-->
	  		</div>
			  <input class="dropdown-sub5" type="checkbox" id="dropdown-sub5" name="dropdown-sub5"/>
		  	<label class="for-dropdown-sub5" for="dropdown-sub5">Module 6 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub5"> 
	  			<a href="pretest6.php"class="a" >Pre-test <i class="fa fa-arrow-right"></i></a> <!--onclick="Redirect_four()"-->
	  			<a href="../module6.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> <!-- ../module6.php onclick="Redirect40()"-->
				  <a href="posttest6.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a> <!--posttest6.php onclick="Redirect41()"-->
	  		</div>
  			<!-- <a href="#">Dropdown 2 <i class="fa fa-arrow-right"></i></a>
  			<a href="#">Dropdown 2 <i class="fa fa-arrow-right"></i></a> -->
  		</div>
          <!-- <a href="../lobby.php" class="float-right" ><button  class="btn2 mt-3 ml-3"><i class="fa-solid fa-house"></i></button></a> -->
  	</div>
</div>
    </div>
</div>

<!-- header start butoon  -->
<!-- <header class="start">
    <button id="start_quiz">Start Pre-Test</button>
</header> -->
<!-- quiz box -->
<section class="quiz_container">
    <div class="quiz_text">
        <h1>ASSESSMENT 6 - INTRAUTERINE INSEMINATION</h1>
    </div>

    <div class="quiz_box">
        <div class="quiz_question" id="quizQn"></div>
        <div class="options"></div>
    </div>

    <footer>
        <div class="question_no"></div>
        <div class="buttons">
            <button class="btn" id="next">Next</button>
        </div>
    </footer>
</section>

<article class="result_box">
    <div class="score"></div>
    <!-- <div id="replay"></div> -->
    <button id="replay" class="btn1 mt-3">Re-Take Assessment</button>
    <a href="../module66.php" ><button  class="btn1 mt-3">Re-Watch Module 6</button></a> 
 <!-- <a href="../digital_cert.php"><button  class="btn1">Next Module</button></a>  -->
 <a href="../digital_cert.php" ><button  class="btn2"  id="myBtn">DIGITAL CERTIFICATE</button></a> 
 <!-- <a href="https://coact.live/AllAboutGestation/rateing/" id=""><button  class="btn mt-3">Feedback</button></a>  -->
 <div id="review_content"></div>
 <button type="button" name="add_review" id="add_review" class="btn2 btn-primary">Feedback</button>

 
<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

<!-- The Modal -->
<!-- <div id="myModal" class="modal"> -->

  <!-- Modal content -->
  <!-- <div class="modal-content">
  
    <p class="thanks"><span class="close">&times;</span>THANKS FOR ATTENDING MODULE 1 & 2 !!</br>
MODULE 3 WILL BE LIVE ON</br>
24th JUNE 2022 10:00 ONWARDS</p>

  </div> -->

<!-- </div> -->
 <br>

 
 
 
 <a href="../lobby.php"  id="module1"><button  class="btn1 mt-3">Home</button></a> 

  
</article>

<script>
    const questions = [{
            'id': 1,
            "question": 'Contra-indications for IUI',
            'Options': [
                'Cervical atresia',
                'Cervicitis, Endometritis',
                'Bilateral tubal block',
                'All the above'
            ],
            'answer': 'All the above'
        },{
            'id': 2,
            "question": 'Pre-cycle non-modifiable prognostic factors in IUI are',
            'Options': [
                'Age',
                'Duration of infertility',
                'BMI',
                'All the above'
            ],
            'answer': 'All the above'
        }, {
            'id': 3,
            "question": 'In IUI, Chronic low dose step up is better than low dose',
            'Options': [
                'True',
                'False',
                'Maybe',
                'Other/None'
            ],
            'answer': 'True'
        }, {
            'id': 4,
            "question": 'In IUI, Dose increment –',
            'Options': [
                '50% is better than 100%',
                '100 % is better',
                '75 % is better',
                'should be less than 25 %'
            ],
            'answer': '50% is better than 100%'
        }, {
            'id': 5,
            "question": 'Step down protocol',
            'Options': [
                'Mimics rise in FSH',
                'Mimics LH surge',
                'Mimics normal menstrual cycle ',
                'Mimics proliferative phase'
            ],
            'answer': 'Mimics normal menstrual cycle '
        }, {
            'id': 6,
            "question": 'In IUI step-down protocol the starting dose is ------ above the effective dose',
            'Options': [
                '50 IU',
                '37.5 IU',
                '10 IU',
                '75 IU'
            ],
            'answer': '37.5 IU'
        }, {
            'id': 7,
            "question": 'When to cancel the cycle',
            'Options': [
                'Low compliance',
                'If age< 32 years, > 3 follicles ≥14mm',
                'If age >32 years, > 4 follicles ≥14mm',
                'All the above'
            ],
            'answer': 'All the above'
        }, {
            'id': 8,
            "question": 'A mature oocyte is fertilisable for ------- after release',
            'Options': [
                '6-8 hours',
                '12–24 hours',
                '24-48 hours',
                'None of the above'
            ],
            'answer': '12–24 hours'
        }, {
            'id': 9,
            "question": 'Optimal volume of inseminate should be between',
            'Options': [
                '0.1 mL to 0.3 mL',
                '1 mL to 2 mL ',
                '0.3 mL and 0.5 mL',
                '2 mL to 2.5 mL'
            ],
            'answer': '0.3 mL and 0.5 mL'
        }, {
            'id': 10,
            "question": 'Following complications can occur during IUI',
            'Options': [
                'Trauma',
                'Infection',
                'Pain/cramping',
                'All the above'
            ],
            'answer': 'All the above'
        }
    ]
    
    const start_quiz = document.querySelector('#start_quiz');
    const container = document.querySelector('.quiz_container');
    const result_box = document.querySelector('.result_box');
    const next = document.querySelector('#next');
    const section_next = document.querySelector('.ques');
    const replay = document.querySelector('#replay');
    const options = document.querySelector('.options');
    const buttons = document.querySelector('.buttons');

    // start_quiz button event 
    start_quiz.addEventListener('click', () => {
        start_quiz.style.display = 'none';
        container.style.display = 'block';
        show_question(0);
        buttons.classList.add('disabled');

    })

    // replay button event 
    replay.addEventListener('click', () => {
        start_quiz.style.display = 'block';
        result_box.style.display = 'none';
        active = 0;
        userscore = 0;
        show_question(active);
        options.classList.remove('disabled');
    })

    // next button event 
    let active = 0; // question index number
    next.addEventListener('click', () => {
        if (active < questions.length - 1) {
            active++;
            show_question(active);
            options.classList.remove('disabled');
            buttons.classList.add('disabled')
        } else {
            result_box.style.display = 'block';
            container.style.display = 'none'
            result(); //result function 
        }
    })

    // show_question function 
    let userscore = 0; // correct answer select by user
    function show_question(index) {
        // question name 
        const quiz_question = document.querySelector('.quiz_question');
        quiz_question.innerHTML = `<h1><p>${questions[index].id}. </p>${questions[index].question}</h1>`
            //  question option list 
        options.innerHTML = `<div class="option_list">${questions[index].Options[0]}</div>
    <div class="option_list">${questions[index].Options[1]}</div>
    <div class="option_list">${questions[index].Options[2]}</div>
    <div class="option_list">${questions[index].Options[3]}</div>`
            // current number of question
        const question_no = document.querySelector('.question_no');
        question_no.innerHTML = `<span class="center"><p>${questions[index].id}</p>of<p>${questions.length}</p>Questions</span>`

        const options_list = document.querySelectorAll('.option_list');
        options_list.forEach((e) => {
            e.addEventListener('click', (op) => {

                e.classList.add('selectedAnswer');
                if (op.target.innerHTML == questions[active].answer) {
                    console.log(op.target.innerHTML);
                    // userscore++; //userscore incresed by correct answer
                    userscore += 100; //userscore incresed by correct answer
                    e.classList.add('correct');
                    options.classList.add('disabled');
                    buttons.classList.remove('disabled');
                } else {
                    e.classList.add('wrong');
                    options.classList.add('disabled');
                    buttons.classList.remove('disabled');
                    // if wrong answer selected then correct class added correct answer 
                    for (let i = 0; i < options.children.length; i++) {
                        if (options.children[i].innerHTML == questions[active].answer) {
                            options.children[i].classList.add('correct');
                        }
                    }
                }
            })
        })
    }

//     function result() {
//         const score = document.querySelector('.score');
//         score.innerHTML = `<h1>Score:</h1><span><p>${userscore}</p></span>`
//         // score.innerHTML = `<h1>Your Score is</h1><span><p>${userscore}</p>of<p>${questions.length}</p></span>`
//         var objXMLHttpRequest = new XMLHttpRequest();
// objXMLHttpRequest.onreadystatechange = function() {
//   if(objXMLHttpRequest.readyState === 4) {
//     if(objXMLHttpRequest.status === 200) {
//         //   alert(objXMLHttpRequest.responseText);
//         // alert("data is add."+userscore);
//         console.log(userscore);
//         console.log(questions.length);
//     } else {
//           alert('Error Code: ' +  objXMLHttpRequest.status);
//           alert('Error Message: ' + objXMLHttpRequest.statusText);
//     }
//   }
// }
// objXMLHttpRequest.open('GET', "haras3.php?s="+userscore+"&e=<?= $user_email; ?>", true);
// objXMLHttpRequest.send();
//     }






function result() {
       
       // score.innerHTML = `<h1>Your Score is</h1><span><p>${userscore}</p>of<p>${questions.length}</p></span>`
       const score = document.querySelector('.score'); 
  
  score.innerHTML = `<h3>Your Score</h3><span><p>${userscore}</p></span>`
  var objXMLHttpRequest = new XMLHttpRequest();
objXMLHttpRequest.onreadystatechange = function() {
 if(objXMLHttpRequest.readyState === 4) {
   if(objXMLHttpRequest.status === 200) {
       //   alert(objXMLHttpRequest.responseText);
       // alert("data is add."+userscore);
       console.log(userscore);
       console.log(questions.length);
   } else {
         alert('Error Code: ' +  objXMLHttpRequest.status);
         alert('Error Message: ' + objXMLHttpRequest.statusText);
   }
 }
}
objXMLHttpRequest.open('GET', "haras11.php?s="+userscore+"&e=<?= $user_email; ?>", true);
objXMLHttpRequest.send();

   if(userscore >=800){
    alert("Sucessfully complited module 6");
// alert("Congratulations on completing module 4 module 5 will be live on 1st july 10AM Onwards");


// document.getElementById("module").style.visibility = "visible";
//  document.getElementById("module1").style.display = "block";

   }
//    else if(userscore <800){
// alert("Not eligile to attend next module please try again");
// document.getElementById("module").style.visibility = "hidden";
//  document.getElementById("module1").style.display = "none";

//    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both The Fields");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>
<?php require_once "../commons.php" ?>
<?php require_once "scripts.php" ?>
<?php require_once "../audi-script.php" ?>