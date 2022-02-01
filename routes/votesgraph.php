<?php
  $con = mysqli_connect("localhost","root","","ovs");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledashboard.css">
    <title>Online Voting System - Vote Count</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@600&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([['candidates', 'votes'],
        <?php
        $sql = "SELECT * FROM candidate";
        $fire = mysqli_query($con,$sql);
        while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['firstname']."',".$result['vote_count']."],";
        }

        ?>
        ]);

        var options = {
          title: 'Candidates and their votes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>
</head>
<body>
    <header>
        <nav>
            <img class="logo" src="logonew.png" alt="">
        </nav>
    </header>
    <div id="piechart" style="width: 900px; height: 500px; margin: 10vh auto"></div>
</body>
</html>