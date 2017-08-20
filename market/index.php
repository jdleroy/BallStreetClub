<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Index Stylesheet -->
    <link rel="stylesheet" href="index.css">

    <!-- Index JavaScript -->
    <script src="index.js"></script>

    <!-- Roboto Font -->
    <style>@import url('https://fonts.googleapis.com/css?family=Roboto');</style>

    <!-- Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
                ['Week', 'Value'],
                ['0', 3.21],
                ['1', 7.89],
                ['2', 7.92],
                ['3', 7.24],
                ['4', 8.91],
                ['5', 3.21],
                ['6', 7.89],
                ['7', 7.92],
                ['8', 7.24],
                ['9', 8.91],
                ['10', 7.92],
                ['11', 7.24],
                ['12', 8.91]
            ]);

            var options = {
                backgroundColor: '#FFFFFF',
                colors:['#333333'],
                curveType: 'none',
                legend: {position: 'none'}
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</head>

<?php

$db = mysqli_connect('localhost','root','','BallStreet') or die('Error connecting to MySQL server.');

$query = "SELECT * FROM teams WHERE Name='Wisconsin'";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
    echo $row['Name'] . ' ' . $row['NickName'] . ': ' . $row['PrimaryColor'] . ' ' . $row['SecondaryColor'] .'<br />';
}

$team = "<div class='team'>
                    <div class='team-list-logo-padding'>
                        <div class='team-list-logo'>

                        </div>
                    </div>
                    <div class='team-list-info'>
                        <div class='team-list-info-left'>
                            <div class='team-list-name'>
                                Alabama
                            </div>
                            <div class='team-list-stockname'>
                                (ALA)
                            </div>
                        </div>
                        <div class='team-list-info-right'>
                            <div class='team-list-price'>
                                12.51 <span class='glyphicon glyphicon-triangle-top'></span>
                            </div>
                            <div class='team-list-trending'>
                            
                            </div>
                        </div>
                    </div>
                </div>";
?>

<body>
<div class="container-fluid page-fluid">
    <div class="container page">
        <div class="col-sm-8">
            <div class="team-stock">
                <div class="team-stock-graph-frame">
                    <!-- Google Charts -->
                    <div id="curve_chart" style="width: 799px; height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-sort">
                Sort
            </div>
            <div class="team-list">
                <?php
                for ($i = 0; $i < 20; $i++) {
                    echo $team;
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>