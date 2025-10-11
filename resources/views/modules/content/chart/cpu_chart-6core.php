<?php
/*
          		// DB 연결
          $sql2 = "SELECT core_cpu, COUNT(id_cpu) FROM mcl GROUP BY core_cpu;";		// 일련번호 내림차순 전체 레코드 검색
          $result2 = mysqli_query($con, $sql1);			// SQL 명령 실행
         
          $row = mysqli_fetch_assoc($result2); // 하나의 레코드 가져오기

 
          mysqli_data_seek($result2, 1); 		// 가져올 레코드로 위치(포인터) 이동    
*/
?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php

$mdi06 = "SELECT core_cpu, COUNT(id_cpu) FROM mcl GROUP BY core_cpu HAVING core_cpu=6;";
$rs_mdi06 = mysqli_query($con, $mdi06);
$row = mysqli_fetch_assoc($rs_mdi06);
mysqli_data_seek($rs_mdi06, 0);
$cnt3        = $row["COUNT(id_cpu)"];	
?>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    var num03 = <?php echo $cnt3?>;



    function drawChart(){
      var data3 = google.visualization.arrayToDataTable([

        
        ['','모델 수', { role: 'style' }],
        ['1코어', num03, '#f80185']
    
    
      ]);




      var view2 = new google.visualization.DataView(data3);
            view2.setColumns([0, 1, 2,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
        

                }]);



      

      var options2 = {
        backgroundColor:'transparent',
        chartArea: {width: '80%', height: '30%'},
        legend: { position: "none" },
        bar: { groupWidth: '80%' },

        hAxis: {
          viewWindowMode: 'maximized',
          showLabel: false,
          minValue: 0,
          maxValue: 250,

          textPosition: 'none',
          gridlines: {
          color: 'none'
          },
     
        
        },

        vAxis: {
          viewWindowMode: 'maximized',
          showLabel: false,
          textStyle: {
            fontSize: 26,
            bold: true
          },
          textPosition: 'none',


        },


        annotations: {
                   textStyle: {
                     fontSize: 22,
                     bold: true,

                     color: 'white',

                     opacity: 1.8
                   }
              }

      };




      var chart2 = new google.visualization.BarChart(document.getElementById('cpu_chart_6_cores'));
      chart2.draw(view2, options2);
    }
  </script>