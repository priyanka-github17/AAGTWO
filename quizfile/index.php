<?php
require_once "../logincheck.php";
require_once "../functions.php";

$exhib_id = '913234bfe40b6433e81ceb7573bdd9b9c069ad2c08d89d3beb33bdc351ed5954';
require_once "../exhibcheck.php";
$curr_room = 'pretest_module1';
// require_once "reg.php";
?>
<title>Integrace</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="styles.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    /* .score{
    display: inline;
} */

.btn {
        padding: 7px 15px;
        border-radius: 50px;
        /* background: var(--start_quiz-c); */
        background: #155091;
        /* color: var(--white); */
        font-size: 2vmin;
        cursor: pointer;
        color: white;

        width: 100%;
        /* margin-right: 77px; */

    }

    .btn-sm{
        width:45%;
    }



    .btn:hover {
        background-color: #4c93ba !important;
    }

    .btn1 {
        padding: 7px 15px;
        border-radius: 50px;
        /* background: var(--start_quiz-c); */
        background: #155091;
        /* color: var(--white); */
        font-size: 1rem;
        cursor: pointer;
        color: white;
        width: 100%;
        margin-right: 0px;


    }

    .btn2 {
        padding: 20px 24px;
    /* padding: 16px 30px; */
    /* padding: 7px 15px; */
    border-radius: 5px;
    /* background: var(--start_quiz-c); */
    background: #d61a5e;
    /* color: var(--white); */
    /* font-size: 3.4vmin; */
    font-size: 1.4rem;
    cursor: pointer;
    color: white;
    /* width: 350px; */
    text-transform: uppercase;
    margin-top: 10px;
    /* box-shadow: 15px 15px 24px #5f7197; */
    }
    .result_box {
   
    width: 398px;
    height: 216px;
 
}
    @media only screen and (min-device-width: 320px) and (max-device-width: 425px) {
        .btn {
            font-size: 4vmin;
    font-weight: bold;
    /* width: 40%; */
        }

        h3{
            font-size: 3.75rem;
        }

        .btn2 {
            padding: 30px 30px;
    /* padding: 7px 15px; */
    border-radius: 9px;
    /* background: var(--start_quiz-c); */
    background: #d61a5e;
    /* color: var(--white); */
    font-size: 3vmin;
    cursor: pointer;
    color: white;
    width: 170px;
    margin-top: 10px;
    text-transform: uppercase;
        }
        .btn{
            font-size:3vmin;
            font-weight:bold;
        }

        .result_box{
   
   height: 20%;
  
    width: 860px;
   
}
        
    }

 


</style>
<?php

// $servername = "localhost";
// $username = "coacteh9_coact";
// $password = "Coact@2020#";
// $dbname = "aag";

//  $conn = new mysqli("localhost", "coacteh9_coact", "Coact@2020#", "aag");
// // $conn = new mysqli("localhost", "root", "", "aag1");
// $doctors_id = $_POST['doctors_id'];

// $sql = "UPDATE tbl_users SET doctors_id='$doctors_id' WHERE emailid='$user_email'";

// if ($conn->query($sql) === TRUE) {

//     // echo "Record updated successfully";

// } else {
//     echo "Error updating record: " . $conn->error;
// }
?>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12 bg-white col-12 p-2 pl-4">
            <!-- <img src="integrace_newlogo1.png"  width="260px" height="98px"  alt=""> -->
            <img src="AAG LOGO.png" width="260px" height="98px" alt="">
            <img src="logo-new.png" width="260px" height="98px" style="float:right" alt="">
            
        </div>
        
         

        <!-- <header class="start color text-center">
        <a href="../lobby.php"  ><button  class="btn2 mt-3"><i class="fa-solid fa-house"></i></button></a>
        <br>
        <br>
            <button id="start_quiz" style="background-color:#b30086;"> Module 1 - (Pre-Test/ Video/ Post-Test) </button>
            <p class="mod"> <button onclick="Redirect()" class="btn2">Module 2 - (Pre-Test/ Video/ Post-Test) </button>
            </p>
            <p class="mod"> <button onclick="Redirect_one()" class="btn2">Module 3 - (Pre-Test/ Video/ Post-Test) </button>
            </p>
            <p class="mod"> <button onclick="Redirect_two()" class="btn2">Module 4 - (Pre-Test/ Video/ Post-Test) </button>
            </p>
           <button id="start_quiz" style="background-color:#b30086;text-transform: uppercase;">Test Your Knowledge</button> 

        </header> -->
        <!-- <header class="color text-center">
        <a href="../lobby.php"  ><button  class="btn2 mt-3"><i class="fa-solid fa-house"></i></button></a>
