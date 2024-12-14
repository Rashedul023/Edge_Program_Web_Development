<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics Form</title>
</head>
<body>
    <h2>Electronics Model Form</h2>
    <form method="POST">
        <label for="brand">Brand:</label><br>
        <input type="text" id="brand" name="brand" ><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" min="1"><br><br>

        <label for="category">Category Name:</label><br>
        <input type="text" id="category" name="category" ><br><br>

        <label for="model">Model Name:</label><br>
        <input type="text" id="model" name="model"><br><br>

        <label for="feature">Feature:</label><br>
        <input type="text" id="feature" name="feature"><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    class Electronics {
        protected $price;

        public function __construct($price) {
            if ($price <= 0) {
                throw new InvalidArgumentException("Price must be a positive value.");
            }
            $this->price = $price;
        }

        public function getPrice() {
            return $this->price;
        }
    }

    class Company {
        public $brand;

        public function __construct($brand) {
            if (empty($brand)) {
                throw new InvalidArgumentException("Brand cannot be empty.");
            }
            $this->brand = $brand;
        }

        public function getBrand() {
            return $this->brand;
        }
    }

    trait AdditionalFeatures {
        public $feature;

        public function setFeature($feature) {
            if (empty($feature)) {
                throw new InvalidArgumentException("Feature cannot be empty.");
            }
            $this->feature = $feature;
        }

        public function getFeature() {
            return $this->feature;
        }
    }

    abstract class Category extends Electronics {
        public $name;

        public function __construct($price, $name) {
            parent::__construct($price);
            if (empty($name)) {
                throw new InvalidArgumentException("Category name cannot be empty.");
            }
            $this->name = $name;
        }

        abstract public function warranty();

        public function details(){
            return "This is a product of {$this->name} catagory";
        }
    }

    class Model extends Category {
        use AdditionalFeatures;

        public $modelName;

        public function __construct($price, $name, $modelName) {
            parent::__construct($price, $name);
            if (empty($modelName)) {
                throw new InvalidArgumentException("Model name cannot be empty.");
            }
            $this->modelName = $modelName;
        }

        public function warranty() {
            return "1-year warranty for model: {$this->modelName}";
        }

        public function details() {
            return "Category: {$this->name}, Model: {$this->modelName}, Price: {$this->getPrice()}, Feature: {$this->getFeature()}, Warranty: {$this->warranty()}";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $brand = $_POST['brand'];
            $price = $_POST['price'];
            $category = $_POST['category'];
            $modelName = $_POST['model'];
            $feature = $_POST['feature'];

            $company = new Company($brand);
            $model = new Model($price, $category, $modelName);
            $model->setFeature($feature);

            echo "<h3>Brand: " . htmlspecialchars($company->getBrand()) . "</h3>";
            echo "<h3>Details:</h3><p>" . htmlspecialchars($model->details()) . "</p>";
        } catch (InvalidArgumentException $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        } catch (Exception $e) {
            echo "<p>An unexpected error occurred: " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>
</html>
