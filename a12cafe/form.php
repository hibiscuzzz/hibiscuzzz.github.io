<?php
    include 'header.php';

    // database connection
    $host = 'localhost';
    $username = 'uwve1zrcutu5q';
    $password = 'Roselle901!';
    $database = 'db7viqbrshfvw4';
    $cn = new mysqli($host, $username, $password, $database);

    if ($cn->connect_error) {
        die("Connection failed: " . $cn->connect_error);
    }
    
    $result = $cn->query("SELECT * FROM menu");
    if ($result) {
        echo "";
    } else {
        echo "Error: " . $cn->error;
    }

    echo '<form method="get" action="process_order.php" id="orderForm">';

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="menu-item">';
            // name desc price img
            echo '<h3>' . htmlspecialchars($row["name"]) . '</h3>';
            echo '<p>' . htmlspecialchars($row["description"]) . '</p>';
            echo '<p>Price: $' . htmlspecialchars($row["price"]) . '</p>';
            echo '<img src="image/' . htmlspecialchars($row["image"]) . '">';
            
            // quantity select dropdown from 0 to 10
            echo '<select name="quantity_' . $row["id"] . '">';
            for ($i = 0; $i <= 10; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
            echo '</select>';

            // end of the item block
            echo '</div>';
        }
    } else {
        echo "No menu items found.";
    }

    // the four fields
    // first name
    echo '<p><label for="firstName">First Name: </label>';
    echo '<input type="text" id="firstName" name="firstName"></p>';
    // last name
    echo '<p><label for="lastName">Last Name: </label>';
    echo '<input type="text" id="lastName" name="lastName"></p>';
    // special instructions in <textarea> element
    echo '<p><label for="specialInstructions">Special Instructions: </label>';
    echo '<textarea id="specialInstructions" name="specialInstructions"></textarea></p>';
    // pickup time (hidden txt box)
    echo '<input type="hidden" id="pickupTime" name="pickupTime">';

    // submit button for the form to end
    echo '<input type="submit" value="Submit Order">';
    echo '</form>';

?>