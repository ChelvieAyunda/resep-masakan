<?php
include "../config/db.php";

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn->query("INSERT INTO users(nama, username, email, password, role, created_at, status) VALUES('$nama','$username','$email','$password','user',NOW(),'dibuka')");
    echo "<script>alert('Registrasi berhasil!'); window.location='login.php';</script>";
}
?>

<form method="POST">
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="submit">Register</button>
</form>
