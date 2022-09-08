<?php
require_once 'functions.php';

$succ = false;
$errors = [];

$q01 = '';
$q02 = '';
$q03 = '';
$q04 = '';
$q05 = '';
$q06 = '';
$userid = '';

if (isset($_POST['fbsub-btn'])) {

    if (
        empty($_POST['q01']) ||
        empty($_POST['q02']) ||
        empty($_POST['q03']) ||
        empty($_POST['q04']) ||
        empty($_POST['q05']) 
    ) {
        $errors['reply'] = 'Please answer all questions.';
    }
    if (isset($_POST['userid'])) {
        $userid = $_POST['userid'];
    } else {
        header('location: ./');
    }

    if (isset($_POST['q01'])) {
        $q01 = $_POST['q01'];
    }
    if (isset($_POST['q02'])) {
        $q02 = $_POST['q02'];
    }
    if (isset($_POST['q03'])) {
        $q03 = $_POST['q03'];
    }
    if (isset($_POST['q04'])) {
        $q04 = $_POST['q04'];
    }
    if (isset($_POST['q05'])) {
        $q05 = $_POST['q05'];
    }

    if (count($errors) == 0) {
        $fb = new Feedback();
        $fb->__set('user_id', $userid);
        $fb->__set('q01', $_POST['q01']);
        $fb->__set('q02', $_POST['q02']);
        $fb->__set('q03', $_POST['q03']);
        $fb->__set('q04', $_POST['q04']);
        $fb->__set('q05', $_POST['q05']);

        $subFeedback = $fb->submitFeedback();
        if ($subFeedback['status'] == 'success') {
            $succ = true;
        } else {
            $errors['msg'] = $subFeedback['message'];
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    html,body{
    display: grid;
    height: 100%;
    place-items: center;
    text-align: center;
    background: #000;
    }
    .container{
    position: relative;
    width: 400px;
    background: #111;
    padding: 20px 30px;
    border: 1px solid #444;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    }
    .container .post{
    display: none;
    }
    .container .text{
    font-size: 25px;
    color: #666;
    font-weight: 500;
    }
    .container .edit{
    position: absolute;
    right: 10px;
    top: 5px;
    font-size: 16px;
    color: #666;
    font-weight: 500;
    cursor: pointer;
    }
    .container .edit:hover{
    text-decoration: underline;
    }
    .container .star-widget input{
    display: none;
    }
    .star-widget label{
    font-size: 40px;
    color: #444;
    padding: 10px;
    float: right;
    transition: all 0.2s ease;
    }
    input:not(:checked) ~ label:hover,
    input:not(:checked) ~ label:hover ~ label{
    color: #fd4;
    }
    input:checked ~ label{
    color: #fd4;
    }
    input#rate-5:checked ~ label{
    color: #fe7;
    text-shadow: 0 0 20px #952;
    }
    #rate-1:checked ~ form header:before{
    content: "I just hate it ";
    }
    #rate-2:checked ~ form header:before{
    content: "I don't like it ";
    }
    #rate-3:checked ~ form header:before{
    content: "It is awesome ";
    }
    #rate-4:checked ~ form header:before{
    content: "I just like it ";
    }
    #rate-5:checked ~ form header:before{
    content: "I just love it ";
    }
    .container form{
    display: none;
    }
    input:checked ~ form{
    display: block;
    }
    form header{
    width: 100%;
    font-size: 25px;
    color: #fe7;
    font-weight: 500;
    margin: 5px 0 20px 0;
    text-align: center;
    transition: all 0.2s ease;
    }
    form .textarea{
    height: 100px;
    width: 100%;
    overflow: hidden;
    }
    form .textarea textarea{
    height: 100%;
    width: 100%;
    outline: none;
    color: #eee;
    border: 1px solid #333;
    background: #222;
    padding: 10px;
    font-size: 17px;
    resize: none;
    }
    .textarea textarea:focus{
    border-color: #444;
    }
    form .btn{
    height: 45px;
    width: 100%;
    margin: 15px 0;
    }
    form .btn button{
    height: 100%;
    width: 100%;
    border: 1px solid #444;
    outline: none;
    background: #222;
    color: #999;
    font-size: 17px;
    font-weight: 500;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease;
    }
    form .btn button:hover{
    background: #1b1b1b;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="post">
        <div class="text">Thanks for rating us!</div>
        <div class="edit">EDIT</div>
      </div>
      <div class="star-widget">
      
        <input type="radio" name="q01" <?= ($q01 == 'Strongly Agree') ? 'checked' : '' ?> id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="q02" <?= ($q02 == 'Strongly Agree') ? 'checked' : '' ?> id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="q03" <?= ($q03 == 'Strongly Agree') ? 'checked' : '' ?> id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="q04" <?= ($q04 == 'Strongly Agree') ? 'checked' : '' ?> id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="q05" <?= ($q05 == 'Strongly Agree') ? 'checked' : '' ?> id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="POST">
        <input type="hidden" id="userid" name="userid" class="input" value="<?= $_SESSION['userid'] ?>" required>
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="Describe your experience.."></textarea>
          </div>
          <div class="btn">
            <button type="submit">Post</button>
          </div>
        </form>
      </div>
    </div>
     <script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
    </script>

  </body>
</html>