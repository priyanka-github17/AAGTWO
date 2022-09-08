<?php
require_once '../functions.php';
require_once 'logincheck.php';

$audi1_id = '9542018936806c44c9e70be0bc37ba07a129d4b0e3783ef07acbb7a839381514';
$audi2_id = '9f7cd6782b7cf4716771e9c7d5328c95549b3bda9833cde8f3e7449ed59c8e08';
$audi3_id = 'd92d15f91a4b105183d3665531c7fc7a67c98176e22bcc96c3dc91aee56c6334';

$sess = new Session();
?>
<?php
require_once 'header.php';
require_once 'nav.php';
?>
<div class="container-fluid">
    <div id="superdashboard">
        <div class="row">
            <div class="col-12 col-md-4">
                <!-- <div id="audi01" class="audi">
                    <?php
                    $sess->__set('audi_id', $audi1_id);
                    $audiUrl1 = $sess->getCurrLiveSession();
                    $sess1Id = $audiUrl1[0]['session_id'];
                    $sess->__set('session_id', $sess1Id);
                    $sess1Url = $sess->getWebcastSessionURL();
                    if (!empty($sess1Url)) {
                        $sess1Url .= '?muted=1';
                    }
                    ?>
                    <div class="title">Module 1</div>
                    <div class="video">
                        <div id="vid01" class="video-player">
                            <iframe src="<?= $sess1Url ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="width:100%;height:100%;"></iframe>
                        </div>

                    </div>
                    <div class="title">Viewers: <div id="audi1viewer" style="display: inline-block;">0</div>
                    </div> -->
                    <!-- <div class="tabs">
                        <a href="#" id="qa-audi1" onClick="showQA1()" class="active">Questions</a>
                        <a href="#" id="viewers-audi1" onClick="showViewers1()" class="">Viewers</a>
                    </div> -->
                    <!-- <div id="questions-audi1" style="display:block;">
                        <div id="audi1ques" class="details scroll"></div>
                    </div>
                    <div id="view-audi1" style="display:none;">
                        <div id="audi1views" class="details scroll"></div>
                    </div> -->

                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- <div id="audi02" class="audi">
                    <?php
                    $sess->__set('audi_id', $audi2_id);
                    $audiUrl2 = $sess->getCurrLiveSession();
                    $sess2Id = $audiUrl2[0]['session_id'];
                    $sess->__set('session_id', $sess2Id);
                    $sess2Url = $sess->getWebcastSessionURL();
                    if (!empty($sess2Url)) {
                        $sess2Url .= '?muted=1';
                    }
                    ?>
                    <div class="title">Module 2</div>
                    <div class="video">
                        <div id="vid02" class="video-player">
                            <iframe src="<?= $sess2Url ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="width:100%;height:100%;"></iframe>
                        </div>

                    </div>
                    <div class="title">Viewers: <div id="audi2viewer" style="display: inline-block;">0</div>
                    </div> -->
                    <!-- <div class="tabs">
                        <a href="#" id="qa-audi2" onClick="showQA2()" class="active">Questions</a>
                        <a href="#" id="viewers-audi2" onClick="showViewers2()" class="">Viewers</a>
                    </div>
                    <div id="questions-audi2" style="display:block;">
                        <div id="audi2ques" class="details scroll"></div>
                    </div>
                    <div id="view-audi2" style="display:none;">
                        <div id="audi2views" class="details scroll"></div>
                    </div> -->

                </div>
            </div>
            <!-- <div class="col-12 col-md-4">
                <div id="audi03" class="audi">
                    <?php
                    $sess->__set('audi_id', $audi3_id);
                    $audiUrl3 = $sess->getCurrLiveSession();
                    $sess3Id = $audiUrl3[0]['session_id'];
                    $sess->__set('session_id', $sess3Id);
                    $sess3Url = $sess->getWebcastSessionURL();
                    if (!empty($sess3Url)) {
                        $sess3Url .= '?muted=1';
                    }
                    ?>
                    <div class="title">Auditorium 3</div>
                    <div class="video">
                        <div id="vid03" class="video-player">
                            <iframe src="<?= $sess3Url ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="width:100%;height:100%;"></iframe>
                        </div>

                    </div>
                    <div class="title">Viewers: <div id="audi3viewer" style="display: inline-block;">0</div>
                    </div>
                    <div class="tabs">
                        <a href="#" id="qa-audi3" onClick="showQA3()" class="active">Questions</a>
                        <a href="#" id="viewers-audi3" onClick="showViewers3()" class="">Viewers</a>
                    </div>
                    <div id="questions-audi3" style="display:block;">
                        <div id="audi3ques" class="details scroll"></div>
                    </div>
                    <div id="view-audi3" style="display:none;">
                        <div id="audi3views" class="details scroll"></div>
                    </div>

                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
