<?php

function insertBrand($pdo, $brandName, $countryOfOrigin, 
$founder, $establishedYear) {

    $sql = "INSERT INTO brands (brandName, countryOfOrigin, 
    founder, establishedYear) VALUES(?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$brandName, $countryOfOrigin, 
    $founder, $establishedYear, $brand_id]);

    if ($executeQuery) {
        return true;
    }
}

function updateBrand($pdo, $brandName, $countryOfOrigin,
$founder, $establishedYear, $brand_id) {

    $sql = "UPDATE brands
                SET brandName = ?,
                    countryOfOrigin = ?,
                    founder = ?,
                    establishedYear = ?
                WHERE brand_id = ?
            ";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$brandName, $countryOfOrigin,
    $founder, $establishedYear, $brand_id]);

    if ($executeQuery) {
        return true;
    }
}

function deleteBrand($pdo, $brand_id) {
    $deleteBrand = "DELETE FROM guitars WHERE brand_id = ?";
    $deleteStmt = $pdo->prepare($deleteBrand);
    $executeDeleteQuery = $deleteStmt->execute([$brand_id]);

    if ($executeDeleteQuery) {
        $sql = "DELETE FROM brands WHERE brand_id = ?";
        $stmt = $pdo->prepare($sql);
        $executeQuery = $stmt->execute([$brand_id]);

        if ($executeQuery) {
            return true;
        }
    }
}
