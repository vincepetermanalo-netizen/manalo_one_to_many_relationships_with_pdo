<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';

$getBrandByID = getBrandByID($pdo, $_GET['brand_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Brand</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="index.php">Return to home</a>

    <h1>Edit the brand!</h1>

    <form action="core/handleForms.php?brand_id=<?php echo $_GET['brand_id']; ?>" method="POST">
        <p>
            <label for="brandName">Brand Name</label>
            <input type="text" name="brandName" value="<?php echo $getBrandByID['brand_name']; ?>">
        </p>

        <p>
            <label for="countryOfOrigin">Country of Origin</label>
            <input type="text" name="countryOfOrigin" value="<?php echo $getBrandByID['country_of_origin']; ?>">
        </p>

        <p>
            <label for="founder">Founder</label>
            <input type="text" name="founder" value="<?php echo $getBrandByID['founder']; ?>">
        </p>

        <p>
            <label for="establishedYear">Established Year</label>
            <input type="text" name="establishedYear" value="<?php echo $getBrandByID['established_year']; ?>">
        </p>

        <p>
            <input type="submit" name="editBrandBtn" value="Update Brand">
        </p>
    </form>
</body>
</html>