require_once 'scripts.php';
?>
<script>
    function audiViews(sess, ele) {
        $.ajax({
            url: '../control/sess.php',
            data: {
                action: 'getLiveSessionViewerCount',
                sessId: sess
            },
            type: 'post',
            success: function(output) {
                $(ele).text(output);
            }
        });

    }

    function sessViewers(sess, ele) {
        $.ajax({
            url: '../control/sess.php',
            data: {
                action: 'getLiveSessionViewers',
                sessId: sess
            },
            type: 'post',
            success: function(output) {
                $(ele).html(output);

            }
        });

    }

    function audiQues(sess, ele) {
        $.ajax({
            url: '../control/sess.php',
            data: {
                action: 'getSessionQuestions',
                sessId: sess
            },
            type: 'post',
            success: function(output) {
                //console.log(output);
                $(ele).html(output);

            }
        });

    }

    function showQA1() {
        $('#audi01 .tabs a').removeClass('active');
        $('#qa-audi1').addClass('active');
        $('#questions-audi1').css('display', 'block');
        $('#view-audi1').css('display', 'none');
    }

    function showViewers1() {
        $('#audi01 .tabs a').removeClass('active');
        $('#viewers-audi1').addClass('active');
        $('#questions-audi1').css('display', 'none');
        $('#view-audi1').css('display', 'block');
    }

    function showQA2() {
        $('#audi02 .tabs a').removeClass('active');
        $('#qa-audi2').addClass('active');
        $('#questions-audi2').css('display', 'block');
        $('#view-audi2').css('display', 'none');
    }

    function showViewers2() {
        $('#audi02 .tabs a').removeClass('active');
        $('#viewers-audi2').addClass('active');
        $('#questions-audi2').css('display', 'none');
        $('#view-audi2').css('display', 'block');
    }

    function showQA3() {
        $('#audi03 .tabs a').removeClass('active');
        $('#qa-audi3').addClass('active');
        $('#questions-audi3').css('display', 'block');
        $('#view-audi3').css('display', 'none');
    }

    function showViewers3() {
        $('#audi03 .tabs a').removeClass('active');
        $('#viewers-audi3').addClass('active');
        $('#questions-audi3').css('display', 'none');
        $('#view-audi3').css('display', 'block');
    }
</script>
<?php
if (!empty($audiUrl1)) {
?>
    <script>
        audiViews('<?= $sess1Id; ?>', '#audi1viewer');
        audiQues('<?= $sess1Id; ?>', '#audi1ques');
        sessViewers('<?= $sess1Id; ?>', '#audi1views');

        setInterval(function() {
            audiViews('<?= $sess1Id; ?>', '#audi1viewer');
            audiQues('<?= $sess1Id; ?>', '#audi1ques');
            sessViewers('<?= $sess1Id; ?>', '#audi1views');
        }, 30000);
    </script>
<?php } ?>
<?php
if (!empty($audiUrl2)) {
?>
    <script>
        audiViews('<?= $sess2Id; ?>', '#audi2viewer');
        audiQues('<?= $sess2Id; ?>', '#audi2ques');
        sessViewers('<?= $sess2Id; ?>', '#audi2views');

        setInterval(function() {
            audiViews('<?= $sess2Id; ?>', '#audi2viewer');
            audiQues('<?= $sess2Id; ?>', '#audi2ques');
            sessViewers('<?= $sess2Id; ?>', '#audi2views');
        }, 30000);
    </script>
<?php } ?>
<?php
if (!empty($audiUrl3)) {
?>
    <script>
        audiViews('<?= $sess3Id; ?>', '#audi3viewer');
        audiQues('<?= $sess3Id; ?>', '#audi3ques');
        sessViewers('<?= $sess3Id; ?>', '#audi3views');

        setInterval(function() {
            audiViews('<?= $sess3Id; ?>', '#audi3viewer');
            audiQues('<?= $sess3Id; ?>', '#audi3ques');
            sessViewers('<?= $sess3Id; ?>', '#audi3views');
        }, 30000);
    </script>
<?php } ?>
<?php
require_once 'footer.php';
?>