<?php   
require("./dbconnect.php");
require("./graph.php");

$sum2 = $db->prepare("SELECT sum(study_hour) FROM study_data WHERE DATE_FORMAT(study_date, '%Y%m%D')=DATE_FORMAT(NOW(), '%Y%m%D')");
$sum2->execute();
$sum_day_sum = $sum2->fetch();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>