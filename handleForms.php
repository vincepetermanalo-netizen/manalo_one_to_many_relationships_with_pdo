<?php 

require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertBrandBtn'])) {

    $query = insertBrand($pdo, $_POST['brandName'], $_POST['countryOfOrigin'],
    $_POST['founder'], $_POST['establishedYear']);

    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Insertion Failed";
    }
}

if (isset($_POST[editBrandBtn])) {

    $query = updateBrand($pdo, $_POST['brandName'], $_POST['countryOfOrigin'],
    $_POST['founder'], $_POST['establishedYear'], $_GET['brand_id']);

    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Edit Failed";;
    }
}

if (isset($_POST['deleteBrandBtn'])) {
    
    $query = deleteBrand($pdo, $_GET['brand_id']);

    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion Failed"
    }
}

if (isset($_POST['insertNewGuitarBtn'])) {
    $query = insertGuitar($pdo, $_POST['guitarName'], $_POST['technologiesUsed'], $_GET['brand_id']);

    if ($query) {
        header("Location: ../viewprojects.php?brand_id=" .$_GET['brand_id']);
    } else {
        echo "Insertion Failed";
    }
}

if (isset($_POST['editGuitarBtn'])) {

    $query = updateGuitar($pdo, $_POST['guitarName'], $_POST['technologiesUsed'], $_GET['guitar_id']);

    if ($query) {
        header("Location: ../viewprojects.php?brand_id=" .$_GET['guitar_id']);
    } else {
        echo "Update Failed";
    }
} 

if (isset($_POST['deleteGuitarBtn'])) {
    $query = deleteGuitar($pdo, $_GET['guitar_id']);

    if ($query) {
        header("Location: ../viewprojects.php?brand_id=" .$_GET['brand_id']);
    } else {
        echo "Deletion Failed."
    }
}

