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
        background-image: linear-gradient(#4084b3, #c598c1);
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
        border-radius: 12px;
        background: var(--white);
        /* box-shadow: 15px 15px 24px #c9c6c2, -15px -15px 20px #bd986a; */
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
        font-size: 0.9rem;
        margin-left: 6px;
    }
    
    footer .buttons {
        margin-right: 6px;
    }
    
    .btn {
        padding: 7px 15px;
        border-radius: 10px;
        background: var(--start_quiz-c);
        color: var(--white);
        font-size: 1rem;
        cursor: pointer;
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


<!-- header start butoon  -->
<header class="start">
    <button id="start_quiz">Start Quiz</button>
</header>
<!-- quiz box -->
<section class="quiz_container">
    <div class="quiz_text">
        <h1>POST TEST</h1>
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
    <button id="replay" class="btn">Replay Quiz</button>
</article>

<script>
    const questions = [{
            'id': 1,
            "question": 'Ovulation in a woman with 28 days cycle occurs at ?',
            'Options': [
                '14 days prior to menstruation',
                '15 days prior to menstruation',
                '16 days prior to menstruation',
                '12 days prior to menstruation'
            ],
            'answer': '14 days prior to menstruation'
        }, {
            'id': 2,
            "question": 'Corpus luteum starts regressing after how many days of ovulation ?',
            'Options': [
                '10 days',
                '12 days',
                '11 days',
                '9 days'
            ],
            'answer': '9 days'
        }, {
            'id': 3,
            "question": 'The interval between ovulation and LH surge is ________',
            'Options': [
                '24-48 hours',
                '24-36 hrs',
                '36-72 Hrs',
                '30-48 Hrs'
            ],
            'answer': '30-48 Hrs'
        }, {
            'id': 4,
            "question": 'The hormone with no changes in menstrual cycle is',
            'Options': [
                'Activin',
                'LH',
                'FSH',
                'Estrogen'
            ],
            'answer': 'Estrogen'
        }, {
            'id': 5,
            "question": 'Corpus luteum is maintained by __________',
            'Options': [
                'Progesterone',
                'Estrogen',
                'LH',
                'HCG'
            ],
            'answer': 'HCG'
        }, {
            'id': 6,
            "question": 'Progesterone peaks on which day of menstrual cycle ?',
            'Options': [
                '21st day',
                '28th day',
                '16th Day',
                '14th Day'
            ],
            'answer': '14th Day'
        }, {
            'id': 7,
            "question": 'FSH & LH both are inhibited by ________',
            'Options': [
                'Estrogen',
                'Progesterone',
                'Presence of Corpus Luteum',
                'None'
            ],
            'answer': 'Presence of Corpus Luteum'
        }, {
            'id': 8,
            "question": 'Inhibin is secreted by _________',
            'Options': [
                'Ovarian follicle',
                'Corpus Luteum',
                'Ovaries',
                'None'
            ],
            'answer': 'Ovaries'
        }, {
            'id': 9,
            "question": 'Progesterone is produced by',
            'Options': [
                'Theca luteal cells',
                'Pituitary gland',
                'Fallopian tubes',
                'None'
            ],
            'answer': 'Fallopian tubes'
        }, {
            'id': 10,
            "question": 'Sub nuclear cytoplasmic vacuolation is seen in which stage of menstrual cycle ?',
            'Options': [
                'Secretory',
                'follicular phase',
                'secretory phase',
                'menstrual phase'
            ],
            'answer': 'menstrual phase'
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
                if (op.target.innerHTML == questions[active].answer) {
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
        score.innerHTML = `<h1>Your Score is</h1><span><p>${userscore}</p>of<p>${questions.length}</p></span>`
    }
</script>