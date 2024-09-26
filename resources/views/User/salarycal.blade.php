<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculator</title>
</head>
<body>

    <h2>Calculate Prorated Salary</h2>
    <form method="POST" action="">
        <label for="monthlySalary">Monthly Salary:</label>
        <input type="number" name="monthlySalary" id="monthlySalary" required><br><br>

        <label for="daysWorked">Days Worked:</label>
        <input type="number" name="daysWorked" id="daysWorked" required><br><br>

        <label for="totalDaysInMonth">Total Days in Month:</label>
        <input type="number" name="totalDaysInMonth" id="totalDaysInMonth" required><br><br>

        <input type="submit" name="calculate" value="Calculate Salary">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calculate'])) {
        $monthlySalary = $_POST['monthlySalary'];
        $daysWorked = $_POST['daysWorked'];
        $totalDaysInMonth = $_POST['totalDaysInMonth'];

        function calculateProratedSalary($monthlySalary, $daysWorked, $totalDaysInMonth) {
            $dailySalary = $monthlySalary / $totalDaysInMonth;
            $proratedSalary = $dailySalary * $daysWorked;
            return round($proratedSalary, 2);
        }

        $calculatedSalary = calculateProratedSalary($monthlySalary, $daysWorked, $totalDaysInMonth);

        echo "<h3>Calculated Salary: $calculatedSalary</h3>";
    }
    ?>

</body>
</html>
