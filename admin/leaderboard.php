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
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td scope="col"><a href="getlb.php">Download Leaderboard</a></td>

                    </tr>
            </table>
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
        getLeaderboard('1');
    });

    function getLeaderboard(pageNum) {

        $.ajax({
            url: '../control/lb.php',
            data: {
                action: 'getleaderboard',
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