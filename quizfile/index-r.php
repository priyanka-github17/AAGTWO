<?php
require_once "../logincheck.php";
require_once "../functions.php";

$exhib_id = '913234bfe40b6433e81ceb7573bdd9b9c069ad2c08d89d3beb33bdc351ed5954';
require_once "../exhibcheck.php";
$curr_room = 'pretest_module1';
require_once "reg.php";
?>
<title>Integrace</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
        /* top:50%; */
        top: 47%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50px;
        /* background: var(--white); */
        background-color: transparent !important;
        /* box-shadow: 15px 15px 24px #5f7197, -15px -15px 20px #df0e86; */
        box-shadow: 15px 15px 24px #5f7197;

    }

    .start2 {
        position: absolute;
        /* top:50%; */
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50px;
        /* background: var(--white); */
        /* background-color:#1977cc !important; */
        /* box-shadow: 15px 15px 24px #5f7197, -15px -15px 20px #df0e86; */
        box-shadow: 15px 15px 24px #5f7197;

    }

    .quiz_container,
    .result_box {
        position: absolute;
        top: 50%;
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
        /* padding: 16px 30px; */
        padding: 7px 15px;
        border-radius: 50px;
        /* color: var(--start_quiz-c); */
        /* color: #155091; */
        color: #fff;
        font-size: 1.4rem;
        text-transform: uppercase;
        /* width: 135%; */
        /* border-right: 3px solid #155091; */
        /* border-bottom: 5px solid #155091;
        border-right: 4px solid #155091; */
    }

    /* quiz box  */
    .btn2 {
         padding: 7px 15px;
        /* padding: 16px 30px; */
        /* padding: 7px 15px; */
        border-radius: 50px;
        /* background: var(--start_quiz-c); */
        background: #b30086;
        /* color: var(--white); */
        /* font-size: 3.4vmin; */
        font-size: 1.4rem;
        cursor: pointer;
        color: white;
        /* width: 350px; */
        text-transform: uppercase;
        margin-top: 10px;
        box-shadow: 15px 15px 24px #5f7197;
    }

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
        font-size: 2.5vmin;
    }

    .quiz_box .quiz_question p {
        display: inline;
    }

    /* options  */

    .option_list {
        margin-top: 15px;
        font-size: 2vmin;
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
        font-size: 2vmin;
        cursor: pointer;
        color: white;

        width: 100%;
        margin-right: 77px;

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
        font-size: larger;
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

        /* .btn2 {
        font-size:4vmin;
    } */
        .btn2 {
            padding: 16px 30px;
            /* padding: 7px 15px; */
            border-radius: 50px;
            /* background: var(--start_quiz-c); */
            background: #b30086;
            /* color: var(--white); */
            font-size: 3vmin;
            cursor: pointer;
            color: white;
            width: 500px;
            margin-top: 10px;
            text-transform: uppercase;
        }

        .score span {
            font-size: 3vmin;
        }

        .start #start_quiz {
            font-size: 3.2vmin;
        }

    }

    /* .score{
    display: inline;
} */
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
        
         

        <header class="start color text-center">
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
            <!-- <button id="start_quiz" style="background-color:#b30086;text-transform: uppercase;">Test Your Knowledge</button> -->

        </header>


    </div>
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
        <div class="question_no"></div>
        <div class="buttons">
            <button class="btn" id="next">Next</button>
        </div>
    </footer>
</section>

<article class="result_box">
    <div class="score"></div>
    <div id="replay" class="mt-3"></div>




    <script type="text/javascript">
        function Redirect() {
            <?php
            $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if (isset($row['posttest']) == 1) {
            ?>
                window.location = "pretest2.php";
            <?php
            } else {
            ?>
                alert("Kindly Finish Module 1");
            <?php
            }
            ?>
        }
        function Redirect_one() {
            <?php
            $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if (isset($row['posttest1']) == 1) {
            ?>
                window.location = "pretest3.php";
            <?php
            } else {
            ?>
                alert("Kindly Finish Module 2");
            <?php
            }
            ?>
        }
        function Redirect_two() {
            <?php
            $sql =  "SELECT * FROM tbl_users WHERE emailid='$user_email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if (isset($row['posttest3']) == 1) {
            ?>
                window.location = "pretest4.php";
            <?php
            } else {
            ?>
                alert("Kindly Finish Module 3");
            <?php
            }
            ?>
        }
    </script>

    <!-- <button onclick="Redirect()" class="btn-get-started  btn-start bg-primary scrollto" >Get Started</button> -->


    <a href="../module1.php"><button class="btn">MODULE 1 - PHYSIOLOGY OF THE MENSTRUAL CYCLE</button></a>

</article>

<script>
    const questions = [{
        'id': 1,
        "question": 'What is the mean duration of the MC?',
        'Options': [
            'Mean 28 days  (only 15% of ???); Range 21-35',
            'Mean 28 days (only 15% of ???); Range 20-30',
            'Mean 20 days (only 15% of ???); Range 21-35',
            'Mean 26 days  (only 15% of ???); Range 21-35'
        ],
        'answer': 'Mean 28 days  (only 15% of ???); Range 21-35'
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


<?php require_once "scripts.php" ?>
<?php require_once "../exhib-script.php" ?>


