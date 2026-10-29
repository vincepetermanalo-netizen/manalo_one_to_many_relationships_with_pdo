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
    <title>Edit Guitar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="viewprojects.php?brand_id=<?php echo $_GET['brand_id']; ?>">
        View The Guitars
    </a>

    <h1>Edit the guitar!</h1>

    <form action="core/handleForms.php?guitar_id=<?php echo $_GET['guitar_id']; ?>&brand_id=<?php echo $_GET['brand_id']; ?>" method="POST">
        <p>
            <label for="guitarName">Guitar Name</label>
            <input type="text" name="guitarName" value="<?php echo $getGuitarByID['guitar_name']; ?>">
        </p>

        <p>
            <label for="technologiesUsed">Technologies Used</label>
            <input type="text" name="technologiesUsed" value="<?php echo $getGuitarByID['technologies_used']; ?>">
            <input type="submit" name="editGuitarBtn" value="Update Guitar">
        </p>
    </form>
</body>
</html>