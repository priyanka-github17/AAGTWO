<?php

require_once '../functions.php';
require_once 'logincheck.php';
require_once __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'ap2',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    '04931eab1b71cbeed8e8',
    '4f8aaf8da4a2c760a99c',
    '1102032',
    $options
);



?>
<?php
require_once 'header.php';
require_once 'nav.php';
?>
<div class="container-fluid">
    <div class="row p-2">
        <div class="col-12">
            <a href="ann.php?ac=add" class="btn btn-primary">Add Announcement</a>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-12">
            <div id="exhibs">
                <?php
                $ann = new Announcement();
                $annList = $ann->getAnnouncements();

                if (!empty($annList)) {
                ?>
                    <div id="message"></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Announcement</th>
                                <th scope="col" width="300">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($annList as $a) { ?>
                                <tr>
                                    <td><b><?= $a['title']; ?></b><br><?= $a['content']; ?></td>
                                    <td><a href="ann.php?ac=edit&id=<?= $a['ann_id']; ?>" class="btn btn-warning">Edit</a> <a onclick="delann('<?= $a['ann_id']; ?>')" class="btn btn-danger">Delete</a> <a onclick="updAnn('<?= $a['ann_id']; ?>','<?= $a['active'] ?>')" class="btn <?= ($a['active']) ? 'btn-danger' : 'btn-success' ?>"><?= ($a['active']) ? 'Hide' : 'Show' ?></a></td>

                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</div>
<?php
require_once 'scripts.php';
?>
<script>
    function delann(ann_id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                url: '../controllers/ann.php',
                data: {
                    action: 'delann',
                    ann_id: ann_id
                },
                type: 'post',
                success: function(message) {
                    var response = JSON.parse(message);
                    var status = response['status'];
                    var msg = response['message'];
                    if (status == 'success') {
                        location.href = 'announcements.php';
                    } else {
                        $('#message').html(msg).removeClass().addClass('alert alert-danger').fadeIn();
                    }
                }
            });
        }
    }

    function updAnn(ann_id, value) {
        $.ajax({
            url: '../controllers/ann.php',
            data: {
                action: 'updann',
                ann_id: ann_id,
                value: value
            },
            type: 'post',
            success: function(message) {
                var response = JSON.parse(message);
                var status = response['status'];
                var msg = response['message'];
                if (status == 'success') {
                    <?php
                    //$data['message'] = 'hello world';
                    //$pusher->trigger('event-announcement', 'updateann', $data);
                    ?>
                    location.href = 'announcements.php';
                } else {
                    $('#message').html(msg).removeClass().addClass('alert alert-danger').fadeIn();
                }
            }
        });
    }
</script>
<?php
require_once 'footer.php';
?>