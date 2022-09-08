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
$q07 = '';
$q08 = '';
$q09 = '';
$q10 = '';
$q11 = '';
$q12 = '';
$q13 = '';
$q14 = '';
$q15 = '';
$q16 = '';
$q17 = '';
$q18 = '';
$q19 = '';
$q20 = '';
$q21 = '';
$q22 = '';
$q23 = '';
$q24 = '';
$q25 = '';
$q26 = '';
$q27 = '';
$q28 = '';
$q29 = '';
$userid = '';

if (isset($_POST['fbsub-btn'])) {

    if (
        empty($_POST['q01']) ||
        empty($_POST['q02']) ||
        empty($_POST['q03']) ||
        empty($_POST['q04']) ||
        empty($_POST['q05']) ||
        empty($_POST['q06']) ||
        empty($_POST['q07']) ||
        empty($_POST['q08']) ||
        empty($_POST['q09']) ||
        empty($_POST['q10']) ||
        empty($_POST['q11']) ||
        empty($_POST['q12']) ||
        empty($_POST['q13']) ||
        empty($_POST['q14']) ||
        empty($_POST['q15']) ||
        empty($_POST['q16']) ||
        empty($_POST['q17']) ||
        empty($_POST['q18']) ||
        empty($_POST['q19']) ||
        empty($_POST['q20']) ||
        empty($_POST['q21']) ||
        empty($_POST['q22']) ||
        empty($_POST['q23']) ||
        empty($_POST['q24']) ||
        empty($_POST['q25']) ||
        empty($_POST['q26']) ||
        empty($_POST['q27']) ||
        empty($_POST['q28']) ||
        empty($_POST['q29'])

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
    if (isset($_POST['q06'])) {
        $q06 = $_POST['q06'];
    }
    if (isset($_POST['q07'])) {
        $q07 = $_POST['q07'];
    }
    if (isset($_POST['q08'])) {
        $q08 = $_POST['q08'];
    }
    if (isset($_POST['q09'])) {
        $q09 = $_POST['q09'];
    }
    if (isset($_POST['q10'])) {
        $q10 = $_POST['q10'];
    }
    if (isset($_POST['q11'])) {
        $q11 = $_POST['q11'];
    }
    if (isset($_POST['q12'])) {
        $q12 = $_POST['q12'];
    }
    if (isset($_POST['q13'])) {
        $q13 = $_POST['q13'];
    }
    if (isset($_POST['q14'])) {
        $q14 = $_POST['q14'];
    }
    if (isset($_POST['q15'])) {
        $q15 = $_POST['q15'];
    }
    if (isset($_POST['q16'])) {
        $q16 = $_POST['q16'];
    }
    if (isset($_POST['q17'])) {
        $q17 = $_POST['q17'];
    }
    if (isset($_POST['q18'])) {
        $q18 = $_POST['q18'];
    }
    if (isset($_POST['q19'])) {
        $q19 = $_POST['q19'];
    }
    if (isset($_POST['q20'])) {
        $q20 = $_POST['q20'];
    }
    if (isset($_POST['q21'])) {
        $q21 = $_POST['q21'];
    }
    if (isset($_POST['q22'])) {
        $q22 = $_POST['q22'];
    }
    if (isset($_POST['q23'])) {
        $q23 = $_POST['q23'];
    }
    if (isset($_POST['q24'])) {
        $q24 = $_POST['q24'];
    }
    if (isset($_POST['q25'])) {
        $q25 = $_POST['q25'];
    }
    if (isset($_POST['q26'])) {
        $q26 = $_POST['q26'];
    }
    if (isset($_POST['q27'])) {
        $q27 = $_POST['q27'];
    }
    if (isset($_POST['q28'])) {
        $q28 = $_POST['q28'];
    }
    if (isset($_POST['q29'])) {
        $q29 = $_POST['q29'];
    }



    if (count($errors) == 0) {
        $fb = new Feedback();
        $fb->__set('user_id', $userid);
        $fb->__set('q01', $_POST['q01']);
        $fb->__set('q02', $_POST['q02']);
        $fb->__set('q03', $_POST['q03']);
        $fb->__set('q04', $_POST['q04']);
        $fb->__set('q05', $_POST['q05']);
        $fb->__set('q06', $_POST['q06']);
        $fb->__set('q07', $_POST['q07']);
        $fb->__set('q08', $_POST['q08']);
        $fb->__set('q09', $_POST['q09']);
        $fb->__set('q10', $_POST['q10']);
        $fb->__set('q11', $_POST['q11']);
        $fb->__set('q12', $_POST['q12']);
        $fb->__set('q13', $_POST['q13']);
        $fb->__set('q14', $_POST['q14']);
        $fb->__set('q15', $_POST['q15']);
        $fb->__set('q16', $_POST['q16']);
        $fb->__set('q17', $_POST['q17']);
        $fb->__set('q18', $_POST['q18']);
        $fb->__set('q19', $_POST['q19']);
        $fb->__set('q20', $_POST['q20']);
        $fb->__set('q21', $_POST['q21']);
        $fb->__set('q22', $_POST['q22']);
        $fb->__set('q23', $_POST['q23']);
        $fb->__set('q24', $_POST['q24']);
        $fb->__set('q25', $_POST['q25']);
        $fb->__set('q26', $_POST['q26']);
        $fb->__set('q27', $_POST['q27']);
        $fb->__set('q28', $_POST['q28']);
        $fb->__set('q29', $_POST['q29']);

        $subFeedback = $fb->submitFeedback();

        //var_dump($subFeedback);

        if ($subFeedback['status'] == 'success') {
            $succ = true;
        } else {
            $errors['msg'] = $subFeedback['message'];
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
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <img src="assets/img/reg-banner.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row bg-white color-grey py-2">
            <div class="col-12 text-center">
                <h5 class="reg-title">BOOT 2021-Feedback Form</h5>
            </div>
        </div>
        <div class="row bg-white color-grey">
            <div class="col-12 col-md-8 offset-md-2">
                <?php if (!$succ) { ?>
                    <div id="register-area">
                        <?php
                        if (count($errors) > 0) : ?>
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    <?php foreach ($errors as $error) : ?>
                                        <li>
                                            <?php echo $error; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif;
                        ?>
                        <form method="POST">
                            <input type="hidden" id="userid" name="userid" class="input" value="<?= $_SESSION['userid'] ?>" required>


                            <div class="row mb-1">
                                <div class="col-12">
                                    <strong>Thank you for attending OTA Best of Orthopaedic Techniques Live 2021. Please let us know about your experience in the course and give your valuable feedback for the betterment of future programs.</strong>
                                </div>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="col-12">
                                    <table class="table">
                                        <tr align="center">
                                            <th align="left">Please rate the following</td>
                                            <th width="150">Strongly Agree</td>
                                            <th width="150">Strongly Disagree</td>
                                            <th width="100">Agree</td>
                                            <th width="100">Disagree</td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">The content will be useful in my practice.</td>
                                            <td><input type="radio" name="q01" <?= ($q01 == 'Strongly Agree') ? 'checked' : '' ?> value="Strongly Agree"></td>
                                            <td><input type="radio" name="q01" <?= ($q01 == 'Strongly Disagree') ? 'checked' : '' ?> value="Strongly Disagree"></td>
                                            <td><input type="radio" name="q01" <?= ($q01 == 'Agree') ? 'checked' : '' ?> value="Agree"></td>
                                            <td><input type="radio" name="q01" <?= ($q01 == 'Disagree') ? 'checked' : '' ?> value="Disagree"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Appropriate time was allocated for discussion.</td>
                                            <td><input type="radio" name="q02" <?= ($q02 == 'Strongly Agree') ? 'checked' : '' ?> value="Strongly Agree"></td>
                                            <td><input type="radio" name="q02" <?= ($q02 == 'Strongly Disagree') ? 'checked' : '' ?> value="Strongly Disagree"></td>
                                            <td><input type="radio" name="q02" <?= ($q02 == 'Agree') ? 'checked' : '' ?> value="Agree"></td>
                                            <td><input type="radio" name="q02" <?= ($q02 == 'Disagree') ? 'checked' : '' ?> value="Disagree"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">The educational design/format supported my learning.</td>
                                            <td><input type="radio" name="q03" <?= ($q03 == 'Strongly Agree') ? 'checked' : '' ?> value="Strongly Agree"></td>
                                            <td><input type="radio" name="q03" <?= ($q03 == 'Strongly Disagree') ? 'checked' : '' ?> value="Strongly Disagree"></td>
                                            <td><input type="radio" name="q03" <?= ($q03 == 'Agree') ? 'checked' : '' ?> value="Agree"></td>
                                            <td><input type="radio" name="q03" <?= ($q03 == 'Disagree') ? 'checked' : '' ?> value="Disagree"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">I would recommend this course to a colleague.</td>
                                            <td><input type="radio" name="q04" <?= ($q04 == 'Strongly Agree') ? 'checked' : '' ?> value="Strongly Agree"></td>
                                            <td><input type="radio" name="q04" <?= ($q04 == 'Strongly Disagree') ? 'checked' : '' ?> value="Strongly Disagree"></td>
                                            <td><input type="radio" name="q04" <?= ($q04 == 'Agree') ? 'checked' : '' ?> value="Agree"></td>
                                            <td><input type="radio" name="q04" <?= ($q04 == 'Disagree') ? 'checked' : '' ?> value="Disagree"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12">
                                    <strong>Please rate the faculty's quality of teaching.</strong>
                                </div>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="col-12">
                                    <table class="table">
                                        <tr align="center">
                                            <th align="left">Faculty</td>
                                            <th width="150">Excellent</td>
                                            <th width="100">Good</td>
                                            <th width="100">Fair</td>
                                            <th width="150">Poor</td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Jesse Jupiter</td>
                                            <td><input type="radio" name="q05" <?= ($q05 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q05" <?= ($q05 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q05" <?= ($q05 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q05" <?= ($q05 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Mike McKee</td>
                                            <td><input type="radio" name="q06" <?= ($q06 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q06" <?= ($q06 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q06" <?= ($q06 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q06" <?= ($q06 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Ken Egol</td>
                                            <td><input type="radio" name="q07" <?= ($q07 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q07" <?= ($q07 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q07" <?= ($q07 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q07" <?= ($q07 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Timothy White</td>
                                            <td><input type="radio" name="q08" <?= ($q08 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q08" <?= ($q08 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q08" <?= ($q08 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q08" <?= ($q08 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Tim Moore</td>
                                            <td><input type="radio" name="q09" <?= ($q09 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q09" <?= ($q09 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q09" <?= ($q09 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q09" <?= ($q09 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">David Chafey</td>
                                            <td><input type="radio" name="q10" <?= ($q10 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q10" <?= ($q10 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q10" <?= ($q10 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q10" <?= ($q10 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Della Rocca</td>
                                            <td><input type="radio" name="q11" <?= ($q11 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q11" <?= ($q11 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q11" <?= ($q11 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q11" <?= ($q11 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Arvind von Keudell</td>
                                            <td><input type="radio" name="q12" <?= ($q12 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q12" <?= ($q12 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q12" <?= ($q12 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q12" <?= ($q12 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Paul Tornetta</td>
                                            <td><input type="radio" name="q13" <?= ($q13 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q13" <?= ($q13 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q13" <?= ($q13 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q13" <?= ($q13 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Hasan Mir</td>
                                            <td><input type="radio" name="q14" <?= ($q14 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q14" <?= ($q14 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q14" <?= ($q14 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q14" <?= ($q14 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Peter Giannoudis</td>
                                            <td><input type="radio" name="q15" <?= ($q15 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q15" <?= ($q15 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q15" <?= ($q15 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q15" <?= ($q15 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Kevin Tetsworth</td>
                                            <td><input type="radio" name="q16" <?= ($q16 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q16" <?= ($q16 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q16" <?= ($q16 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q16" <?= ($q16 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Josh Gary</td>
                                            <td><input type="radio" name="q17" <?= ($q17 == 'Excellent') ? 'checked' : '' ?> value="Excellent"></td>
                                            <td><input type="radio" name="q17" <?= ($q17 == 'Good') ? 'checked' : '' ?> value="Good"></td>
                                            <td><input type="radio" name="q17" <?= ($q17 == 'Fair') ? 'checked' : '' ?> value="Fair"></td>
                                            <td><input type="radio" name="q17" <?= ($q17 == 'Poor') ? 'checked' : '' ?> value="Poor"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col-12">
                                    <strong>How would you rate the content you obtained for each of the broad topic?</strong>
                                </div>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="col-12">
                                    <table class="table">
                                        <tr align="center">
                                            <th align="left">Broad Topic</td>
                                            <th width="200">Exceptional content with new learnings </td>
                                            <th width="200">Ordinary content with few learnings </td>
                                            <th width="150">Needs Improvement </td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Upper Extremity Trauma</td>
                                            <td><input type="radio" name="q18" <?= ($q18 == 'Exceptional') ? 'checked' : '' ?> value="Exceptional"></td>
                                            <td><input type="radio" name="q18" <?= ($q18 == 'Ordinary') ? 'checked' : '' ?> value="Ordinary"></td>
                                            <td><input type="radio" name="q18" <?= ($q18 == 'Needs Improvement') ? 'checked' : '' ?> value="Needs Improvement"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Foot and Ankle Injuries</td>
                                            <td><input type="radio" name="q19" <?= ($q19 == 'Exceptional') ? 'checked' : '' ?> value="Exceptional"></td>
                                            <td><input type="radio" name="q19" <?= ($q19 == 'Ordinary') ? 'checked' : '' ?> value="Ordinary"></td>
                                            <td><input type="radio" name="q19" <?= ($q19 == 'Needs Improvement') ? 'checked' : '' ?> value="Needs Improvement"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Spine Trauma</td>
                                            <td><input type="radio" name="q20" <?= ($q20 == 'Exceptional') ? 'checked' : '' ?> value="Exceptional"></td>
                                            <td><input type="radio" name="q20" <?= ($q20 == 'Ordinary') ? 'checked' : '' ?> value="Ordinary"></td>
                                            <td><input type="radio" name="q20" <?= ($q20 == 'Needs Improvement') ? 'checked' : '' ?> value="Needs Improvement"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Pathological Fractures</td>
                                            <td><input type="radio" name="q21" <?= ($q21 == 'Exceptional') ? 'checked' : '' ?> value="Exceptional"></td>
                                            <td><input type="radio" name="q21" <?= ($q21 == 'Ordinary') ? 'checked' : '' ?> value="Ordinary"></td>
                                            <td><input type="radio" name="q21" <?= ($q21 == 'Needs Improvement') ? 'checked' : '' ?> value="Needs Improvement"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Knee Trauma</td>
                                            <td><input type="radio" name="q22" <?= ($q22 == 'Exceptional') ? 'checked' : '' ?> value="Exceptional"></td>
                                            <td><input type="radio" name="q22" <?= ($q22 == 'Ordinary') ? 'checked' : '' ?> value="Ordinary"></td>
                                            <td><input type="radio" name="q22" <?= ($q22 == 'Needs Improvement') ? 'checked' : '' ?> value="Needs Improvement"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Hip & Pelvis Trauma</td>
                                            <td><input type="radio" name="q23" <?= ($q23 == 'Exceptional') ? 'checked' : '' ?> value="Exceptional"></td>
                                            <td><input type="radio" name="q23" <?= ($q23 == 'Ordinary') ? 'checked' : '' ?> value="Ordinary"></td>
                                            <td><input type="radio" name="q23" <?= ($q23 == 'Needs Improvement') ? 'checked' : '' ?> value="Needs Improvement"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Infection Management</td>
                                            <td><input type="radio" name="q24" <?= ($q24 == 'Exceptional') ? 'checked' : '' ?> value="Exceptional"></td>
                                            <td><input type="radio" name="q24" <?= ($q24 == 'Ordinary') ? 'checked' : '' ?> value="Ordinary"></td>
                                            <td><input type="radio" name="q24" <?= ($q24 == 'Needs Improvement') ? 'checked' : '' ?> value="Needs Improvement"></td>
                                        </tr>
                                        <tr align="center">
                                            <td align="left">Breakthrough/Innovations in Trauma</td>
                                            <td><input type="radio" name="q25" <?= ($q25 == 'Exceptional') ? 'checked' : '' ?> value="Exceptional"></td>
                                            <td><input type="radio" name="q25" <?= ($q25 == 'Ordinary') ? 'checked' : '' ?> value="Ordinary"></td>
                                            <td><input type="radio" name="q25" <?= ($q25 == 'Needs Improvement') ? 'checked' : '' ?> value="Needs Improvement"></td>

                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12">
                                    <strong>Describe your level of practice in orthopaedics:</strong>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12">
                                    <ul class="list-unstyled">
                                        <li><input type="radio" name="q26" <?= ($q26 == 'Resident/In-training') ? 'checked' : '' ?> value="Resident/In-training"> Resident/In-training</li>
                                        <li><input type="radio" name="q26" <?= ($q26 == '0-5 years of practice') ? 'checked' : '' ?> value="0-5 years of practice"> 0-5 years of practice</li>
                                        <li><input type="radio" name="q26" <?= ($q26 == '5-10 years of practice') ? 'checked' : '' ?> value="5-10 years of practice"> 5-10 years of practice</li>
                                        <li><input type="radio" name="q26" <?= ($q26 == '10-20 years of practice') ? 'checked' : '' ?> value="10-20 years of practice"> 10-20 years of practice</li>
                                        <li><input type="radio" name="q26" <?= ($q26 == '20+ years of practice') ? 'checked' : '' ?> value="20+ years of practice"> 20+ years of practice</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12">
                                    <strong>What is your primary specialty area?</strong>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12">
                                    <ul class="list-unstyled">
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Generalist') ? 'checked' : '' ?> value="Generalist"> Generalist</li>
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Shoulder and Elbow') ? 'checked' : '' ?> value="Shoulder and Elbow"> Shoulder and Elbow</li>
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Spine') ? 'checked' : '' ?> value="Spine"> Spine</li>
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Sports Medicine') ? 'checked' : '' ?> value="Sports Medicine"> Sports Medicine</li>
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Pediatrics') ? 'checked' : '' ?> value="Pediatrics"> Pediatrics</li>
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Hip and Knee') ? 'checked' : '' ?> value="Hip and Knee"> Hip and Knee</li>
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Foot and Ankle') ? 'checked' : '' ?> value="Foot and Ankle"> Foot and Ankle</li>
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Trauma') ? 'checked' : '' ?> value="Trauma"> Trauma</li>
                                        <li><input type="radio" name="q27" <?= ($q27 == 'Tumors') ? 'checked' : '' ?> value="Tumors"> Tumors</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <strong>Which topic or faculty would you like to hear in the next program?</strong>
                                    <br>
                                    <textarea name="q28" id="q28" rows="4" class="input"><?= $q28 ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <strong>How would you rate this virtual form of education engagement? (1 – lowest 5 – Highest)</strong>
                                    <ul class="list-unstyled">
                                        <li><input type="radio" name="q29" <?= ($q29 == '1') ? 'checked' : '' ?> value="1"> 1</li>
                                        <li><input type="radio" name="q29" <?= ($q29 == '2') ? 'checked' : '' ?> value="2"> 2</li>
                                        <li><input type="radio" name="q29" <?= ($q29 == '3') ? 'checked' : '' ?> value="3"> 3</li>
                                        <li><input type="radio" name="q29" <?= ($q29 == '4') ? 'checked' : '' ?> value="4"> 4</li>
                                        <li><input type="radio" name="q29" <?= ($q29 == '5') ? 'checked' : '' ?> value="5"> 5</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="fbsub-btn" id="btnSubmit" class="btn btn-primary" value="Submit">
                            </div>



                        </form>
                    </div>
                <?php } else { ?>
                    <div id="registration-confirmation">
                        <div class="alert alert-success">
                            Thanks for giving us your valuable feedback!<br>
                        </div>

                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="row bg-white">
            <div class="col-12">
                <img src="assets/img/line-h.jpg" class="img-fluid" alt="" />
            </div>
        </div>
        <div class="row bg-white p-2">
            <div class="col-4 bor-right p-2 text-center">
                <img src="assets/img/in-assoc.png" class="img-fluid bot-img" alt="" />
            </div>
            <div class="col-4 p-2 text-center">
                <img src="assets/img/sci-partner.png" class="img-fluid bot-img" alt="" />
            </div>
            <div class="col-4 bor-left p-2 text-center color-grey">
                <img src="assets/img/brought-by.png" class="img-fluid bot-img" alt="" />
                <div class="visit">
                    Visit us at <a href="https://www.integracehealth.com/about.html" class="link" target="_blank">https://www.integracehealth.com/about.html</a>
                </div>
            </div>
        </div>


    </div>
    <div id="code">IPL/O/BR/09042021</div>

    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php require_once 'ga.php';  ?>
    <?php require_once 'footer.php';  ?>