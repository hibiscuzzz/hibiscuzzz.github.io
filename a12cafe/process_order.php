<?php
    include 'header.php';

    // database connection
    $host = 'localhost';
    $username = 'uwve1zrcutu5q';
    $password = 'Roselle901!';
    $database = 'db7viqbrshfvw4';
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // order summary set up
    echo "<h1>Your Receipt</h1>";
    $totalOrderCost = 0;

    // process each item that might be in the $_GET superglobal
    foreach ($_GET as $key => $value) {
        // check if the key begins with quantity_ and has a positive value
        if (strpos($key, 'quantity_') === 0 && $value > 0) {
            // extract item ID from the name of the input field
            $itemId = substr($key, 9); 
            // convert quantity to int
            $quantity = intval($value);
        
            // fetch the item details from DB
            $sql = "SELECT name, price FROM menu WHERE id = ?";
            $stmt = $conn->prepare($sql);
            // bind int ID to previous SQL statement
            $stmt->bind_param("i", $itemId);
            // execute n result
            $stmt->execute();
            $result = $stmt->get_result();

            // check if items exists in DB already
            if ($item = $result->fetch_assoc()) {
                $itemName = $item['name'];
                $itemPrice = $item['price'];
                $itemTotal = $quantity * $itemPrice;
                
                // order summary display
                echo "<p>$itemName<br>";
                echo "quantity: $quantity<br>";
                echo "price: $" . number_format($itemPrice, 2) . "<br>";
                echo "total for item: $" . number_format($itemTotal, 2) . "</p>";

                $totalOrderCost += $itemTotal;
            }
        }
    }

    // tax and final total
    $taxRate = 0.0625;
    $taxAmount = $totalOrderCost * $taxRate;
    $finalTotal = $totalOrderCost + $taxAmount;

    echo "<p>Subtotal: $" . number_format($totalOrderCost, 2) . "</p>";
    echo "<p>Tax (6.25%): $" . number_format($taxAmount, 2) . "</p>";
    echo "<p>Total: $" . number_format($finalTotal, 2) . "</p>";

    // show pickup time, user's name, and special instructions
    $pickupTime = htmlspecialchars($_GET['pickupTime']);
    $firstName = htmlspecialchars($_GET['firstName']);
    $lastName = htmlspecialchars($_GET['lastName']);
    $specialInstructions = htmlspecialchars($_GET['specialInstructions']);

    echo "<p>Pickup Time: $pickupTime</p>";
    echo "<p>Customer Name: $firstName $lastName</p>";
    echo "<p>Special Instructions: $specialInstructions</p>";

    $conn->close();
?>