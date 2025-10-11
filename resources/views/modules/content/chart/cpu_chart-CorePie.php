<head>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() 
    {
        var data = google.visualization.arrayToDataTable(
            [
            ["코어 수", "빈도"],
            ["2 코어", <?=$cnt1?>],
            ["4 코어", <?=$cnt2?>],
            ["6 코어", <?=$cnt3?>],
            ["8 코어", <?=$cnt4?>]
          ]
        );

        
        var options = {
            chartArea: {width: '85%', height: '85%'},
            backgroundColor:'transparent',
            legend: { position: "none" },
            colors: ['#fdd7e9', '#fe9fd1', '#fe5cb2', '#bc0064']
    
          
        };
        var chart = new google.visualization.PieChart(document.getElementById("mdi_CorePie"));
        chart.draw(data, options);
    }
</script>
</head>