</header> -->
        <div class="sec-center"> 	
	  	<input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
	  	<label class="for-dropdown" for="dropdown"> Modules  &nbsp <i class="fa fa-arrow-down"> </i></label>
  		<div class="section-dropdown"> 
  			<!-- <a href="#">Dropdown Link <i class="fa fa-arrow-right"></i></a> -->
		  	<input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub"/>
		  	<label class="for-dropdown-sub" for="dropdown-sub">Module 1 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub"> 
	  			<a href="#" class="a" id="start_quiz">Pre-test <i class="fa fa-arrow-right"></i></a>
	  			 <a href="../module1.php"  class="a" >Video <i class="fa fa-arrow-right"></i></a> <!--href="../module1.php" onclick="Redirectmod1()"-->
				 <a href="posttest1.php" class="a"  >Post-test <i class="fa fa-arrow-right"></i></a>   <!--href="posttest1.php" onclick="Redirectmod11()"-->
	  		</div>
			    <!-- <input class="dropdown-sub1" type="checkbox" id="dropdown-sub1" name="dropdown-sub1"/>
		  	<label class="for-dropdown-sub1" for="dropdown-sub1">Module 2 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub1"> 
	  		<a href="pretest2.php" class="a"  >Pre-test <i class="fa fa-arrow-right"></i></a>	
	  			 <a href="../module2.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> 
				  <a href="posttest2.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a> 
	  		</div>
			  <input class="dropdown-sub2" type="checkbox" id="dropdown-sub2" name="dropdown-sub2"/>
		  	<label class="for-dropdown-sub2" for="dropdown-sub2">Module 3 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub2"> 
	  			<a href="pretest3.php" class="a"  >Pre-test <i class="fa fa-arrow-right"></i></a>
	  			<a href="../module3.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> 
				  <a href="posttest3.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a>  
	  		</div>

			  <input class="dropdown-sub3" type="checkbox" id="dropdown-sub3" name="dropdown-sub3"/>
		  	<label class="for-dropdown-sub3" for="dropdown-sub3">Module 4 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub3"> 
	  			<a href="pretest4.php" class="a" >Pre-test <i class="fa fa-arrow-right"></i></a> 
	  			 <a href="../module4.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> 
				 <a href="posttest4.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a> 
	  		</div> -->

			  <!-- <input class="dropdown-sub4" type="checkbox" id="dropdown-sub4" name="dropdown-sub4"/>
		  	<label class="for-dropdown-sub4" for="dropdown-sub4">Module 5 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub4"> 
	  			<a href="pretest5.php" class="a" >Pre-test <i class="fa fa-arrow-right"></i></a> 
	  			 <a href="../module5.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> 
				   <a href="posttest5.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a>
	  		</div>
			  <input class="dropdown-sub5" type="checkbox" id="dropdown-sub5" name="dropdown-sub5"/>
		  	<label class="for-dropdown-sub5" for="dropdown-sub5">Module 6 <i class="fa fa-plus"></i></label>
	  		<div class="section-dropdown-sub5"> 
	  			<a href="pretest6.php"class="a" >Pre-test <i class="fa fa-arrow-right"></i></a>
	  			<a href="../module6.php" class="a" >Video <i class="fa fa-arrow-right"></i></a> 
				  <a href="posttest6.php" class="a" >Post-test <i class="fa fa-arrow-right"></i></a> 
	  		</div> -->
  			<!-- <a href="#">Dropdown 2 <i class="fa fa-arrow-right"></i></a>
  			<a href="#">Dropdown 2 <i class="fa fa-arrow-right"></i></a> -->
  		</div>
          <a href="../lobby.php" class="float-right" ><button  class="btn2 mt-3 ml-3"><i class="fa-solid fa-house"></i></button></a>
  	</div>

<!-- header start butoon  -->
<!-- <header class="start">
    <button id="start_quiz">Start Pre-Test</button>
