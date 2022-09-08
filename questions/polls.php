<?php
require_once '../functions.php';
if (!isset($_GET['sess'])) {
    header('location: ./');
}

$sess_id = $_GET['sess'];
$sess = new Session();
$sess->__set('session_id', $sess_id);
$a = $sess->getSession();
if (empty($a)) {
    header('location: ./');
}
?>
<?php
require_once 'header.php';
require_once 'nav.php';
?>
<div class="container-fluid">
    <div class="row p-2">
        <div class="col-12">
            <div id="message"></div>
            <div id="polls" class="mt-2"></div>
        </div>
    </div>

</div>
<?php
require_once 'scripts.php';
?>
<script>
    $(function() {
        getPollsList('1');
    });

    function gotoPage(pageNum) {
        getPollsList(pageNum);

        return false;
    }

    function getPollsList(pageNum) {

        $.ajax({
            url: '../control/poll.php',
            data: {
                action: 'getsesspolls',
                pagenum: pageNum,
                sessId: '<?= $sess_id ?>'
            },
            type: 'post',
            success: function(response) {
                $('#polls').html(response);
            }
        });
    }
</script>

<?php
require_once 'footer.php';
?>