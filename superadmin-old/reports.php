<?php
require_once '../functions.php';
require_once 'logincheck.php';
?>
<?php
require_once 'header.php';
require_once 'nav.php';
?>
<div class="container-fluid">
    <div id="superdashboard">
        <div class="row">
            <div class="col-12 col-md-4">
                <h6>Session Attendees</h6>
                <?php
                $sess = new Session();
                $attList = $sess->getSessionAttendees();
                //var_dump($attList);
                if (!empty($attList)) {
                ?>
                    <table class="table table-borderless table-striped">
                        <?php
                        foreach ($attList as $a) {
                        ?>
                            <tr>
                                <td><?= $a['session_title'] ?></td>
                                <td><?= $a['cnt']; ?></td>
                                <td width="50"><a href="sesatt.php?s=<?php echo $a['sessionid']; ?>"><i class="fas fa-download"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                <?php
                }
                ?>
                <h6>Exhibition Hall Visitors</h6>
                <?php
                $exhib = new Exhibitor();
                $attList = $exhib->getExhibitorVisitorCount();
                //var_dump($attList);

                if (!empty($attList)) {
                ?>
                    <table class="table table-borderless table-striped">
                        <?php
                        foreach ($attList as $a) {
                        ?>
                            <tr>
                                <td><?= $a['exhib_name'] ?></td>
                                <td><?= $a['cnt']; ?></td>
                                <td width="50"><a href="exbvis.php?e=<?php echo $a['exhib_id']; ?>"><i class="fas fa-download"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                <?php
                }
                ?>

                <h6>Exhibitor Requests</h6>
                <?php
                $exhib = new Exhibitor();
                $reqList = $exhib->getExhRequests();
                //var_dump($reqList);

                if (!empty($reqList)) {
                ?>
                    <table class="table table-table-borderless table-striped">
                        <?php
                        foreach ($reqList as $req) {
                            $exhib->__set('exhib_id', $req['exhib_id']);
                            $exh = $exhib->getExhibitor();
                        ?>
                            <tr>
                                <td><?= $exh[0]['exhib_name']  ?></td>
                                <td><?= $req['cnt']; ?></td>
                                <td width="50"><a href="exhreq.php?e=<?= $req['exhib_id']; ?>"><i class="fas fa-download"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                <?php
                }

                ?>
            </div>

            <div class="col-12 col-md-4">
                <h6>Resources</h6>
                <?php

                $exhib = new Exhibitor();
                $resList = $exhib->getResources();
                //var_dump($resList);

                if (!empty($resList)) {
                ?>
                    <table class="table table-borderless table-striped">
                        <?php
                        foreach ($resList as $res) {
                        ?>
                            <tr>
                                <td><?= '<b>' . $res['exhib_name'] . '</b> - ' . $res['resource_title']; ?></td>
                                <td><?= $res['download_count']; ?></td>
                                <td width="50"><a href="exhresdl.php?e=<?= $res['resource_id']; ?>"><i class="fas fa-download"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>

                <?php
                }

                ?>
            </div>
            <div class="col-12 col-md-4">
                <h6>Videos</h6>
                <?php
                $exhib = new Exhibitor();
                $vidList = $exhib->getVideos();
                //var_dump($vidList);
                if (!empty($vidList)) {
                ?>
                    <table class="table table-borderless table-striped">
                        <?php
                        foreach ($vidList as $vid) {
                        ?>
                            <tr>
                                <td><?= '<b>' . $vid['exhib_name'] . '</b> - ' . $vid['video_title']; ?></td>
                                <td><?= $vid['views']; ?></td>
                                <td width="50"><a href="exhvidview.php?e=<?php echo $vid['video_id']; ?>"><i class="fas fa-download"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
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
<?php
require_once 'footer.php';
?>