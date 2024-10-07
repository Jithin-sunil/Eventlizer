<?php
include("../Assets/Connection/connection.php");
include('head.php');
?>
                  <!-- Content Start -->
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <h2>Dashboard</h2>
                        </div>
                     </div>
                  </div>
                  <div class="row column1">
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-music yellow_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php
                                 $selQ="select count(*) as count from tbl_musicband where musicband_vstatus=1";
                                $data=$con->query($selQ);
                                $row=$data->fetch_assoc();
                                ?>
                                 <p class="total_no"><?php  echo $row['count'] ?></p>
                                 <p class="head_couter">Musicband</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                             <div>
                                 <i class="fa fa-magic blue1_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                              <?php
                                 $selQ1="select COUNT(*) as num FROM tbl_eventorganiser where organiser_vstatus=1";
                                $data1=$con->query($selQ1);
                                $row1=$data1->fetch_assoc();
                                ?>
                                 <p class="total_no"><?php  echo $row1['num'] ?></p>
                                 <p class="head_couter">EventOrganisers</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-user green_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                   <?php
                                 $selQ2="select count(*) as ucount from tbl_user";
                                $data2=$con->query($selQ2);
                                $row2=$data2->fetch_assoc();
                                ?>
                                 <p class="total_no"><?php  echo $row2['ucount'] ?></p>
                                 <p class="head_couter">User</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-line-chart red_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php
                                 $selQ3="select COUNT(*) as book FROM tbl_booking where booking_status=1";
                                $data3=$con->query($selQ3);
                                $row3=$data3->fetch_assoc();

                                
                                ?>
                                 <p class="total_no"><?php  echo $row3['book'] ?></p>
                                 <p class="head_couter">Booking</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- -->


                     
                  <?php
                  include('foot.php');
                  ?>