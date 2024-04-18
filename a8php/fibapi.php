<?php
// Check if the number GET parameter is set and is a positive integer
if (isset($_GET['number']) && filter_var($_GET['number'], FILTER_VALIDATE_INT) && $_GET['number'] > 0) {
    $number = intval($_GET['number']);
    // making sure the array starts with 0 if $number is at least 1
    $fib = $number >= 1 ? [0] : []; 
    if ($number >= 2) {
        $fib[] = 1; 
    }

    for ($i = 2; $i < $number; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }

    // Data key
    $response = [
        "data" => $fib
    ];

    // indicate the response is in JSON format
    header('Content-Type: application/json');

    echo json_encode($response);
} else {
    // If number GET parameter is not set or invalid, respond with an error message
    header('Content-Type: application/json');
    echo json_encode(["error" => "Invalid or no number provided"]);
}
?>
