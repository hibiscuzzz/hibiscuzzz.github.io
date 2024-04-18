<!DOCTYPE html>
<html>
<head>
    <title>Hello Kitty Cafe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header, footer {
            background-color: #FADADD;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        h1 {
            text-align: center;
        }
        .hours {
            text-align: right;
            margin-right: 20px; 
        }
        /* items styling */
        .menu-item {
            float: left;
            width: 33.33%; 
            box-sizing: border-box;
            padding: 15px; 
            text-align: center;
            position: relative;
            background-color: #FFB6C1; 
            border-radius: 15px; 
            margin: 10px;
        }
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        img {
            width: 100px; 
            height: auto;
            display: block;
            margin: 10px auto 0; 
        }
        form {
            display: block;
            clear: both;
            width: 100%;
        }
        /* for the order form */
        label, input, select, textarea {
            display: block;
            margin: 5px auto;
        }
        select{
            text-align-last: center;
            margin-bottom: 10px; 
        }
        input[type="text"], textarea {
            width: 300px; 
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #90EE90;
            border-radius: 5px;
            cursor: pointer;
        }
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
<!-- javascript for order validation -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var orderForm = document.getElementById('orderForm');
    if (orderForm) {
        orderForm.onsubmit = function(event) {
            event.preventDefault();             
            
            // calculate pickup time 20 minutes from now
            var now = new Date();
            var pickupTime = new Date(now.getTime() + 20 * 60000);
            var hours = pickupTime.getHours();
            var minutes = pickupTime.getMinutes();
            // time in 12-hr format instead of 24-hr
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; 

            minutes = minutes < 10 ? '0' + minutes : minutes; 
            var pickupTimeString = hours + ':' + minutes;
            document.getElementById('pickupTime').value = pickupTimeString;

            // JS validation for first+last name & quantity
            var itemOrdered = false;
            var quantities = document.querySelectorAll('select[name^="quantity_"]');
            for (var i = 0; i < quantities.length; i++) {
                if (parseInt(quantities[i].value) > 0) {
                    itemOrdered = true;
                    break;
                }
            }
            if (!itemOrdered) {
                alert('Please order at least one item.');
                return false;
            }
            var firstName = document.getElementById('firstName').value.trim();
            var lastName = document.getElementById('lastName').value.trim();
            if (!firstName || !lastName) {
                alert('Please enter your first and last name.');
                return false;
            }
            // if all validations pass, submit form
            orderForm.submit();
        };
    }});
    </script>
</head>
    <body>
        <header>
            <h1>Hello Kitty Cafe</h1>
            <?php
                // associative array w days = keys & hours = values
                $Hours = [
                    'Monday' => '9am - 5pm',
                    'Tuesday' => '9am - 5pm',
                    'Wednesday' => '9am - 5pm',
                    'Thursday' => '9am - 5pm',
                    'Friday' => '9am - 4pm',
                    'Saturday' => '10am - 8pm',
                    'Sunday' => '10am - 8pm'
                ];
                // loop through array and show each day w respective hours
                echo '<div class="hours">';
                foreach ($Hours as $day => $hours) {
                    echo '<div class="hours"><span class="day">' . $day . ':</span> ' . $hours . '</div>';
                }
                echo '</div>';
            ?>
        </header>
    </body>
</html>