<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';

$brand_id = $_GET['brand_id'];
$getAllInfoByBrandID = getAllInfoByBrandID($pdo, $brand_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Guitars</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="index.php">Return to home</a>

    <h1>Brand Name: <?php echo $getAllInfoByBrandID['brand_name']; ?></h1>
    <h1>Add New Guitar</h1>

    <form action="core/handleForms.php?brand_id=<?php echo $_GET['brand_id']; ?>" method="POST">
        <p>
            <label for="guitarName">Guitar Name</label>
            <input type="text" name="guitarName">
        </p>

        <p>
            <label for="technologiesUsed">Technologies Used</label>
            <input type="text" name="technologiesUsed">
            <input type="submit" name="insertNewGuitarBtn" value="Add Guitar">
        </p>
    </form>

    <table style="width:100%; margin-top: 50px;">
        <tr>
            <th>Guitar ID</th>
            <th>Guitar Name</th>
            <th>Technologies Used</th>
            <th>Brand</th>
            <th>Date Added</th>
            <th>Action</th>
        </tr>

        <?php $getGuitarsByBrand = getGuitarsByBrand($pdo, $_GET['brand_id']); ?>
        <?php foreach ($getGuitarsByBrand as $row) { ?>
            <tr>
                <td><?php echo $row['guitar_id']; ?></td>
                <td><?php echo $row['guitar_name']; ?></td>
                <td><?php echo $row['technologies_used']; ?></td>
                <td><?php echo $getAllInfoByBrandID['brand_name']; ?></td>
                <td><?php echo $row['date_added']; ?></td>
                <td>
                    <a href="editguitar.php?guitar_id=<?php echo $row['guitar_id']; ?>&brand_id=<?php echo $_GET['brand_id']; ?>">Edit</a>
                    <a href="deleteguitar.php?guitar_id=<?php echo $row['guitar_id']; ?>&brand_id=<?php echo $_GET['brand_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>