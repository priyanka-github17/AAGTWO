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
            <a href="exhib.php?ac=add" class="btn btn-primary">Add Exhibitor</a> <a href="exhibvideo.php?ac=add" class="btn btn-primary">Add Exhibitor Video</a> <a href="exhibres.php?ac=add" class="btn btn-primary">Add Exhibitor Resource</a>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-12">
            <div id="exhibs">
                <?php
                $exhib = new Exhibitor();
                $exhibList = $exhib->getExhibitors();

                if (!empty($exhibList)) {
                ?>
                    <div id="message"></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Exhibitor</th>
                                <th scope="col">Exhibitor ID</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exhibList as $a) { ?>
                                <tr>
                                    <th><?= $a['exhib_name']; ?></th>
                                    <td><?= $a['exhib_id']; ?></td>
                                    <td><a href="exhib.php?ac=edit&id=<?= $a['exhib_id']; ?>" class="btn btn-warning">Edit</a> <a onclick="delexhib('<?= $a['exhib_id']; ?>')" class="btn btn-danger">Delete</a> <a onclick="updexhibentry('<?= $a['exhib_id']; ?>')" class="btn <?php if ($a['entry']) echo 'btn-danger';
                                                                                                                                                                                                                                                                                    else echo 'btn-success'; ?>"><?php if ($a['entry']) echo 'Close Entry';
                                                                                                                                                                                                                                                                                                                    else echo 'Allow Entry'; ?></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                <?php
                }
                ?>
            </div>
            <div id="videos">
                <?php
                $exhib = new Exhibitor();
                $videoList = $exhib->getVideos();

                if (!empty($videoList)) {
                ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" width="300">Exhibitor</th>
                                <th scope="col">Video Title</th>
                                <th scope="col" width="200">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($videoList as $a) { ?>
                                <tr>
                                    <th><?= $a['exhib_name']; ?></th>
                                    <td><?= $a['video_title']; ?></td>
                                    <td><a href="exhibvideo.php?ac=edit&id=<?= $a['video_id']; ?>" class="btn btn-warning">Edit</a> <a onclick="delvideo('<?= $a['video_id']; ?>')" class="btn btn-danger">Delete</a> </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                <?php
                }
                ?>
            </div>
            <div id="resources">
                <?php
                $exhib = new Exhibitor();
                $resList = $exhib->getResources();

                if (!empty($resList)) {
                ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" width="300">Exhibitor</th>
                                <th scope="col">Resource Title</th>
                                <th scope="col" width="200">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resList as $a) { ?>
                                <tr>
                                    <th><?= $a['exhib_name']; ?></th>
                                    <td><?= $a['resource_title']; ?></td>
                                    <td><a href="exhibres.php?ac=edit&id=<?= $a['resource_id']; ?>" class="btn btn-warning">Edit</a> <a onclick="delres('<?= $a['resource_id']; ?>')" class="btn btn-danger">Delete</a> </td>
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
    function delexhib(exhib_id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                url: '../controllers/exhib.php',
                data: {
                    action: 'delexhib',
                    exhib_id: exhib_id
                },
                type: 'post',
                success: function(message) {
                    var response = JSON.parse(message);
                    var status = response['status'];
                    var msg = response['message'];
                    if (status == 'success') {
                        location.href = 'exhibitors.php';
                    } else {
                        $('#message').html(msg).removeClass().addClass('alert alert-danger').fadeIn();
                    }
                }
            });
        }
    }

    function updexhibentry(exhib_id) {
        $.ajax({
            url: '../control/exhib.php',
            data: {
                action: 'exhibentry',
                exhib_id: exhib_id
            },
            type: 'post',
            success: function(message) {
                var response = JSON.parse(message);
                var status = response['status'];
                var msg = response['message'];
                if (status == 'success') {
                    location.href = 'exhibitors.php';
                } else {
                    $('#message').html(msg).removeClass().addClass('alert alert-danger').fadeIn();
                }
            }
        });
    }

    function delvideo(video_id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                url: '../control/exhib.php',
                data: {
                    action: 'delvideo',
                    video_id: video_id
                },
                type: 'post',
                success: function(message) {
                    var response = JSON.parse(message);
                    var status = response['status'];
                    var msg = response['message'];
                    if (status == 'success') {
                        location.href = 'exhibitors.php';
                    } else {
                        $('#message').html(msg).removeClass().addClass('alert alert-danger').fadeIn();
                    }
                }
            });
        }
    }

    function delres(res_id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                url: '../control/exhib.php',
                data: {
                    action: 'delres',
                    res_id: res_id
                },
                type: 'post',
                success: function(message) {
                    var response = JSON.parse(message);
                    var status = response['status'];
                    var msg = response['message'];
                    if (status == 'success') {
                        location.href = 'exhibitors.php';
                    } else {
                        $('#message').html(msg).removeClass().addClass('alert alert-danger').fadeIn();
                    }
                }
            });
        }
    }
</script>
<?php
require_once 'footer.php';
?>