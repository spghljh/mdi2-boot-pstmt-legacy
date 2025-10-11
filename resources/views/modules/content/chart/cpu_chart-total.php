
<link rel="stylesheet" href="/default_css/cpu_chart.css">

<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/chart/cpu_chart-2core.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/chart/cpu_chart-4core.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/chart/cpu_chart-6core.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/chart/cpu_chart-8core.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/chart/cpu_chart-CorePie.php';?>

<div class="cpu_chart-total">  


            <div class="cpu_chart_pie">   
              <div class="mdi_core_pie">   
                      <div id="mdi_CorePie" style="width: 400px; height: 400px;"></div>
              </div><!--mdi_core_pie-->
            </div><!--cpu_chart_pie-->


            <div class="cpu_chart_title">   

                  <div class="cpu_chart_title_each">
                    <div>2</div><div style="font-size : 24px; margin-left: 10px; color:black;">Core</div>
                    <div class="mdi_core_center_graph_div">
                      <div id="cpu_chart_2_cores"></div>
                    </div>
                  </div>
                  <div class="cpu_chart_title_each">
                    <div>4</div><div style="font-size : 24px; margin-left: 10px; color:black;">Core</div>
                    <div class="mdi_core_center_graph_div">
                      <div id="cpu_chart_4_cores"></div>
                    </div>
                  </div>
                  <div class="cpu_chart_title_each">
                    <div>6</div><div style="font-size : 24px; margin-left: 10px; color:black;">Core</div>
                    <div class="mdi_core_center_graph_div">
                      <div id="cpu_chart_6_cores"></div>
                    </div>
                  </div>
                  <div class="cpu_chart_title_each">
                    <div>8</div><div style="font-size : 24px; margin-left: 10px; color:black;">Core</div>
                    <div class="mdi_core_center_graph_div">
                      <div id="cpu_chart_8_cores"></div>
                    </div>
                  </div>

            </div><!--cpu_chart_title-->


           



</div><!--cpu_chart-total-->




