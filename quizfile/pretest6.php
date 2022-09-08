<?php
require_once "../logincheck.php";
require_once "../functions.php";

$exhib_id = '7bfab9af0ddf533a012d229d70cff76d671e90a8eaeedbc68127ced0208d7327';
require_once "../exhibcheck.php";
$curr_room = 'pretest_module6';
?>
<title>Integrace</title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&family=Tiro+Bangla&display=swap');

    :root {
        /* --body-bg: #d99e55;
        ; */
        --start_quiz-c: #1d9eab;
        --white: rgba(255, 255, 255, 0.4);
        --bg-button: #e0e0e0;
        --right: #87e487;
        --wrong: #f19a9a;
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

    .start {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50px;
        /* background: var(--white); */
        background-color: #1977cc !important;
        /* box-shadow: 15px 15px 24px #5f7197, -15px -15px 20px #df0e86; */
        box-shadow: 15px 15px 24px #5f7197;

    }

    .quiz_container,
    .result_box {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50px;
        /* background: var(--white); */
        background: white;

        /* background-color:#1977cc !important; */
        /* box-shadow: 15px 15px 24px #5f7197, -15px -15px 20px #df0e86; */
        box-shadow: 15px 15px 24px #5f7197;

    }

    .result_box {

        padding: 138px;
        width: 500px;
        height: 290px;
        border-radius: 5px;

    }

    .start #start_quiz {
        padding: 16px 30px;
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

    .options .option_list.correct {
        background-color: var(--right);
    }

    .options .option_list.wrong {
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
        color: white;

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
        color: white;
        width: 40%;
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
        font-size: 1.5rem;
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

    .skin {
        width: 640px;
        margin: 10px auto;
        padding: 5px;
    }

    nav {
        width: 70px;
        height: 22px;
        padding: 5px 0px;
        margin: 0 auto;
    }

    .mod {
        color: white;
        margin-top: 12px;
        /* margin-bottom:10px; */
        width: 100%;
        text-align: center;
        font-weight: 300;
        /* font-size: larger; */
        font-size: 3vmin;
        text-transform: uppercase;
    }

    @media only screen and (min-device-width: 320px) and (max-device-width: 425px) {

        /* For portrait layouts only */
        .quiz_box .quiz_question h1 {
            font-size: 4vmin;
        }

        .option_list {
            font-size: 3vmin;
            padding: 32px 17px;
        }

        .quiz_container .quiz_text h1 {
            font-size: 3rem;

        }

        .quiz_container {
            width: 750px;
        }

        .btn {
            font-size: 3vmin;
        }

        .score span {
            font-size: 3vmin;
        }

        .start #start_quiz {
            font-size: 3.2vmin;
        }

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
.result_box{
    width:600px;
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
            <img src="AAG LOGO.png" width="260px" height="98px" alt="">

            <img src="logo-new.png" width="260px" height="98px" style="float:right" alt="">
        </div>
        <p class="mod">Module 6-Intrauterine Insemination
        <p>
        <header class="start color">

            <button id="start_quiz" style="background-color:#b30086;text-transform: uppercase;">Test Your Knowledge</button>
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
        <h1 style="text-transform: uppercase;">Test Your knowledge</h1>
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
    <div class="score "></div>
    <div id="replay"></div>
    <a href="../module6.php"><button class="btn">Module 6-Intrauterine Insemination</button></a>


</article>

<script>
    const questions = [{
            'id': 1,
            "question": 'Procedures used to treat infertility are',
            'Options': [
                'Intrauterine insemination',
                'In-vitro fertilization',
                'Intra-cytoplasmic sperm injection',
                'All the above'
            ],
            'answer': 'All the above'
        }, {
            'id': 2,
            "question": 'Intrauterine insemination (IUI) is an assisted reproductive technique that involves the deposition of processed semen sample in the uterine cavity',
            'Options': [
                'True',
                'False',
                'Maybe',
                'None/Other'
            ],
            'answer': 'True'
        }, {
            'id': 3,
            "question": 'GIFT refers to',
            'Options': [
                'Gamete in fertilization technique',
                'Gamete Intra fallopian transfer',
                'Gamete intra functional team',
                'Gamete internal fertilization team'
            ],
            'answer': 'Gamete Intra fallopian transfer'
        }, {
            'id': 4,
            "question": 'A step where different hormones are given to female to stimulate formation of more than one ovum',
            'Options': [
                'Ovary wash',
                'Oocyte retrieval',
                'Ovary stimulation',
                'None of the above'
            ],
            'answer': 'Ovary stimulation'
        }, {
            'id': 5,
            "question": 'While selecting a patient for IUI both male and female partners factors should be considered',
            'Options': [
                'True',
                'False',
                'Maybe',
                'None/Other'
            ],
            'answer': 'True'
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
        score.innerHTML = `<h3>Your Score:</h3><span><p>${userscore}</p></span>`
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
        objXMLHttpRequest.open('GET', "haras10.php?s=" + userscore + "&e=<?= $user_email; ?>", true);
        objXMLHttpRequest.send();
    }
</script>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mag-popup.js"></script>
  <script src="js/bootstrap.min.js"></script>


<?php require_once "scripts.php" ?>
<?php require_once "../exhib-script.php" ?>