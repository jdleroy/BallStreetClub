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
</head>

<body>

<!-- Top Navigation Bar -->
<div class="container-fluid nav-bar">

</div>

<!-- Page -->
<div class="container-fluid page-fluid">
    <div class="container page">

        <!-- Toolbar -->
        <div class="toolbar">
            <div class="toolbar-list">
                <span class="glyphicon glyphicon-th-list"></span>
            </div>
            <div class="toolbar-grid">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>

        <!-- Market Grid -->
        <div class="grid">
            <?php

            $teamCard = "<div class='col-lg-2 col-md-2 col-sm-3 col-xs-4'>
                            <div class='grid-card'>
                                <div class='grid-card-color'>
                                    <div class='grid-card-content'>
                                        <div class='grid-card-content-logo'>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";

            $numTeams = 128;
            for ($i = 0; $i < $numTeams; $i++) {
                if (($i % 10) == 0) {
                    echo "<div class='grid-break'></div>";
                }
                echo $teamCard;
            }

            ?>
        </div>

        <!-- Market List -->
        <div class="list">
            <?php

            $teamList = "<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>
                            <div class='list-card'>
                                <div class='list-card-content'>
                            
                                </div>
                            </div>
                        </div>";

            $numTeams = 128;
            for ($i = 0; $i < $numTeams; $i++) {
                echo $teamList;
            }

            ?>
        </div>

    </div>
</div>

</body>