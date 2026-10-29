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
    <title>Delete Brand</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Are you sure you want to delete this brand?</h1>

    <div class="container" style="border: 1px solid #000; height: 300px; padding: 20px;">
        <h2>Brand Name: <?php echo $getBrandByID['brand_name']; ?></h2>
        <h2>Country of Origin: <?php echo $getBrandByID['country_of_origin']; ?></h2>
        <h2>Founder: <?php echo $getBrandByID['founder']; ?></h2>
        <h2>Established Year: <?php echo $getBrandByID['established_year']; ?></h2>
        <h2>Date Added: <?php echo $getBrandByID['date_added']; ?></h2>

        <div class="deleteBtn" style="float: right; margin-right: 10px;">
            <form action="core/handleForms.php?brand_id=<?php echo $_GET['brand_id']; ?>" method="POST">
                <input type="submit" name="deleteBrandBtn" value="Delete Brand">
            </form>
        </div>
    </div>
</body>
</html>