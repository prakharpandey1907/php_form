<!DOCTYPE html>

<head>
	<title>Calculator</title>
</head>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case "Add":
           $result = $num1 + $num2;
            break;
        case "Subtract":
           $result = $num1 - $num2;
            break;
        case "Multiply":
            $result = $num1 * $num2;
            break;
        case "Divide":
            $result = $num1 / $num2;
    }
}

?>

<body>
    <div id="page-main">
	<h1>PHP - Simple Calculator Program</h1>
	  <form action="" method="post" id="askForm">
            <p>
                <input type="number" name="num1" id="num1" required="required" value="<?php echo $num1; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="num2" id="num2" required="required" value="<?php echo $num2; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>
PHP
