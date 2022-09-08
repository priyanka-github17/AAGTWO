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
            <div id="users">
            </div>
        </div>
    </div>

</div>




<?php
require_once 'scripts.php';
?>

<script>
    $(function() {
        getFeedbacks('1');
    });

    function gotoPage(pageNum) {
        getFeedbacks(pageNum);

        return false;
    }

    function getFeedbacks(pageNum) {

        $.ajax({
            url: '../control/fb.php',
            data: {
                action: 'getallfeedbacks',
                pagenum: pageNum
            },
            type: 'post',
            success: function(response) {
                $('#users').html(response);
            }
        });
    }
</script>
<?php
require_once 'footer.php';
?>