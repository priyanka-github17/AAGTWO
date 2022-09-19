<?php
require_once '../functions.php';
require_once 'logincheck.php';
?>
<?php

?>
<!-- <div class="container-fluid">
    <div class="row p-2">
        <div class="col-12">
            <div id="users">
            </div>
        </div>
    </div>

</div> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include 'sidenav.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
<?php

$servername = "localhost";
  
// Username
$username = "coacteh9_coact";
  
// Empty password
$password = "Coact@2020#";
  
// Database name
 $dbname = "aag";
   
// Create connection by passing these
// connection parameters
$conn = new mysqli($servername, 
    $username, $password, $dbname);
              $sql = "SELECT count(*) FROM tbl_users";
$result = $conn->query($sql);
  
// Display data on web page
while($row = mysqli_fetch_array($result)) {
    echo "<div class='count'>". $row['count(*)'];
    echo "</div>";
}
   
// Close the connection
$conn->close();

?>
              <!-- <div class="count">2500</div> -->
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Login Users </span>

     

              
<?php
               $conn = new mysqli($servername, 
               $username, $password, $dbname);
                        //  $sql = "SELECT count(*) FROM tbl_users where score ='500'";
                        //  $sql = "SELECT count(*) FROM tbl_users WHERE login_date = CURDATE()";
                        $sql='SELECT count(LOGIN_DATE) FROM tbl_users
