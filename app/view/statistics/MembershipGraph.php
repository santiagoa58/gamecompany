<?php 
$page = 'statistics';
$subpage = 'graphs';
require_once APPROOT.'/view/inc/header.php';
?>
    <main>
        <!--dashboard-->
        <section class="dashboard">
            <div class="container">   

            <?php require_once APPROOT.'/view/inc/leftnav.php';?>

              <!-- dynamic display area -->
                <div class="display">
                    <div class="container-box">
                    <!---  <div class="row"> -->
						      	<div id="piechart"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                          <script type="text/javascript">
                          // Load google charts
                          google.charts.load('current', {'packages':['corechart']});
                          google.charts.setOnLoadCallback(drawChart);

                          // Draw the chart and set the chart values
                          function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Membership', 'Percentage'],
                            <?php
                                 $conn = new mysqli($servername, $server_username, $server_password, $dbName);
                                 $string;
                                 if(mysqli_connect_errno())
                                 {
                                      exit();
                                 }
                                 else{
                                    $query = "SELECT membership, count(*) as countmember FROM user GROUP BY membership;";
                                    $result = mysqli_query($conn,$query);
                                    $colno=0;
                                    $rowno=0;

                                    While ($row = mysqli_fetch_array($result)){
                                        echo "['".$row['membership']."',".$row['countmember']."],";

                                   }
                                   mysqli_close($conn);
                                 }  
                              ?>     
                           ]);

                            // Optional; add a title and set the width and height of the chart
                            var options = {'title':'Membership', 'width':550, 'height':400, is3D: true};

                            // Display the chart inside the <div> element with id="piechart"
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                          }
                          </script>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>
