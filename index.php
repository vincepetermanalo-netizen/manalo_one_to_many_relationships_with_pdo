<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands and Guitars</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome To Guitar Brand Management System. Add New Brands!</h1>

    <form action="core/handleForms.php" method="POST">
        <p>
            <label for="brandName">Brand Name</label>
            <input type="text" name="brandName">
        </p>

        <p>
            <label for="countryOfOrigin">Country of Origin</label>
            <input type="text" name="countryOfOrigin">
        </p>

        <p>
            <label for="founder">Founder</label>
            <input type="text" name="founder">
        </p>

        <p>
            <label for="establishedYear">Established Year</label>
            <input type="number" name="establishedYear">
        </p>

        <p>
            <input type="submit" name="insertBrandBtn" value="Add Brand">
        </p>
    </form>

    <?php $getAllBrands = getAllBrands($pdo); ?>
    <?php foreach ($getAllBrands as $row) { ?>
        <div class="container" style="border: 1px solid #000; width: 50%; min-height: 220px; margin-top: 20px; padding: 15px;">
            <h3>Brand Name: <?php echo $row['brand_name']; ?></h3>
            <h3>Country of Origin: <?php echo $row['country_of_origin']; ?></h3>
            <h3>Founder: <?php echo $row['founder']; ?></h3>
            <h3>Established Year: <?php echo $row['established_year']; ?></h3>
            <h3>Date Added: <?php echo $row['date_added']; ?></h3>

            <div class="editAndDelete" style="float: right; margin-right: 20px;">
                <a href="viewprojects.php?brand_id=<?php echo $row['brand_id']; ?>">View Guitars</a>
                <a href="editbrand.php?brand_id=<?php echo $row['brand_id']; ?>">Edit</a>
                <a href="deletebrand.php?brand_id=<?php echo $row['brand_id']; ?>">Delete</a>
            </div>
        </div>
    <?php } ?>
</body>
</html>