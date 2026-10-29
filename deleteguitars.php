<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';

$getGuitarByID = getGuitarByID($pdo, $_GET['guitar_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Guitar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Are you sure you want to delete this guitar?</h1>

    <div class="container" style="border: 1px solid #000; height: 300px; padding: 20px;">
        <h2>Guitar Name: <?php echo $getGuitarByID['guitar_name']; ?></h2>
        <h2>Technologies Used: <?php echo $getGuitarByID['technologies_used']; ?></h2>
        <h2>Brand ID: <?php echo $getGuitarByID['brand_id']; ?></h2>
        <h2>Date Added: <?php echo $getGuitarByID['date_added']; ?></h2>

        <div class="deleteBtn" style="float: right; margin-right: 10px;">
            <form action="core/handleForms.php?guitar_id=<?php echo $_GET['guitar_id']; ?>&brand_id=<?php echo $_GET['brand_id']; ?>" method="POST">
                <input type="submit" name="deleteGuitarBtn" value="Delete Guitar">
            </form>
        </div>
    </div>
</body>
</html>