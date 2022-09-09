<?php
require_once "../logincheck.php";
require_once "../functions.php";
// require_once "reg.php";

$exhib_id = 'cbe0de4ee2161a1c71124af901e4a8990810f45080a5fe2ed542922f7aec5a4c';
require_once "../exhibcheck.php";
$curr_room = 'posttest_module1';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">

    <style>
        @media only screen and (min-device-width: 319px) and (max-device-width: 425px){
.dropdown:checked + label, .dropdown:not(:checked) + label {
    height: 11vmin;
    width: 28rem;
}}
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Integrace</title>

<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12 bg-white col-12 p-2 pl-4">
<!-- <img src="integrace_newlogo1.png"  width="260px" height="98px"  alt=""> -->
<img src="AAG LOGO.png"  width="260px" height="98px"  alt="">
<img src="logo-new.png"  width="260px" height="98px" style="float:right"  alt="">

        </div>
        <header class="start color" >
    <button id="start_quiz" style="background-color:#b30086;">ASSESSMENT 1 - PHYSIOLOGY OF THE MENSTRUAL CYCLE</button>
</header>
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
	  		</div>

			  <input class="dropdown-sub4" type="checkbox" id="dropdown-sub4" name="dropdown-sub4"/>
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
          <!-- <a href="../lobby.php" class="float-right" ><button  class="btn2 mt-3 ml-3"><i class="fa-solid fa-house"></i></button></a> -->
  	</div>
</div>

<!-- header start butoon  -->
<!-- <header class="start">
    <button id="start_quiz">Start Pre-Test</button>
</header> -->
<!-- quiz box -->
<section class="quiz_container">
    <div class="quiz_text">
        <h1>ASSESSMENT 1 - PHYSIOLOGY OF THE MENSTRUAL CYCLE</h1>
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
 
    <!-- <button id="replay" class="btn1">Re-Take Assessment</button><br>
    <a href="../module21.php" id="module"><button  class="btn mt-3">Re-Watch Module 1</button></a>  -->

     <button id="replay" class="btn1 mt-3">Re-Take Assessment</button>
    <a href="../module21.php" id="module"><button  class="btn1 mt-3">Re-Watch Module 1</button></a> 
 <br>
 <a href="../quizfile/pretest2.php" id="module1"><button  class="btn2 mt-3">Module 2 - Physiology of Conception</button></a> 
 <!-- <a href="https://coact.live/AllAboutGestation/rateing/" id=""><button  class="btn2 mt-3">Feedback</button></a>  -->
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

<a href="https://coact.live/AllAboutGestation/lobby.php"  id="module1"><button  class="btn1 mt-3">Home</button></a> 
</article>

<script>
    const questions = [{
            'id': 1,
            "question": 'Ovulation in a woman with 28 days cycle occurs at ?',
            'Options': [
                '16 days prior to menstruation',
                '15 days prior to menstruation',
                '14 days prior to menstruation',
                '12 days prior to menstruation'
            ],
            'answer': '14 days prior to menstruation'
        }, {
            'id': 2,
            "question": 'Corpus luteum starts regressing after how many days of ovulation ?',
            'Options': [
                '15 days',
                '10 days',
                '5 days',
                '8 days'
            ],
            'answer': '10 days'
        }, {
            'id': 3,
            "question": 'The interval between ovulation and LH surge is ________',
            'Options': [
                '24-48 hours',
                '24-28 hours',
                '36-72 hours',
                '30-48 hours'
            ],
            'answer': '24-48 hours'
        }, {
            'id': 4,
            "question": 'The hormone with no changes in menstrual cycle is',
            'Options': [
                'Activin',
                'LH',
                'FSH',
                'Estrogen'
            ],
            'answer': 'Activin'
        }, {
            'id': 5,
            "question": 'Corpus luteum is maintained by ________',
            'Options': [
                'Estrogen',
                'LH',
                'Progesterone',
                'HCG'
            ],
            'answer': 'Progesterone'
        }, {
            'id': 6,
            "question": 'Progesterone peaks on which day of menstrual cycle ?',
            'Options': [
                '28th day',
                '16th Day',
                '14th Day',
                '21st day'
            ],
            'answer': '21st day'
        }, {
            'id': 7,
            "question": 'FSH & LH both are inhibited by ________',
            'Options': [
                'Progesterone',
                'Estrogen',
                'Presence of Corpus Luteum',
                'None'
            ],
            'answer': 'Estrogen'
        }, {
            'id': 8,
            "question": 'Inhibin is secreted by _________',
            'Options': [
                'Corpus Luteum',
                'Ovaries',
                'Ovarian follicle',
                'None'
            ],
            'answer': 'Ovarian follicle'
        }, {
            'id': 9,
            "question": 'Progesterone is produced by',
            'Options': [
                'Pituitary gland',
                'Fallopian tubes',
                'Theca luteal cells',
                'None'
            ],
            'answer': 'Theca luteal cells'
        }, {
            'id': 10,
            "question": 'Sub nuclear cytoplasmic vacuolation is seen in which stage of menstrual cycle ?',
            'Options': [
                'Secretory',
                'Ovulation',
                'Menstrual',
                'Follicular phase'
            ],
            'answer': 'Secretory'
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
    const module = document.querySelector('#module');
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
objXMLHttpRequest.open('GET', "haras1.php?s="+userscore+"&e=<?= $user_email; ?>", true);
objXMLHttpRequest.send();
    
    if(userscore >=500){
alert("Sucessfully complited module 1");
// document.getElementById("module").style.visibility = "visible";
//   document.getElementById("module1").style.display = "block";

    }
    
    
//     else if(userscore <800){
// alert("Not eligile to attend next module please try again");
//  document.getElementById("module").style.visibility = "hidden";
//   document.getElementById("module1").style.display = "none";
// var objXMLHttpRequest = new XMLHttpRequest();
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
// objXMLHttpRequest.open('GET', "haras1.php?s="+userscore+"&e=<?= $user_email; ?>", true);
// objXMLHttpRequest.send();
    }
    // }


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
            alert("Please Fill Both Field");
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

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mag-popup.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <?php require_once "scripts.php" ?>
<?php require_once "../exhib-script.php" ?>

<?php require_once "../commons.php" ?>
<?php require_once "scripts.php" ?>
<?php require_once "../audi-script.php" ?>