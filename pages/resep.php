<?php
// 1. Koneksi ke Database
$servername = "localhost";
$username   = "root";      // Laragon default
$password   = "";          // Laragon default kosong
$dbname     = "rasakita";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// 2. Ambil ID Resep dari URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php'); // arahkan ke halaman utama
    exit();
}

$resep_id = $_GET['id'];

// 3. Query untuk Mengambil Data Resep
$sql = "SELECT * FROM resep WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $resep_id);
$stmt->execute();
$result = $stmt->get_result();

// 4. Periksa apakah resep ditemukan
if ($result->num_rows > 0) {
    $resep = $result->fetch_assoc();
} else {
    $resep = null;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $resep ? $resep['nama_resep'] : 'Resep Tidak Ditemukan'; ?></title>
    <link rel="stylesheet" href="../assets/css"> <!-- sesuaikan path -->
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 0; padding: 0; }
        .container { max-width: 800px; margin: 40px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .author-info { color: #666; margin-bottom: 20px; }
        .main-image { width: 100%; height: auto; border-radius: 8px; margin-bottom: 20px; }
        .ingredients, .steps { margin-bottom: 20px; line-height: 1.6; }
        h2 { color: #444; margin-top: 30px; }
    </style>
</head>
<body>
    <main class="container">

        <?php if ($resep): ?>
            <div class="detail-resep">
                <h1><?php echo $resep['nama_resep']; ?></h1>
                
                <?php if(isset($resep['penulis'])): ?>
                <p class="author-info">
                    Oleh: <strong><?php echo $resep['penulis']; ?></strong> | 
                    <?php if(isset($resep['waktu_masak'])): ?>
                        Waktu Masak: <?php echo $resep['waktu_masak']; ?> menit
                    <?php endif; ?>
                </p>
                <?php endif; ?>

                <?php if($resep['foto'] && file_exists("../uploads/".$resep['foto'])): ?>
                    <img src="../uploads/<?php echo $resep['foto']; ?>" alt="<?php echo $resep['nama_resep']; ?>" class="main-image">
                <?php endif; ?>

                <?php if(isset($resep['bahan_bahan'])): ?>
                    <h2>Bahan-bahan</h2>
                    <div class="ingredients">
                        <?php echo nl2br($resep['bahan_bahan']); ?>
                    </div>
                <?php endif; ?>

                <?php if(isset($resep['langkah_langkah'])): ?>
                    <h2>Langkah-langkah Memasak</h2>
                    <div class="steps">
                        <?php echo nl2br($resep['langkah_langkah']); ?>
                    </div>
                <?php endif; ?>

            </div>
        <?php else: ?>
            <h1>Resep Tidak Ditemukan</h1>
            <p>Maaf, resep yang Anda cari tidak tersedia atau sudah dihapus.</p>
        <?php endif; ?>

    </main>
</body>
</html>
