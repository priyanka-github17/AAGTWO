<?php 
require_once "logincheck.php";
$curr_room = 'lobby';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Quiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm_change {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    /* input {
       
        width: 100%;
        height: 17px;

        border: 1px solid #aaaaaa;
    } */
    input[type="checkbox"] {
  
  padding: 10px;
  width: 5%;
  height: 18px;
    margin: 10px !important;
 
}
    input.invalid {
        background-color: #ffdddd;
    }


    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }


    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }


    .step.finish {
        background-color: #4CAF50;
    }
    .navbar {
    background-color: #73919b;
    color: #b6d7e2;
    padding-bottom: 0;
    padding-left: 0;
    border-bottom: solid;
    border-bottom-color: #ccc;
    width: 100%;
}

.footer {
    background-color: #666;
    height: 10%;
    border-top: solid;
    border-top-color: #b6d7e2;
    border-top-width: 8px;
}
.footer-text {
    width: 100%;
    text-align: center;
    font-size: 10px;
    color: #fff;
}
</style>
  <body>
      
  <nav class="navbar navbar-expand-md  ">
      <div class="container-fluid ">
      
            <div class="nav-item nav-link "></div>
            <h1 class="test-center"> Quiz Game</h1>
            <table id=timers style="visibility: hidden;">
              <tr>
                <td> Time left in Game: </td>
                <td> <span id="gameTimer" class="nav-item"></span> </td>
              </tr>
               <tr>
                <td>Time left for Question:</td>
                <td> <span id="quesTimer" class="nav-item"></span> </td>
              </tr>
            </table>
        </div>
      </div>
    </nav>
    <!-- <a href="lobby.php" class="btn btn-danger " >Back</a> -->
  <form name="quiz"  method="POST" id="regForm_change" onsubmit="return onSubmit() ">
        <h1>Quiz:</h1>
        <div id="result"></div>
        <div id="result1"></div>
        <div class="tab">
            <h2>Who is the Budding Leader of the year? (Select Any 3 Winners)</h2>
            <input type="checkbox" name="q1cb1" id="" value="Prineet Grewal">Prineet Grewal <br>
            <input type="checkbox" name="q1cb2" id="" value="Sajini Pillai">Sajini Pillai <br>
            <input type="checkbox" name="q1cb3" id="" value="Neeraj Sharma">Neeraj Sharma <br>
            <input type="checkbox" name="q1cb4" id="" value="Kulkarni Bhushan jdepl">Kulkarni Bhushan jdepl  <br>
            <input type="checkbox" name="q1cb5" id="" value="Aditya Pachunde">Aditya Pachunde  <br>
        </div>
        <div class="tab">
            <h2>Winner for Diversity & Inclusion Trailblazer (Select Any 2 Winners)</h2>
            <input type="checkbox" name="q2cb1" id="" value="Shobha Pandey ">Shobha Pandey <br>
            <input type="checkbox" name="q2cb2" id="" value="Sanjeev Palnitkar">Sanjeev Palnitkar<br>
            <input type="checkbox" name="q2cb3" id="" value="Manoj Dangwal">Manoj Dangwal <br>


        </div>

        <div class="tab">
            <h2>Who all are the Employees of the Year? (Select Any 10 Winners)</h2>
            <input type="checkbox" name="q3cb1" id="" value="Sushma Kannadath">Sushma Kannadath <br>
            <input type="checkbox" name="q3cb2" id="" value="Satish Dange">Satish Dange <br>
            <input type="checkbox" name="q3cb3" id="" value="Rakesh Kumar">Rakesh Kumar <br>
            <input type="checkbox" name="q3cb4" id="" value="Mohammed Ansari">Mohammed Ansari <br>
            <input type="checkbox" name="q3cb5" id="" value="Milan Yadav">Milan Yadav <br>

            <input type="checkbox" name="q3cb6" id="" value="Sachin Kharate">Sachin Kharate <br>
            <input type="checkbox" name="q3cb7" id="" value="Jyotagoud Patil">Jyotagoud Patil <br>
            <input type="checkbox" name="q3cb8" id="" value="Mallikarjuna Reddy Padigapati">Mallikarjuna Reddy Padigapati <br>
            <input type="checkbox" name="q3cb9" id="" value="Ravindra Pawar">Ravindra Pawar <br>
            <input type="checkbox" name="q3cb10" id="" value="Deepak Mishra">Deepak Mishra <br>
            <input type="checkbox" name="q3cb11" id="" value="Nishant Durge">Nishant Durge <br>

            <input type="checkbox" name="q3cb12" id="" value="Sangram Shinde">Sangram Shinde <br>
            <input type="checkbox" name="q3cb13" id="" value="Takalghavankar Suhas">Takalghavankar Suhas <br>
            <input type="checkbox" name="q3cb14" id="" value="Snehal Sonje">Snehal Sonje <br>
            <input type="checkbox" name="q3cb15" id="" value="Ralegaonkar Nilesh M">Ralegaonkar Nilesh M <br>
        </div>


        <div class="tab">
            <h2>Who is the Knowledge Leader of the Year? (Select Any 4 Winners)</h2>
            <input type="checkbox" name="q4cb1" id="" value="Amit Holey">Amit Holey <br>
            <input type="checkbox" name="q4cb2" id="" value="Suneet Taparia  ">Suneet Taparia <br>
            <input type="checkbox" name="q4cb3" id="" value="Arvind Kulkarni ">Arvind Kulkarni <br>
            <input type="checkbox" name="q4cb4" id="" value="Manish Kulkarni">Manish Kulkarni <br>
            <input type="checkbox" name="q4cb5" id="" value="Gudipati Mahesh">Gudipati Mahesh <br>

            <input type="checkbox" name="q4cb6" id="" value="Rupali Patil">Rupali Patil

        </div>
        <div class="tab">
            <h2>Who all are the Leader of the Year? (Select Any 4 Winners)</h2>
            <input type="checkbox" name="q5cb1" id="" value="Ramakant Garg">Ramakant Garg<br>
            <input type="checkbox" name="q5cb2" id="" value="Sanjay Soni">Sanjay Soni <br>
            <input type="checkbox" name="q5cb3" id="" value="Amol Deo">Amol Deo <br>
            <input type="checkbox" name="q5cb4" id="" value="habad Sarup">Shabad Sarup <br>
            <input type="checkbox" name="q5cb5" id="" value="ajesh Edlabadkar">Rajesh Edlabadkar


        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="submit" id="view" onclick="nextPrev()">Submit</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                <!-- <button type="submit" id="view ">Submit</button> -->
                <a href="lobby.php" id="none" style="" class="btn btn-danger  mt-2" onclick="nextPrev()" >Back</a>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>



    </form>

    <script>
        function onSubmit() {
            var score = 0;
            var answers = 0;
            var q1 = [];
            var q2 = [];
            var q3 = [];
            var q4 = [];
            var q5 = [];
            // var answer=q1+q2;
            var numofquestions = 5;
            var pointspossiable = 6;
            var q1ansArr = ['Prineet Grewal', 'Sajini Pillai', 'Neeraj Sharma'];
            var q2ansArr = ['Shobha Pandey ', 'Sanjeev Palnitkar'];
            var q3ansArr = ['Sushma Kannadath', 'Satish Dange', 'Rakesh Kumar', 'Mohammed Ansari', 'Milan Yadav', 'Sachin Kharate', 'Jyotagoud Patil', 'Mallikarjuna Reddy Padigapati', 'Ravindra Pawar', 'Deepak Mishra'];
            var q4ansArr = ['Amit Holey', 'Suneet Taparia  ', 'Arvind Kulkarni ', 'Manish Kulkarni'];
            var q5ansArr = ['Ramakant Garg', 'Sanjay Soni', 'Amol Deo', 'habad Sarup'];
            for (var i = 0; i < 5; i++) {
                if (document.forms['quiz']['q1cb' + (i + 1)].checked) {
                    q1.push(document.forms['quiz']['q1cb' + (i + 1)].value);
                }

            }
            for (var i = 0; i < 3; i++) {
                if (document.forms['quiz']['q2cb' + (i + 1)].checked) {
                    q2.push(document.forms['quiz']['q2cb' + (i + 1)].value);
                }
            }
            for (var i = 0; i < 15; i++) {
                if (document.forms['quiz']['q3cb' + (i + 1)].checked) {
                    q3.push(document.forms['quiz']['q3cb' + (i + 1)].value);
                }
            }
            for (var i = 0; i < 6; i++) {
                if (document.forms['quiz']['q4cb' + (i + 1)].checked) {
                    q4.push(document.forms['quiz']['q4cb' + (i + 1)].value);
                }
            }
            for (var i = 0; i < 5; i++) {
                if (document.forms['quiz']['q5cb' + (i + 1)].checked) {
                    q5.push(document.forms['quiz']['q5cb' + (i + 1)].value);
                }
            }
            // alert(q1);
            var isCorrect, qscore;
            for (var i = 1; i <= numofquestions; i++) {
                qscore = 0;
                // console.log("1");
                for (j = 0; j < eval('q' + i).length; j++) {
                    isCoorect = false;
                    for (var k = 0; k < eval('q' + i + 'ansArr').length; k++) {
                        if (eval('q' + i)[j] == eval('q' + i + 'ansArr')[k]) {
                            isCorrect = true;
                            qscore += 100;

                        } else if (eval('q' + i + 'ansArr').length == k + 1 && !isCorrect) {
                            qscore -= 100;
                        }

                    }
                }

                if (qscore > 0) {
                    score += qscore;
                }
            }
            var isCorrect, qscore;
            for (var i = 1; i <= numofquestions; i++) {
                qscore = 0;
                // console.log("1");
                for (j = 0; j < eval('q' + i).length; j++) {
                    isCoorect = false;
                    for (var k = 0; k < eval('q' + i + 'ansArr').length; k++) {
                        if (eval('q' + i)[j] == eval('q' + i + 'ansArr')[k]) {
                            isCorrect = true;
                            qscore += 100;

                        } else if (eval('q' + i + 'ansArr').length == k + 1 && !isCorrect) {
                            qscore -= 100;
                        }

                    }
                }

                if (qscore > 0) {
                    answers += qscore;
                }
            }
            // var result = document.getElementById('result');
            // result.innerHTML = '<h2>   your score is ' + score + ' <br> Result is <br> 1.  ' + q1 +
            //     '<br> 2. ' + q2 + '<br> 3. ' + q3 + '<br> 4. ' + q4 + '<br> 5. ' + q5 + ' <br> winners are: <br> 1.  ' +
            //     q1ansArr + '<br> 2. ' + q2ansArr + '<br> 3. ' + q3ansArr + '<br> 4. ' + q4ansArr + '<br> 5. ' + q5ansArr + '  </h2>';
            var result = document.getElementById('result');
            result.innerHTML = '<h2>   Your score is ' + score + '</h2>';
			document.getElementById("view").style.display = "none";
			//document.getElementById("view").style.display = "block";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              
               
            //window.location.href = 'lobby.php';
              
              
            }
            }
            xmlhttp.open("GET", "haras1.php?s="+score+"&e=<?= $user_email; ?>", true);
            xmlhttp.send();
            
			
            // var result1 = document.getElementById('result1');
            // result.innerHTML = '<h2>  Winners is ' + q1ansArr +  ' <br>'+ q2ansArr+ '  </h2>';

            // var xmlhttp = new XMLHttpRequest();
            // xmlhttp.onreadystatechange = function() {
            // if (this.readyState == 4 && this.status == 200) {
            //    console.log(this.responseText);
            //     }
            // };

            // xhttp.open("POST", "haras1.php", true);
            // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // xhttp.send("score="+ score + "&email=<?= $user_email; ?>");
             return false;


        }


        //   showTab();
        //   nextPrev();
        //   validateForm();



        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {

            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";

            if (n == 0) {
                document.getElementById("view").style.display = "none";
            } else if (n == 1) {
                document.getElementById("view").style.display = "none";
            } else if (n == 2) {
                document.getElementById("view").style.display = "none";
            } else if (n == 3) {
                document.getElementById("view").style.display = "none";
            } else if (n == 4) {
                document.getElementById("view").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").style = "display:none";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }

            if (n == 0) {
                document.getElementById("none").style.display = "none";
            } else if (n == 1) {
                document.getElementById("none").style.display = "none";
            } else if (n == 2) {
                document.getElementById("none").style.display = "none";
            } else if (n == 3) {
                document.getElementById("none").style.display = "none";
            } else if (n == 4) {
                document.getElementById("none").style.display = "block";
            }
            // if (n == (x.length - 1)) {
            //     document.getElementById("nextBtn").style = "display:none";
            // } else {
            //     document.getElementById("nextBtn").innerHTML = "Next";
            // }
            // fixStepIndicator();
            // fixStepIndicator();
        }

        function nextPrev(n) {

            var x = document.getElementsByClassName("tab");

            if (n == 1 && !validateForm()) return false;

            x[currentTab].style.display = "none";

            currentTab = currentTab + n;

            if (currentTab >= x.length) {

                 //document.getElementsById("regForm_change").submit();
                return false;
            }

            showTab(currentTab);
        }

        function validateForm() {

            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");

            for (i = 0; i < y.length; i++) {

                if (y[i].value == false) {

                    y[i].className += " invalid";

                    valid = false;
                }
            }
            return valid;
        }

        // function fixStepIndicator(n) {

        //     var i, x = document.getElementsByClassName("step");
        //     for (i = 0; i < x.length; i++) {
        //         x[i].className = x[i].className.replace(" active", "");
        //     }

        //     x[n].className += " active";
        // }
    </script>

    
</body>
</html>