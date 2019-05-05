<!DOCTYPE html>
<!-- Author: Jonathan Arca
    This page is the contact us page. It contains a form users can fill out and submit (currently only shows user what they submitted ie data isn't sent to anyone). It also has an interactive bing map that that centers
around the agency location the user clicks on. -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <style>
    
        #myMap {
            position:relative;
            height: 300px;
        }

        .addressbox {
            background-color: #e3f2fd;
        }

        .addressbox:hover {
            background-color: #FFC;
        }

        .addressbox {
            margin-left: 10px;
            margin-right: 10px;
        }

        .active {
            border: 1px solid black;
        }

    </style>

    <!-- Reference to the Bing Maps SDK -->
    <script type='text/javascript'
        src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AgvI6DGx14R5lq98N5XzyPj6hzJN9OlZn54jQQJa8C4GcW2UYLuTEaQ4K-Q0LcTu' 
            async defer></script>

    <script type='text/javascript'>
        let map;
        function GetMap()
        {
            //map options
            var mapOptions = {mapTypeId: Microsoft.Maps.MapTypeId.canvasLight,
                center: new Microsoft.Maps.Location(51.0486, -114.0708),
                zoom: 15,
                showScalebar: false,
                showMapTypeSelector: false};
            map = new Microsoft.Maps.Map('#myMap', mapOptions);

            //This creates pushpins for each agency location
            var calgaryPin = new Microsoft.Maps.Pushpin(map.getCenter(), { icon: 'map_marker.png',
                anchor: new Microsoft.Maps.Point(20, 50) });
            var okotoksPin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(50.7255, -113.9749), { icon: 'map_marker.png',
                anchor: new Microsoft.Maps.Point(20, 50) });

            //Places the pushpins on the map
            map.entities.push(calgaryPin);
            map.entities.push(okotoksPin);
            map.showDashboard = false;
        }

        // Centers the map around lat and long coordinates

        function viewOkotoks(){
            map.setView({
                center: new Microsoft.Maps.Location(50.7255, -113.9749)
            });
        }

        function viewCalgary(){
            map.setView({
                center: new Microsoft.Maps.Location(51.0486, -114.0708)
            });
        }
    </script>
</head>
<body>
<?php
    include('header.php');

?>
<div class="container">
<br>

<!-- Form using Bootstrap styling
(formprocessor.php only returns what user submitted) -->
<h2>Contact Us</h2>
<form method="post" action="formprocessor.php">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">First name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="first_name" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="last_name" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8 mb-3">
            <label for="validationDefaultEmail">Email</label>
            <div class="input-group">
            <input type="text" class="form-control" id="validationDefaultEmail" placeholder="Email" name="email" required>
            </div>
        </div>
    </div>
    <div class="form-row">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message here" name="message" required></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
<!-- Displays clickable locations that will dynamically change the Bing Map when clicked. -->
<h2>Our Locations</h2>
    <div class="row" role="tablist">

    <?php
    //  Connect to the travelexperts database, then retrieve agencies data and display everything.
    $dbh = mysqli_connect("remotemysql.com:3306","zo6pxhXKOe","ONL4QhPYCa") or die("cannot connect");
    mysqli_select_db($dbh, "zo6pxhXKOe");

    $sql = 'select * from agencies';
    $result = mysqli_query($dbh, $sql);

    while ($row = mysqli_fetch_row($result))
    {
        echo '<div role="tab" class="addressbox col-sm';
        if ($row[2] == 'Calgary'){
            echo ' active" ';
        }
        else {
            echo '" ';
        }
        echo <<< locationbox
onclick="view$row[2]()">
            $row[1]<br>
            $row[2], $row[3]<br>
            $row[4], $row[5]<br>
            Phone: $row[6]<br>
            Fax: $row[7]

        </div>


locationbox;
    }

    ?>
    <div class="col-sm"></div>
    </div>
    </div>
    <br>
    <div id="myMap" class="containter-fluid"></div>
</body>
</html>
