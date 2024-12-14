<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 3</title>
</head>
<body>
    <form action="" method="post">
        <h3>Enter Details for Three Cities</h3>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <div>
                <h1>City <?php echo $i + 1; ?></h1>
                <label for="city<?php echo $i; ?>">Enter City:</label>
                <input type="text" name="city[]" id="city<?php echo $i; ?>" required><br><br>

                <label for="population<?php echo $i; ?>">Enter Population:</label>
                <input type="number" name="population[]" id="population<?php echo $i; ?>" required><br><br>

                <label for="importance<?php echo $i; ?>">Enter Historical Importance:</label>
                <input type="text" name="importance[]" id="importance<?php echo $i; ?>" required><br><br>
        </div>
            <br>
        <?php endfor; ?>

        <button type="submit">Submit</button>
    </form>

    <h2>Submitted City Details:</h2>
    <div>
        <?php
        class City {
            public $name;
            public $population;

            public function __construct($name, $population) {
                $this->name = $name;
                $this->population = $population;
            }

            public function displayDetails() {
                return "City: " . $this->name . " has a total population of " . $this->population . ". ";
            }
        }

        class HistoricalCity extends City {
            public $historicalImportance;

            public function __construct($name, $population, $historicalImportance) {
                parent::__construct($name, $population);
                $this->historicalImportance = $historicalImportance;
            }

            public function displayFullDetails() {
                return $this->displayDetails() . "Historical Importance: " . $this->historicalImportance . ".";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cityNames = $_POST['city'];
            $populations = $_POST['population'];
            $importances = $_POST['importance'];

            $cities = [];

            for ($i = 0; $i < 3; $i++) {
                $cities[$i] = new HistoricalCity($cityNames[$i], $populations[$i], $importances[$i]);
                echo "<p>" . $cities[$i]->displayFullDetails() . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