</header> -->
<!-- quiz box -->
<section class="quiz_container">
    <div class="quiz_text">
        <h1 style="text-transform: uppercase;">Test Your Knowledge</h1>

    </div>


    <div class="quiz_box">
        <div class="quiz_question" id="quizQn"></div>
        <div class="options"></div>
    </div>

    <footer>
        <div class="row">
            <div class="col-md-6">
        
        <div class="question_no"></div>
        </div>
        <div class="col-md-6 text-right">
        <div class="buttons">
            <button class="btn btn-sm" id="next">Next</button>
            </div>
        </div>
        </div>
    </footer>
</section>

<article class="result_box">
    <div class="score"></div>
    <div id="replay" class="mt-3"></div>




    <script type="text/javascript">

// function Redirectmod1() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['is_joy']) == 1) {
//             ?>
//                 window.location = "../module2.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish pre-test");
//             <?php
//             }
//             ?>
//         }

//         function Redirectmod11() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['is_joy']) == 1) {
//             ?>
//                 window.location = "posttest1.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Watch the Video to proceed");
//             <?php
//             }
//             ?>
//         }

//         function Redirect() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['posttest']) == 1) {
//             ?>
//                 window.location = "pretest2.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish Module 1");
//             <?php
//             }
//             ?>
//         }


//         function Redirect00() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest']) == 1) {
//             ?>
//                 window.location = "../module2.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish Pretest 2");
//             <?php
//             }
//             ?>
//         }
//         function Redirect01() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest']) == 1) {
//             ?>
//                 window.location = "posttest2.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly watch the video to proceed");
//             <?php
//             }
//             ?>
//         }
// function Redirect_one() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['posttest1']) == 1) {
//             ?>
//                 window.location = "pretest3.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish Module 2");
//             <?php
//             }
//             ?>
//         }
       
   
//         function Redirect10() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest2']) == 1) {
//             ?>
//                 window.location = "../module3.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish pre-test");
//             <?php
//             }
//             ?>
//         }
//         function Redirect11() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest2']) == 1) {
//             ?>
//                 window.location = "posttest3.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly watch the video to proceed");
//             <?php
//             }
//             ?>
//         }

//         function Redirect_two() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['posttest3']) == 1) {
//             ?>
//                 window.location = "pretest4.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish Module 3");
//             <?php
//             }
//             ?>
//         }

//         function Redirect20() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest3']) == 1) {
//             ?>
//                 window.location = "../module4.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish pre test");
//             <?php
//             }
//             ?>
//         }
//         function Redirect21() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest3']) == 1) {
//             ?>
//                 window.location = "posttest4.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly watch the video to proceed");
//             <?php
//             }
//             ?>
//         }

//         function Redirect_three() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['posttest4']) == 1) {
//             ?>
//                 window.location = "pretest5.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish Module 4");
//             <?php
//             }
//             ?>
//         }

//         function Redirect30() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest4']) == 1) {
//             ?>
//                 window.location = "../module5.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish pre-test");
//             <?php
//             }
//             ?>
//         }
//         function Redirect31() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest4']) == 1) {
//             ?>
//                 window.location = "posttest5.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly watch the video to proceed");
//             <?php
//             }
//             ?>
//         }


//         function Redirect_four() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['posttest5']) == 1) {
//             ?>
//                 window.location = "pretest6.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish Module 5");
//             <?php
//             }
//             ?>
//         }

//         function Redirect40() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest4']) == 1) {
//             ?>
//                 window.location = "../module6.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly Finish pretest");
//             <?php
//             }
//             ?>
//         }
//         function Redirect41() {
//             <?php
//             $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_assoc($result);
//             if (isset($row['pretest4']) == 1) {
//             ?>
//                 window.location = "posttest6.php";
//             <?php
//             } else {
//             ?>
//                 alert("Kindly watch the video to proceed");
//             <?php
//             }
//             ?>
//         }

        // function Redirect_five() {
        //     <?php
        //     $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
        //     $result = mysqli_query($conn, $sql);
        //     $row = mysqli_fetch_assoc($result);
        //     if (isset($row['posttest5']) == 1) {
        //     ?>
        //         window.location = "pretest6.php";
        //     <?php
        //     } else {
        //     ?>
        //         alert("Kindly Finish Module 6");
        //     <?php
        //     }
        //     ?>
        // }
    </script>

    <!-- <button onclick="Redirect()" class="btn-get-started  btn-start bg-primary scrollto" >Get Started</button> -->


    <a href="../module1.php"><div><button class="btn">MODULE 1 - PHYSIOLOGY OF THE MENSTRUAL CYCLE</button></div></a>

