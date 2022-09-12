<?php
require_once 'functions.php';

$errors = [];
$succ = '';

$title = '';
$fname = '';
$lname = '';
$emailid = '';
$mobile = '';
$pincode = '';
$country = 0;
$state = 0;
$city = 0;
$topics = '';
$specialty = '';
$education = '';
$updates = '';
$app = '';

$topicsArr = [];
$updatesArr = [];

if (isset($_POST['reguser-btn'])) {
    // if (empty($_POST['title'])) {
    //     $errors['title'] = 'Title is required';
    // }
    if (empty($_POST['fname'])) {
        $errors['fname'] = 'First Name is required';
    }
    if (empty($_POST['lname'])) {
        $errors['lname'] = 'Last Name is required';
    }
    if (empty($_POST['emailid'])) {
        $errors['email'] = 'Email ID is required';
    }
    if (empty($_POST['mobile'])) {
        $errors['mobile'] = 'Phone No. is required';
    }
    if (empty($_POST['pincode'])) {
        $errors['pincode'] = 'State Medical Council is required';
    }
    // if (empty($_POST['topics'])) {
    //     $errors['topics'] = 'TOPIC is required';
    // }
    if (empty($_POST['updates'])) {
        $errors['updates'] = 'Name of the council is required';
    }
    if (empty($_POST['specialty'])) {
        $errors['specialty'] = 'State Medical Register Number is required';
    }
    if (empty($_POST['education'])) {
        $errors['education'] = 'reg no. is required';
    }
    if ($_POST['country'] == '0') {
        $errors['country'] = 'Country is required';
    }
    if ($_POST['state'] == '0') {
        $errors['state'] = 'State is required';
    }
    if ($_POST['city'] == '0') {
        $errors['city'] = 'City is required';
    }


    // $title = $_POST['title'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailid = $_POST['emailid'];
    $mobile = $_POST['mobile'];
    $pincode = $_POST['pincode'];
    // $topics = $_POST['topics'];
    $updates = $_POST['updates'];
    $specialty = $_POST['specialty'];
    $education = $_POST['education'];

    // if (isset($_POST['country'])) {
    //     $country = $_POST['country'];
    // }
    if (isset($_POST['country'])) {
        $country = $_POST['country'];
    }
    if (isset($_POST['state'])) {
        $state = $_POST['state'];
    }
    if (isset($_POST['city'])) {
        $city = $_POST['city'];
    }


    // if (isset($_POST['topic'])) {
    //     $topicsArr = $_POST['topic'];
    //     foreach ($topicsArr as $topic) {
    //         $topics .= $topic . ',';
    //     }
    //     $topics = substr(trim($topics), 0, -1);
    // }
    // if (isset($_POST['updates'])) {
    //     $updatesArr = $_POST['updates'];
    //     foreach ($updatesArr as $update) {
    //         $updates .= $update . ',';
    //     }
    //     $updates = substr(trim($updates), 0, -1);
    // }

    $app = $_POST['app'];

    if (count($errors) == 0) {
        $newuser = new User();
        $newuser->__set('title', $title);
        $newuser->__set('firstname', $fname);
        $newuser->__set('lastname', $lname);
        $newuser->__set('emailid', $emailid);
        $newuser->__set('mobilenum', $mobile);
        $newuser->__set('country', $country);
        $newuser->__set('state', $state);
        $newuser->__set('city', $city);
        $newuser->__set('pincode', $pincode);
        $newuser->__set('verified', $app);
        $newuser->__set('topic_interest', $topics);
        $newuser->__set('specialty', $specialty);
        $newuser->__set('education', $education);
        $newuser->__set('updates', $updates);

        $add = $newuser->addUser();
        //var_dump($add);
        $reg_status = $add['status'];

        if ($reg_status == "success") {
            $succ = $add['message'];
            $title = '';
            $fname = '';
            $lname = '';
            $emailid = '';
            $mobile = '';
            $pincode = '';
            $country = 0;
            $state = 0;
            $city = 0;
            $topics = '';
            $updates = '';
            $specialty = '';
            $education = '';
            $app = '';
            $topics = '';
            $updates = '';
            $topicsArr = [];
            $updatesArr = [];
        } else {
            $errors['reg'] = $add['message'];
        }
    }
}

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $event_title ?></title>
    <link rel="stylesheet" href="assets/css/normalize.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/styless.css">
</head>

