<?php
require_once "../logincheck.php";
require_once "../functions.php";

$exhib_id = 'b0f57f77281cdfc11628e815bb3a7c60c0126479d3c0b052681f25cc7896db18';
require_once "../exhibcheck.php";
$curr_room = 'bonk2';
?>
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
        font-family: 'Roboto', sans-serif;
        height: 100vh;
        background-image:url(Untitleddesignbg.png);
        background-size: cover;
    }
    
    input,
    button,
    h1,
    span {
        outline: 0;
        border: 0;
        font-family: inherit;
    }
    /* center all box  */
    
    .start,
    .quiz_container,
    .result_box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* border-radius: 50px !important; */
        background: var(--white);
        /* box-shadow: 15px 15px 24px #5f7197, -15px -15px 20px #df0e86; */
        
    }

    .btn-start {
    color: white !important;
    background: #1977cc;
    /* border-radius: 50px; */
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    padding: 10px 30px;
    letter-spacing: 1px;
}

.btn-start:hover {
    color: #3291e6 !important;
    text-decoration: none;
}
    /* start button  */
    
    .start #start_quiz {
        padding: 15px;
        border-radius: 10px;
        color: var(--start_quiz-c);
        font-size: 2rem;
        cursor: pointer;
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
        /* background-color: var(--bg-button); */
        /* background-color: var(--bg-blue); */
        background: #fff;
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
        font-size: 0.9rem;
        margin-left: 6px;
    }
    
    footer .buttons {
        margin-right: 6px;
    }
    
    .btn {
        padding: 7px 15px;
        border-radius: 15px;
        /* background: var(--start_quiz-c); */
        background: #1977cc;
        color: var(--white);
        font-size: 1rem;
        cursor: pointer;
    }

    .btn:hover {
    color: #3291e6 !important;
    text-decoration: none;
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
        background: #4c93ba;
        color: #fff;
        font-size: 24px;
        border-radius: 10px;
    }
    
    .btn:hover {
        background-color: #4c93ba !important;
    }
</style>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12 bg-white col-12 p-2 pl-4">
<img src="integrace_newlogo1.png"  width="260px" height="98px"  alt="">
        </div>
    </div>
</div>

<!-- header start butoon  -->
<header class="start">
    <button id="start_quiz" class="btn-start">Start Pre-Test</button>
</header>
<!-- quiz box -->
<section class="quiz_container">
    <div class="quiz_text">
        <h1>PRE TEST</h1>
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
    <div id="replay"></div>
 <a href="../module1.php"><button  class="btn">Click on Module 1</button></a> 

  
</article>

<script>
    const questions = [{
            'id': 1,
            "question": 'Oocyte is picked up by which part of fallopian tube',
            'Options': [
                'Fimbriae',
                'Ampulla',
                'Isthmus',
                'Interstitium'
            ],
            'answer': 'Interstitium'
        }, {
            'id': 2,
            "question": 'Sperms are produced in? ',
            'Options': [
                'Epididymis',
                'Vas deferens',
                'Testis',
                'Rete testes'
            ],
            'answer': 'Rete testes'
        }, {
            'id': 3,
            "question": 'he sperm undergoes ____ in the vagina',
            'Options': [
                'Acrosomal rctn',
                'Capacitation',
                'Cortical reaction',
                'Spermiation'
            ],
            'answer': 'Spermiation'
        }, {
            'id': 4,
            "question": 'Mature M II oocyte will not contain',
            'Options': [
                'Germinal vesicle',
                'Clear cytoplasm',
                'Polar body',
                'Zona Pellucida'
            ],
            'answer': 'Zona Pellucida'
        }, {
            'id': 5,
            "question": 'Following are stages of blastocyst, except',
            'Options': [
                'Expanding',
                'Morula',
                'Hatched',
                'Early/late'
            ],
            'answer': 'Early/late'
        }, {
            'id': 6,
            "question": 'EGA stands for?',
            'Options': [
                'Embryonic Genome Activation',
                'Early Gestational Age',
                'Embryonic Gamete Arrangement',
                'Easy Gamete Access'
            ],
            'answer': 'Easy Gamete Access'
        }, {
            'id': 7,
            "question": 'Morula is..',
            'Options': [
                'Day 3 embryo',
                'Day 2',
                'Day 5',
                'Day 6'
            ],
            'answer': 'Day 6'
        }, {
            'id': 8,
            "question": 'Fluid filled cavity in Blastocyst is called?',
            'Options': [
                'Embryocoele',
                'Gestational sac',
                'Blastocoele',
                'Varicocele'
            ],
            'answer': 'Varicocele'
        }, {
            'id': 9,
            "question": 'Zygote has..',
            'Options': [
                '2 PN 1 PB',
                '1 PN 1 PB',
                '2 PN 2 PB',
                '1 PN 2 PB'
            ],
            'answer': '1 PN 2 PB'
        }, {
            'id': 10,
            "question": 'Luteal-placental shift occurs at',
            'Options': [
                '7-9 weeks',
                '4 weeks',
                '12-16 weels',
                '20 weeks'
            ],
            'answer': '20 weeks'
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

                }

            else  if (op.target.innerHTML == questions[active].answer) {
                    console.log(op.target.innerHTML);
                    userscore++; //userscore incresed by correct answer
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
        score.innerHTML = `<h1>Your Score is</h1><span><p name="score">${userscore}</p>of<p>${questions.length}</p></span>`
        // var xmlhttp = new XMLHttpRequest();
        //     xmlhttp.onreadystatechange = function() {
        //     if (this.readyState == 4 && this.status == 200) {
              
               
        //   //  window.location.href = 'lobby.php';
        //   xmlhttp.open("GET", "haras1.php?s="+userscore+"&e=<?= $user_email; ?>", true);
            
              
        //     }
        //     xmlhttp.send();
        //     return false;
        //     }
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
objXMLHttpRequest.open('GET', "haras.php?s="+userscore+"&e=<?= $user_email; ?>", true);
objXMLHttpRequest.send();
    }
</script>
