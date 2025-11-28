<?php
include "../../config/db.php";
include "../../includes/header.php";
include "../../includes/navbar.php";

// Ambil kategori
$kategoriQuery = "SELECT * FROM kategori";
$kategoriResult = $conn->query($kategoriQuery);

// Proses form submit
if(isset($_POST['submit'])){
    $user_id = 1; // ganti dengan $_SESSION['user_id'] jika sudah login
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $kategori_id = $_POST['kategori_id'];
    $waktu_masak = $_POST['waktu_masak'];
    $porsi = $_POST['porsi'];

    // Upload foto resep
    $foto = $_FILES['foto_resep']['name'];
    $tmp = $_FILES['foto_resep']['tmp_name'];
    move_uploaded_file($tmp, "../../uploads/".$foto);

    $created_at = date("Y-m-d H:i:s");

    // Insert resep
    $insert = "INSERT INTO resep(user_id, judul, deskripsi, kategori_id, foto_resep, waktu_masak, porsi, created_at) 
               VALUES('$user_id','$judul','$deskripsi','$kategori_id','$foto','$waktu_masak','$porsi','$created_at')";
    if($conn->query($insert)){
        $resep_id = $conn->insert_id;

        // Insert bahan
        foreach($_POST['nama_bahan'] as $i => $nama){
            $jumlah = $_POST['jumlah'][$i];
            $conn->query("INSERT INTO bahan(resep_id, nama_bahan, jumlah) VALUES('$resep_id','$nama','$jumlah')");
        }

        // Insert langkah
        foreach($_POST['langkah'] as $i => $lang){
            $foto_langkah = $_FILES['foto_langkah']['name'][$i];
            $tmp_lang = $_FILES['foto_langkah']['tmp_name'][$i];
            if($foto_langkah){
                move_uploaded_file($tmp_lang, "../../uploads/".$foto_langkah);
            }
            $conn->query("INSERT INTO langkah(resep_id, deskripsi, foto_langkah) VALUES('$resep_id','$lang','$foto_langkah')");
        }

        echo "<script>alert('Resep berhasil ditambahkan!'); window.location='../../pages/resep.php';</script>";
    } else {
        echo "Error: ".$conn->error;
    }
}
?>

<div class="container">
    <h2 class="title">Tambah Resep</h2>
    <form method="POST" enctype="multipart/form-data">
        <label>Judul Resep</label>
        <input type="text" name="judul" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" required></textarea>

        <label>Kategori</label>
        <select name="kategori_id" required>
            <?php while($k = $kategoriResult->fetch_assoc()){ ?>
                <option value="<?php echo $k['kategori_id']; ?>"><?php echo $k['nama_kategori']; ?></option>
            <?php } ?>
        </select>

        <label>Foto Resep</label>
        <input type="file" name="foto_resep" required>

        <label>Waktu Masak</label>
        <input type="text" name="waktu_masak" required>

        <label>Porsi</label>
        <input type="text" name="porsi" required>

        <h3>Bahan</h3>
        <div id="bahan-container">
            <input type="text" name="nama_bahan[]" placeholder="Nama bahan" required>
            <input type="text" name="jumlah[]" placeholder="Jumlah" required>
        </div>
        <button type="button" onclick="tambahBahan()">Tambah Bahan</button>

        <h3>Langkah</h3>
        <div id="langkah-container">
            <textarea name="langkah[]" placeholder="Deskripsi langkah" required></textarea>
            <input type="file" name="foto_langkah[]">
        </div>
        <button type="button" onclick="tambahLangkah()">Tambah Langkah</button>

        <br><br>
        <button type="submit" name="submit">Simpan Resep</button>
    </form>
</div>

<script>
function tambahBahan(){
    let container = document.getElementById('bahan-container');
    container.insertAdjacentHTML('beforeend', '<input type="text" name="nama_bahan[]" placeholder="Nama bahan" required> <input type="text" name="jumlah[]" placeholder="Jumlah" required>');
}

function tambahLangkah(){
    let container = document.getElementById('langkah-container');
    container.insertAdjacentHTML('beforeend', '<textarea name="langkah[]" placeholder="Deskripsi langkah" required></textarea> <input type="file" name="foto_langkah[]">');
}
</script>

<?php include "../../includes/footer.php"; ?>