<body>

    <div class="container reg-content">
        <div class="row">
        <div class="col-md-1"></div>
            <div class="col-12 col-md-10 p-0">
                <img src="assets/img/AAG V Connect Banner 1960 X 1080 px new1.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-1 bg-white"></div>
            <div class="col-12 col-md-8 bg-white mx-auto p-2">
                <h5> Register For AAG </h5>
                <?php
                if (count($errors) > 0) : ?>
                    <div class="alert alert-danger alert-msg">
                        <ul class="list-unstyled">
                            <?php foreach ($errors as $error) : ?>
                                <li>
                                    <?php echo $error; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if ($succ != '') { ?>
                    <div class="alert alert-success alert-msg">
                        <?= $succ ?>
                    </div>
                <?php } ?>
                <form method="POST">
                    <div class="row mt-3 mb-1">
                     
                        <div class="col-12 col-md-6">
                            <label>First Name<sup class="req">*</sup></label>
                            <input type="text" id="fname" name="fname" class="input" value="<?php echo $fname; ?>" autocomplete="off">
                        </div> 
                        <div class="col-12 col-md-6 mt">
                            <label>Last Name<sup class="req">*</sup></label>
                            <input type="text" id="lname" name="lname" class="input" value="<?php echo $lname; ?>" autocomplete="off">
                        </div>
                    </div>
                 
                    <div class="row mt-3 mb-1">
                        <div class="col-12 col-md-6">
                            <label>Email ID<sup class="req">*</sup></label>
                            <input type="email" id="emailid" name="emailid" class="input" value="<?php echo $emailid; ?>" autocomplete="off">
                        </div>
                        <div class="col-12 col-md-6 mt">
                            <label>Phone No.<sup class="req">*</sup></label>
                            <input type="number" id="mobile" name="mobile" class="input" value="<?php echo $mobile; ?>" autocomplete="off" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>
                    </div>
                    <div class="row mt-3 mb-1">
                        <div class="col-12 col-md-6">
                            <label>State Medical Council<sup class="req">*</sup></label>
                            <input type="text" id="pincode" name="pincode" class="input" value="<?php echo $pincode; ?>" autocomplete="off" maxlength="10">
                        </div>
                        <div class="col-12 col-md-6 mt">
                            <label>State Medical Register Number<sup class="req">*</sup></label>
                            <input type="text" id="specialty" name="specialty" class="input" value="<?php echo $specialty; ?>" autocomplete="off" maxlength="10" oninput="">
                        </div>
                        
                    </div>
                    <div class="row mt-3 mb-1">
                        
                   
                        <div class="col-12 col-md-6">
                            <label>Name of the council <sup class="req">*</sup></label>
                            <input type="text" id="updates" name="updates" class="input" value="<?php echo $updates; ?>" autocomplete="off" maxlength="10" oninput="">
                        </div>
                        <div class="col-12 col-md-6">
                            
                            </div>
                    </div>

                    <div class="row mt-3 mb-1">
                        <div class="col-12 col-md-6">
                            <label>Registation Number<sup class="req">*</sup></label>
                            <input type="text" id="education" name="education" class="input" value="<?php echo $education; ?>" autocomplete="off" maxlength="10">
                        </div>
                        <div class="col-12 col-md-6">
                            <label>Country<sup class="req">*</sup></label>
                            <div id="countries">
                                <select class="input" id="country" name="country" onChange="updateState()">
                                    <option>Select Country</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3 mb-1">
                        <div class="col-12 col-md-6">
                            <label>State<sup class="req">*</sup></label>
                            <div id="states">
                                <select class="input" id="state" name="state" onChange="updateCity()">
                                    <option value="0">Select State</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label>City<sup class="req">*</sup></label>
                            <div id="cities">
                                <select class="input" id="city" name="city">
                                    <option value="0">Select City</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-3">
                        <div class="col-12 col-md-12">
                            <!-- <small><sup class="req">*</sup> denotes mandatory fields.</small><br><br> -->
                            <input type="hidden" id="app" name="app" value="0">
                            <input type="submit" name="reguser-btn" id="btnSubmit" class="form-submit btn-register" value="" />
                            <a href="./" class="form-cancel"><img src="assets/img/cancel-btn.jpg" alt="" /></a>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-1 bg-white"></div>
            <div class="col-md-1"></div>
        </div>
        <!-- <div class="row bg-white">
            <div class="col-12">
                <img src="assets/img/line-h.jpg" class="img-fluid" alt="" />
            </div>
        </div> -->
     

    </div>
 
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            getCountries();
        });

        function getCountries() {
            $.ajax({
                url: 'control/event.php',
                data: {
                    action: 'getcountries',
                    country: '<?= $country ?>'
                },
                type: 'post',
                success: function(response) {
                    $("#countries").html(response);
                }
            });
        }

        function updateState() {
            var c = $('#country').val();
            if (c != '0') {
                $.ajax({
                    url: 'control/event.php',
                    data: {
                        action: 'getstates',
                        country: c
                    },
                    type: 'post',
                    success: function(response) {

                        $("#states").html(response);
                    }
                });
            }
        }

        function updateCity() {
            var s = $('#state').val();
            if (s != '0') {
                $.ajax({
                    url: 'control/event.php',
                    data: {
                        action: 'getcities',
                        state: s
                    },
                    type: 'post',
                    success: function(response) {
                        $("#cities").html(response);
                    }
                });
            }
        }
    </script>
    <?php require_once 'ga.php';  ?>
    <?php require_once 'footer.php';  ?>