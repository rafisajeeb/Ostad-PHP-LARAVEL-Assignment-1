<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" required><br><br>

        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" required><br><br>

        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the corresponding letter grade
        $letterGrade = '';
        if ($average >= 90) {
            $letterGrade = 'A';
        } elseif ($average >= 80) {
            $letterGrade = 'B';
        } elseif ($average >= 70) {
            $letterGrade = 'C';
        } elseif ($average >= 60) {
            $letterGrade = 'D';
        } else {
            $letterGrade = 'F';
        }

        echo "<h2>Results:</h2>";
        echo "Average Score: " . number_format($average, 2) . "<br>";
        echo "Letter Grade: " . $letterGrade . "<br>";
    }
    ?>
</body>
</html>
