<?php
include "../../config/db.php";

if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    // Hapus bahan
    $conn->query("DELETE FROM bahan WHERE resep_id=$id");

    // Hapus langkah
    $conn->query("DELETE FROM langkah WHERE resep_id=$id");

    // Hapus resep
    $conn->query("DELETE FROM resep WHERE resep_id=$id");

    header("Location: ../../pages/resep.php");
}
?>
