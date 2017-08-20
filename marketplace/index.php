<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php

$db = mysqli_connect('localhost','root','','BallStreet') or die('Error connecting to MySQL server.');

$lastTuesday = strtotime('last Tuesday');
$date = date("Y-m-d",$lastTuesday);

$query = "SELECT teams.Name, teams.NickName, dailyvalues.Value FROM teams
          JOIN dailyvalues ON teams.id = dailyvalues.TeamID WHERE dailyvalues.Date='$date'";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
    //echo $row['Name'] . ' ' . $row['NickName'] . ': ' . $row['PrimaryColor'] . ' ' . $row['SecondaryColor'] . $row['Value'] . '<br />';
}

?>