<?php
/*
          		// DB 연결
          $sql1 = "SELECT core_cpu, COUNT(id_cpu) FROM mcl GROUP BY core_cpu;";		// 일련번호 내림차순 전체 레코드 검색
          $result1 = mysqli_query($con, $sql1);			// SQL 명령 실행
         
          $row = mysqli_fetch_assoc($result1); // 하나의 레코드 가져오기

 
          mysqli_data_seek($result1, 0); 		// 가져올 레코드로 위치(포인터) 이동    
*/
?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php

$mdi02 = "SELECT core_cpu, COUNT(id_cpu) FROM mcl GROUP BY core_cpu HAVING core_cpu=2;";
$rs_mdi02 = mysqli_query($con, $mdi02);
$row = mysqli_fetch_assoc($rs_mdi02);
mysqli_data_seek($rs_mdi02, 0);
$cnt1        = $row["COUNT(id_cpu)"];	
 
?>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    var num01 = <?php echo $cnt1?>;



    function drawChart(){
      var data1 = google.visualization.arrayToDataTable([

        
        ['','모델 수', { role: 'style' }],
        ['2코어', num01, '#f80185']
    
    
      ]);




      var view1 = new google.visualization.DataView(data1);
            view1.setColumns([0, 1, 2,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
        

                }]);



      

      var options1 = {
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




      var chart1 = new google.visualization.BarChart(document.getElementById('cpu_chart_2_cores'));
      chart1.draw(view1, options1);
    }
  </script>