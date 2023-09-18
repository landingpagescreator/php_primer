<?php include 'header.php'  ?>
<!-- <?php require 'header.php'  ?>  -->
<!-- if the file doen t exist, the web page load normally, 3aks require li tkhalih ykrachi -->
<body>
    <div class="container">
    <h1>Hello world! This is PHP Primer</h1>

    <?php
    $name = 'assia';
    $fName = 'zeghmar';
    $wilaya = 'SETIF';
    echo "<h3> I am: ", $fName, " ",$name, "</h3>";
    // echo "<h3> I am: $name </h3>";
    // echo '<h3> I am: '.$name.' </h3>';
    echo "<b>first letter capitalized: </b>", ucfirst($name);
    echo "<br> <b>all capital: </b>", strtoupper($fName);
    echo "<br> <b>all lower: </b>", strtolower($wilaya);
    $phrase = "petal to the metal get it ruv up <br> you never we know and next up";
    echo "<br> <b>capitalize the first letter of each word: </b> <br>", ucwords($phrase);
    $nowDate = getdate();
    /* Return Value:	Returns an associative array with information related to the timestamp:
[seconds] - seconds
[minutes] - minutes
[hours] - hours
[mday] - day of the month
[wday] - day of the week (0=Sunday, 1=Monday,...)
[mon] - month
[year] - year
[yday] - day of the year
[weekday] - name of the weekday
[month] - name of the month
[0] - seconds since Unix Epoch */
    echo "<br> Today is: ", $nowDate['mday'], "-", $nowDate['mon'], "-", $nowDate['year'], "<br>";
    
    // function fixedTime() {
    //     $timeNow = time();
    //     // $seconds = ($timeNow / 1000);
    //     // $hours = ($timeNow / 3600000);
    //     $days =($timeNow / 3600000);
    //     // $month = ($days / 30);
    //     // $year = 1970 +($days / 365);

    //     // $hours = $timeNow / 3600;
    //     return floor($days);
    //     // return floor($days)."/".floor($month)."/".floor($year);
    // }
    // $nowTime = fixedTime();
    // echo "Time now is: " . $nowTime . " days";
    ?>
    <?php include 'footer.php' ?>
