<?php
include "../../config/db.php";
session_start();
$user_id = $_SESSION['user_id'];
$resep_id = $_POST['resep_id'];
$isi = $_POST['isi_komentar'];

$conn->query("INSERT INTO komentar(resep_id,user_id,isi_komentar,created_at,status) VALUES($resep_id,$user_id,'$isi',NOW(),'dibuka')");

header("Location: ../../pages/resep_detail.php?id=$resep_id");
?>
