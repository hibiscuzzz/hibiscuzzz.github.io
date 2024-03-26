<?php
// Check if the 'number' GET parameter is set
if (isset($_GET['number'])) {
    $number = intval($_GET['number']); // Convert the GET parameter to an integer

    // Initialize the Fibonacci sequence with the first two numbers
    $fib = [0, 1];

    // Generate the Fibonacci sequence of length $number
    for ($i = 2; $i < $number; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }

    // Prepare the response array with the "data" key
    $response = [
        "data" => $fib
    ];

    // Set the header to indicate the response is in JSON format
    header('Content-Type: application/json');

    // Echo the JSON-encoded response
    echo json_encode($response);
} else {
    // If the 'number' GET parameter is not set, respond with an error message
    echo json_encode(["error" => "No number provided"]);
}
?>
