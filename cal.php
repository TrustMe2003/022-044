<!-- filepath: /C:/Users/User/Desktop/022-044/cal.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .calculator {
            border-radius: 5px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
            padding: 20px;
            background-color: white;
        }
        .calculator input[type="text"] {
            width: 100%;
            height: 50px;
            text-align: right;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }
        .calculator input[type="submit"] {
            width: 100%;
            height: 50px;
            font-size: 1.5rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .calculator input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form method="post">
            <input type="text" name="num1" placeholder="Enter first number" required>
            <input type="text" name="num2" placeholder="Enter second number" required>
            <select name="operation">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <input type="submit" name="submit" value="Calculate">
        </form>
        <div>
            <?php
            if (isset($_POST['submit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
                $result = '';

                if (is_numeric($num1) && is_numeric($num2)) {
                    switch ($operation) {
                        case 'add':
                            $result = $num1 + $num2;
                            break;
                        case 'subtract':
                            $result = $num1 - $num2;
                            break;
                        case 'multiply':
                            $result = $num1 * $num2;
                            break;
                        case 'divide':
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                $result = 'Division by zero error';
                            }
                            break;
                        default:
                            $result = 'Invalid operation';
                            break;
                    }
                    echo "<h2>Result: $result</h2>";
                } else {
                    echo "<h2>Please enter valid numbers</h2>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>