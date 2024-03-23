<?php
// Check if 'n' is present in the query string
if (isset($_GET['n'])) {
    // Get the value of 'n' and ensure it's an integer
    $n = intval($_GET['n']);
    
    // Generate and print the times table for 'n' from 1 to 15
    for ($i = 1; $i <= 15; $i++) {
        $result = $i * $n;
        echo "{$i} x {$n} = {$result}<br>";
    }
} else {
    // 'n' is not set in the query string, prompt the user
    echo "Please provide a number in the query string. For example, ?n=3";
}
?>
