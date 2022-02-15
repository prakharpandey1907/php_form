<!DOCTYPE html>
<head>
	<title>Electricity Bill Calculation</title>
</head>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
function calculate_bill($units) {
    $firstBill = 3.50;
    $secondBill = 4.00;
    $thirdBill = 5.20;
    $fourthBill = 6.50;

    if($units <= 50) {
        $bill = $units * $firstBill;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $firstBill;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $secondBill);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $secondBill);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $thirdBill);
    }
    else {
        $temp = (50 * 3.5) + (100 * $secondBill) + (100 * $thirdBill);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourthBill);
    }
    return number_format((float)$bill, 2, '.', '');
}

?>

<body>
	<div id="page-wrap">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
</body>
</html>