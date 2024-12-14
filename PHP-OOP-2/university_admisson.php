<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission System</title>
</head>
<body>
    <form action="" method="post">
        <label for="num">Enter Your Grade:</label>
        <input type="number" name="num" id="num" required>
        <label for="name">Enter Your Name:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n = (int)$_POST['num'];
        $name = $_POST['name'];

        abstract class Admission {
            protected $name;

            public function __construct($name) {
                $this->name = $name;
            }

            abstract public function apply();
        }

        class GeneralAdmission extends Admission {
            protected $grade;

            public function __construct($name, $grade) {
                parent::__construct($name);
                $this->grade = $grade;
            }

            public function apply() {
                echo "General admission process for {$this->name}...<br>";
            }
        }

        class UndergraduateAdmission extends GeneralAdmission {
            public function apply() {
                echo "Processing undergraduate application for {$this->name}...<br>";
                if ($this->grade < 60) {
                    throw new Exception("Application rejected due to low grade.");
                }
                echo "Application accepted!<br>";
            }

            public function checkEligibility() {
                echo "Checking scholarship eligibility for {$this->name}...<br>";
                if ($this->grade > 85) {
                    echo "{$this->name} is eligible for a scholarship.<br>";
                } else {
                    echo "{$this->name} is not eligible for a scholarship.<br>";
                }
            }
        }

        try {
            $applicant = new UndergraduateAdmission($name, $n);
            $applicant->apply();
            $applicant->checkEligibility();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    ?>
</body>
</html>
