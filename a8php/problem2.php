<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Office Hours</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .office-hours {
        margin: 20px;
        padding: 20px;
        background-color: #f0f0f0;
        border-radius: 8px;
        width: 200px;
    }
    .day {
        font-weight: bold;
    }
    .hours {
        margin-bottom: 10px;
    }
</style>
</head>
<body>

<?php
// associative array w days = keys & office hours = values
$officeHours = [
    'Monday' => '9am - 5pm',
    'Tuesday' => '9am - 5pm',
    'Wednesday' => '9am - 5pm',
    'Thursday' => '9am - 5pm',
    'Friday' => '9am - 4pm',
    'Saturday' => 'Closed',
    'Sunday' => 'Closed'
];

// Loop through the array and show each day w respective hours
echo '<div class="office-hours">';
foreach ($officeHours as $day => $hours) {
    echo '<div class="hours"><span class="day">' . $day . ':</span> ' . $hours . '</div>';
}
echo '</div>';
?>

</body>
</html>