</article>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<script>
    const questions = [{
        'id': 1,
        "question": 'What is the mean duration of the MC?',
        'Options': [
            'Mean 28 days  (only 15% of ♀); Range 21-35',
            'Mean 28 days (only 15% of ♀); Range 20-30',
            'Mean 20 days (only 15% of ♀); Range 21-35',
            'Mean 26 days  (only 15% of ♀); Range 21-35'
        ],
        'answer': 'Mean 28 days  (only 15% of ♀); Range 21-35'
    }, {
        'id': 2,
        "question": 'What is the average duration of menses?',
        'Options': [
            '4-8 days',
            '4-6 days',
            '3-8 days',
            '3-5 days'
        ],
        'answer': '3-8 days'
    }, {
        'id': 3,
        "question": 'What is the normal estimated blood loss?',
        'Options': [
            'Approx. 30 ml-80ml',
            '>100 ml',
            '<30 ml',
            '>80 ml'
        ],
        'answer': 'Approx. 30 ml-80ml'
    }, {
        'id': 4,
        "question": 'When does ovulation occur?',
        'Options': [
            'Usually day 12; 48 hrs after the onset of mid-cycle LH surge',
            'Usually day 15; 30 hrs after the onset of mid-cycle LH surge',
            'Usually day 14; 24 hrs after the onset of mid-cycle LH surge',
            'Usually day 14; 36 hrs after the onset of mid-cycle LH surge'
        ],
        'answer': 'Usually day 14; 36 hrs after the onset of mid-cycle LH surge'
    }, {
        'id': 5,
        "question": 'During what phase of menstrual cycle are primary follicles converted to Graafian follicles?',
        'Options': [
            'Menstrual phase',
            'Follicular phase',
            'Luteal phase',
            'Secretory phase'
        ],
        'answer': 'Follicular phase'
    }]

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
    next.addEventListener('click', (e) => {
        if (active < questions.length - 1) {
            active++;
            show_question(active);
            options.classList.remove('disabled');
            buttons.classList.add('disabled')
            e.preventDefault;
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
                if (op.target.innerHTML !== questions[active].answer) {
                    e.classList.add('wrong');
                    options.classList.remove('disabled');

                } else if (op.target.innerHTML == questions[active].answer) {
                    console.log(op.target.innerHTML);
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

    function result() {
        const score = document.querySelector('.score');
        score.innerHTML = `<h3>Score:</h3><span><p name="score">${userscore}</p></span>`
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


          //  window.location.href = 'lobby.php';
          xmlhttp.open("GET", "haras1.php?s="+userscore+"&e=<?= $user_email; ?>", true);


            }
            xmlhttp.send();
            return false;
            }
        var objXMLHttpRequest = new XMLHttpRequest();
        objXMLHttpRequest.onreadystatechange = function() {
            if (objXMLHttpRequest.readyState === 4) {
                if (objXMLHttpRequest.status === 200) {
                    //   alert(objXMLHttpRequest.responseText);
                    // alert("data is add."+userscore);
                    console.log(userscore);
                    console.log(questions.length);
                } else {
                    alert('Error Code: ' + objXMLHttpRequest.status);
                    alert('Error Message: ' + objXMLHttpRequest.statusText);
                }
            }
        }
        objXMLHttpRequest.open('GET', "haras.php?s=" + userscore + "&e=<?= $user_email; ?>", true);
        objXMLHttpRequest.send();
    }
</script>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mag-popup.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->



  <!-- <script> -->

    <?php

// $servername = "localhost";
// $username = "coacteh9_coact";
// $password = "Coact@2020#";
// $dbname = "aag";

//  $conn = new mysqli("localhost", "coacteh9_coact", "Coact@2020#", "aag");
// // $conn = new mysqli("localhost", "root", "", "aag1");
// $doctors_id = $_POST['doctors_id'];

// $sql = "UPDATE tbl_users SET doctors_id='$doctors_id' WHERE emailid='$user_email'";

// if ($conn->query($sql) === TRUE) {

//     // echo "Record updated successfully";

// }
//  else {
//     echo "Error updating record: " . $conn->error;
// }
?>
  


                                    <!-- </script> -->
<?php require_once "scripts.php" ?>
<?php require_once "../exhib-script.php" ?>


