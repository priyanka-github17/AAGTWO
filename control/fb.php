<?php
require_once "../inc/config.php";
require_once "../functions.php";

if (isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];

    switch ($action) {
        case 'getallfeedbacks':
            $page_no = $_POST['pagenum'];
            $offset = ($page_no - 1) * $total_records_per_page;
            $previous_page = $page_no - 1;
            $next_page = $page_no + 1;

            $fb = new Feedback();
            $fb->__set('limit', $total_records_per_page);
            $total_records = $fb->getFbCount();

            $total_no_of_pages = ceil($total_records / $total_records_per_page);
            $second_last = $total_no_of_pages - 1; // total page minus 1
?>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td scope="col">Total Feedbacks: <div id="ques_count" style="display:inline-block;"><?php echo $total_records; ?></div>
                            </th>
                        <td scope="col"><a href="fb.php">Download Feedbacks</a></td>
                    </tr>
                </thead>
            </table>
            <?php
            $fbList = $fb->getAllFeedbacks($offset);
            //var_dump($fbList);

            if (!empty($fbList)) {
            ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" width="200">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Q 01</th>
                            <th scope="col">Q 02</th>
                            <th scope="col">Q 03</th>
                            <th scope="col">Q 04</th>
                            <th scope="col">Q 05</th>
                            <th scope="col">Q 06</th>
                            <th scope="col">Q 07</th>
                            <th scope="col">Q 08</th>
                            <th scope="col">Q 09</th>
                            <th scope="col">Q 10</th>
                            <th scope="col">Q 11</th>
                            <th scope="col">Q 12</th>
                            <th scope="col">Q 13</th>
                            <th scope="col">Q 14</th>
                            <th scope="col">Q 15</th>
                            <th scope="col">Q 16</th>
                            <th scope="col">Q 17</th>
                            <th scope="col">Q 18</th>
                            <th scope="col">Q 19</th>
                            <th scope="col">Q 20</th>
                            <th scope="col">Q 21</th>
                            <th scope="col">Q 22</th>
                            <th scope="col">Q 23</th>
                            <th scope="col">Q 24</th>
                            <th scope="col">Q 25</th>
                            <th scope="col">Q 26</th>
                            <th scope="col">Q 27</th>
                            <th scope="col">Q 28</th>
                            <th scope="col">Q 29</th>
                            <th scope="col">Feedback Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fbList as $a) { ?>
                            <tr>
                                <td><?= $a['title'] . '' . $a['first_name'] . ' ' . $a['last_name'] ?></td>
                                <td><?= $a['emailid'] ?></td>
                                <td><?= $a['q01'] ?></td>
                                <td><?= $a['q02'] ?></td>
                                <td><?= $a['q03'] ?></td>
                                <td><?= $a['q04'] ?></td>
                                <td><?= $a['q05'] ?></td>
                                <td><?= $a['q06'] ?></td>
                                <td><?= $a['q07'] ?></td>
                                <td><?= $a['q08'] ?></td>
                                <td><?= $a['q09'] ?></td>
                                <td><?= $a['q10'] ?></td>
                                <td><?= $a['q11'] ?></td>
                                <td><?= $a['q12'] ?></td>
                                <td><?= $a['q13'] ?></td>
                                <td><?= $a['q14'] ?></td>
                                <td><?= $a['q15'] ?></td>
                                <td><?= $a['q16'] ?></td>
                                <td><?= $a['q17'] ?></td>
                                <td><?= $a['q18'] ?></td>
                                <td><?= $a['q19'] ?></td>
                                <td><?= $a['q20'] ?></td>
                                <td><?= $a['q21'] ?></td>
                                <td><?= $a['q22'] ?></td>
                                <td><?= $a['q23'] ?></td>
                                <td><?= $a['q24'] ?></td>
                                <td><?= $a['q25'] ?></td>
                                <td><?= $a['q26'] ?></td>
                                <td><?= $a['q27'] ?></td>
                                <td><?= $a['q28'] ?></td>
                                <td><?= $a['q29'] ?></td>
                                <td><?php
                                    $date = date_create($a['feedback_time']);
                                    echo date_format($date, "M d, H:i a");
                                    ?>
                                </td>







                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
                <ul class="pagination">
                    <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } 
                    ?>

                    <li class='page-item <?php if ($page_no <= 1) {
                                                echo "disabled";
                                            } ?>'>
                        <a class='page-link' <?php if ($page_no > 1) {
                                                    echo "onClick='gotoPage($previous_page)' href='#'";
                                                } ?>>Previous</a>
                    </li>

                    <?php
                    if ($total_no_of_pages <= 10) {
                        for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
                            if ($counter == $page_no) {
                                echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                            } else {
                                echo "<li class='page-item'><a class='page-link' onClick='gotoPage($counter)' href='#'>$counter</a></li>";
                            }
                        }
                    } elseif ($total_no_of_pages > 10) {

                        if ($page_no <= 4) {
                            for ($counter = 1; $counter < 8; $counter++) {
                                if ($counter == $page_no) {
                                    echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                                } else {
                                    echo "<li class='page-item'><a class='page-link' onClick='gotoPage($counter)' href='#'>$counter</a></li>";
                                }
                            }
                            echo "<li class='page-item'><a>...</a></li>";
                            echo "<li class='page-item'><a class='page-link' onClick='gotoPage($second_last)' href='#'>$second_last</a></li>";
                            echo "<li class='page-item'><a class='page-link' onClick='gotoPage($total_no_of_pages)' href='#'>$total_no_of_pages</a></li>";
                        } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                            echo "<li class='page-item'><a class='page-link' onClick='gotoPage(1)' href='#'>1</a></li>";
                            echo "<li class='page-item'><a class='page-link' onClick='gotoPage(2)' href='#'>2</a></li>";
                            echo "<li class='page-item'><a>...</a></li>";
                            for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                                if ($counter == $page_no) {
                                    echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                                } else {
                                    echo "<li class='page-item'><a class='page-link' onClick='gotoPage($counter)' href='#'>$counter</a></li>";
                                }
                            }
                            echo "<li class='page-item'><a>...</a></li>";
                            echo "<li class='page-item'><a class='page-link' onClick='gotoPage($second_last)' href='#'>$second_last</a></li>";
                            echo "<li class='page-item'><a class='page-link' onClick='gotoPage($total_no_of_pages)' href='#'>$total_no_of_pages</a></li>";
                        } else {
                            echo "<li class='page-item'><a class='page-link' onClick='gotoPage(1)' href='#'>1</a></li>";
                            echo "<li class='page-item'><a class='page-link' onClick='gotoPage(2)' href='#'>2</a></li>";
                            echo "<li class='page-item'><a>...</a></li>";

                            for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                if ($counter == $page_no) {
                                    echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                                } else {
                                    echo "<li class='page-item'><a class='page-link' onClick='gotoPage($counter)' href='#'>$counter</a></li>";
                                }
                            }
                        }
                    }
                    ?>

                    <li class='page-item <?php if ($page_no >= $total_no_of_pages) {
                                                echo "disabled";
                                            } ?>'>
                        <a class='page-link' <?php if ($page_no < $total_no_of_pages) {
                                                    echo "onClick='gotoPage($next_page)' href='#'";
                                                } ?>>Next</a>
                    </li>
                    <?php if ($page_no < $total_no_of_pages) {
                        echo "<li class='page-item'><a class='page-link' onClick='gotoPage($total_no_of_pages)' href='#'>Last &rsaquo;&rsaquo;</a></li>";
                    } ?>
                </ul>
<?php
            } else {
                echo 'No feedbacks given yet.';
            }
            break;
    }
}
