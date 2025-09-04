# WEB-PHP
<?php 
    $a = array("Tokyo", "Mexico city", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"<?php $a = array("Tokyo", "Mexico city", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
    echo implode(", ", $a);
    sort($a);
    echo "<ul>";
    foreach ($a as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";
    $newCities = array("Los Angeles", "Calcutta", "Osaka", "Beijing");
    $a = array_merge($a, $newCities);
    sort($a);
    echo "<ul>";
    foreach ($a as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
