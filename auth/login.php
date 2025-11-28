<?php
include "../config/db.php";
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username' AND status='dibuka'");
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['nama'] = $user['nama'];
            header("Location: ../pages/home.php");
        } else {
            echo "Password salah.";
        }
    } else {
        echo "User tidak ditemukan atau diblokir.";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="submit">Login</button>
</form>