WHERE login_date <= NOW()';
                        //  $sql ="SELECT DATE(login_date) AS date, COUNT(id)
                        //  FROM tbl_users
                        //  GROUP BY DATE(login_date)";
           $result = $conn->query($sql);
        
           while($row = mysqli_fetch_array($result)) {
               echo "<div style='color:#66abab;' class='count'>". $row['count(LOGIN_DATE)'];
               
               echo "</div>";
           }
              
           // Close the connection
          
                  ?>  
         
              <!-- <div class="count">123.50</div> -->
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>Total Pretestscore</span>
              <?php 
              $conn = new mysqli($servername, 
              $username, $password, $dbname);
                        $sql = "SELECT count(*) FROM tbl_users where pretestscore ='500'";
          $result = $conn->query($sql);
            
          // Display data on web page
          while($row = mysqli_fetch_array($result)) {
              echo "<div class='count'>". $row['count(*)'];
              echo "</div>";
          }
             
          // Close the connection
          $conn->close();
          
          ?>
              <!-- <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Module Completed</span>
              <!-- <div class="count">4,567</div> -->

              <?php 
              $conn = new mysqli($servername, 
              $username, $password, $dbname);
                        $sql = "SELECT count(*) FROM tbl_users where is_joy ='1'";
          $result = $conn->query($sql);
            
          // Display data on web page
          while($row = mysqli_fetch_array($result)) {
              echo "<div class='count'>". $row['count(*)'];
              echo "</div>";
          }
             
          // Close the connection
          $conn->close();
          
          ?>
              <!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total posttest</span>
              <!-- <div class="count">2,315</div> -->

              <?php 
              $conn = new mysqli($servername, 
              $username, $password, $dbname);
                        $sql = "SELECT count(*) FROM tbl_users where posttest BETWEEN 10000 AND 30000";
          $result = $conn->query($sql);
            
          // Display data on web page
          while($row = mysqli_fetch_array($result)) {
              echo "<div class='count'>". $row['count(*)'];
              echo "</div>";
          }
             
          // Close the connection
          $conn->close();
          
          ?>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Online Users</span>
              <!-- <div class="count">7,325</div> -->

              <?php 
              $conn = new mysqli($servername, 
              $username, $password, $dbname);
                        $sql = "SELECT count(*) FROM tbl_users where active =1";
          $result = $conn->query($sql);
            
          // Display data on web page
          while($row = mysqli_fetch_array($result)) {
              echo "<div style='color:red;' class='count'>". $row['count(*)'];
              echo "</div>";
          }
             
          // Close the connection
          $conn->close();
          
          ?>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 ">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3  bg-white">
                  <div class="x_title">
                    <h2>Total Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <!-- <p>Facebook Campaign</p> -->
                      <div class="">


                      <?php
                        $conn = new mysqli($servername, 
                        $username, $password, $dbname);
                            $qry="SELECT COUNT(*) FROM tbl_users;";
                                                  $result= mysqli_query($conn,$qry);
                                                    $rows= mysqli_fetch_array($result);
                                                    $total1=  $rows['COUNT(*)'] ;
                        $to= ($total1/1000)*100;
                      
                          ?>


                                  <p style="font-size: 1.1vw">Total Users:<?php echo $total1; ?></p>
                                  <div class="container1">
                                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-warning" style="width: <?php echo $to; ?>%"></div>
                          </div>
                          </div>
                        <!-- <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div> -->
                      </div>
                    </div>
                    <div>
                   
                      <div class="">

                      <?php
                        $conn = new mysqli($servername, 
                        $username, $password, $dbname);
               $qry="SELECT count(LOGIN_DATE) FROM tbl_users
               WHERE login_date <= NOW()";
                                     $results= mysqli_query($conn,$qry);
                                      $rows= mysqli_fetch_array($results);
                                      $total1= $rows['count(LOGIN_DATE)'] ;
				   $to= ($total1/1000)*100;
        
            ?>


                    <p style="font-size: 1.1vw">Login Users:<?php echo $total1; ?></p>
                    <div class="container1">
                           <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-primary" style="width: <?php echo $to; ?>%"></div>
            </div>
                          </div>
                        <!-- <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <!-- <p>Conventional Media</p> -->
                      <div class="">

                      <?php
                        $conn = new mysqli($servername, 
                        $username, $password, $dbname);
               $qry="SELECT count(*) FROM tbl_users where is_joy ='1'";
                                     $results= mysqli_query($conn,$qry);
                                      $rows= mysqli_fetch_array($results);
                                      $total1= $rows['count(*)'] ;
				   $to= ($total1/1000)*100;
        
            ?>


                    <p style="font-size: 1.1vw">Total Module Completed :<?php echo $total1; ?></p>
                    <div class="container1">
                           <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-warning" style="width: <?php echo $to; ?>%"></div>
            </div>
                          </div>
                        <!-- <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div> -->
                      </div>
                    </div>
                    <div>
                      <!-- <p>Bill boards</p> -->
                      <div class="">

                      <?php
                        $conn = new mysqli($servername, 
                        $username, $password, $dbname);
               $qry="SELECT count(*) FROM tbl_users where pretestscore ='500'";
                                     $results= mysqli_query($conn,$qry);
                                      $rows= mysqli_fetch_array($results);
                                      $total1= $rows['count(*)'] ;
				   $to= ($total1/1000)*100;
        
            ?>


                    <p style="font-size: 1.1vw">Total Pretest Completed:<?php echo $total1; ?></p>
                    <div class="container1">
                           <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-primary" style="width: <?php echo $to; ?>%"></div>
            </div>
                          </div>
                        <!-- <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div> -->
                      </div>
                    </div>

                    <div>
                      <!-- <p>Bill boards</p> -->
                      <div class="">

                      <?php
                        $conn = new mysqli($servername, 
                        $username, $password, $dbname);
               $qry="SELECT count(*) FROM tbl_users where posttest BETWEEN 10000 AND 30000";
                                     $results= mysqli_query($conn,$qry);
                                      $rows= mysqli_fetch_array($results);
                                      $total1= $rows['count(*)'] ;
				   $to= ($total1/1000)*100;
        
            ?>


                    <p style="font-size: 1.1vw">Total Posttest Completed:<?php echo $total1; ?></p>
                    <div class="container1">
                           <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-warning" style="width: <?php echo $to; ?>%"></div>
            </div>
                          </div>
                        <!-- <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div> -->
                      </div>
                    </div>

                    <div>
                      <!-- <p>Bill boards</p> -->
                      <div class="">
                      <?php
                        $conn = new mysqli($servername, 
                        $username, $password, $dbname);
               $qry="SELECT count(*) FROM tbl_users where active =1";
                                     $results= mysqli_query($conn,$qry);
                                      $rows= mysqli_fetch_array($results);
                                      $total1= $rows['count(*)'] ;
				   $to= ($total1/1000)*100;
        
            ?>


                    <p style="font-size: 1.1vw">Online Users:<?php echo $total1; ?></p>
                    <div class="container1">
                           <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-primary" style="width: <?php echo $to; ?>%"></div>
            </div>
                          </div>
                        <!-- <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div> -->
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">


            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>App Versions</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>App Usage across versions</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.2</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>123k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.3</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.4</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.5</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>3k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.6</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>1k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Device Usage</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 ">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 ">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Quick Settings</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                      </li>
                    </ul>

                    <div class="sidebar-widget">
                        <h4>Profile Completion</h4>
                        <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text" class="gauge-value pull-left">0</span>
                          <span class="gauge-value pull-left">%</span>
                          <span id="goal-text" class="goal-value pull-right">100%</span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
