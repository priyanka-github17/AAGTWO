<?php
require_once '../functions.php';
require_once 'logincheck.php';
?>
<?php
require_once 'header.php';
require_once 'nav.php';
?>
<div class="container-fluid">
    <div class="row p-2">
        <div class="col-12">
            <a href="iqques.php?ac=add" class="btn btn-primary">Add Question</a>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-12">
            <div id="message"></div>
            <div id="iq" class="mt-2"></div>
        </div>
    </div>

</div>
<?php
require_once 'scripts.php';
?>
<script>
    $(function() {
        getQuesList('1');
    });

    function gotoPage(pageNum) {
        getQuesList(pageNum);

        return false;
    }

    function getQuesList(pageNum) {

        $.ajax({
            url: '../control/iq.php',
            data: {
                action: 'getallques',
                pagenum: pageNum
            },
            type: 'post',
            success: function(response) {
                $('#iq').html(response);
            }
        });
    }

    function updatePoll(pollid, sessid, value) {
        $.ajax({
            url: '../control/iq.php',
            data: {
                action: 'updatepoll',
                pollId: pollid,
                sessId: sessid,
                value: value
            },
            type: 'post',
            success: function(output) {
                var response = JSON.parse(output);
                var status = response['status'];
                var msg = response['message'];
                if (status == 'success') {
                    Swal.fire({
                        position: 'top',
                        icon: 'success',
                        text: 'Poll status has been updated!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    getQuesList('1');
                } else {
                    Swal.fire({
                        position: 'top',
                        icon: 'error',
                        text: 'Poll status could not be updated!',
                        showConfirmButton: false,
                        timer: 2000
                    })

                }

            }
        });
    }

    function delQues(ques_id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                type: 'POST',
                url: '../control/iq.php',
                data: {
                    action: 'delques',
                    quesId: ques_id
                },
                success: function(output) {

                    var response = JSON.parse(output);
                    var status = response['status'];
                    var msg = response['message'];
                    if (status == 'success') {
                        Swal.fire({
                            position: 'top',
                            icon: 'success',
                            text: 'Question has been deleted!',
                            showConfirmButton: false,
                            timer: 2000
                        });
                        getQuesList('1');
                    } else {
                        Swal.fire({
                            position: 'top',
                            icon: 'error',
                            text: 'Question could not be deleted!',
                            showConfirmButton: false,
                            timer: 2000
                        })

                    }



                }
            });
        }

    }
</script>

<?php
require_once 'footer.php';
?>