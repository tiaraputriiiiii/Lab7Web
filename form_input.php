<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
    <style>
    * {
    font-family: Tahoma, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    span {
        font-weight: bold;
        color: darkcyan;
    }

    p {
        line-height: 25px;
        text-align: center;
    }

    h2 {
        padding: 20px;
        text-align: center;
        color: darkslateblue;
    }


    .container {
        margin: 20px auto;
        text-align: left;
        width: 60%;
    }

    form {
        background-color: rgb(100, 149, 237);
        border-radius: 10px;
        box-shadow: 2px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-align: center;
        padding: 20px;
    }

    form label:hover {
        cursor: pointer;
    }

    .btn {
        margin-top: 20px;
        margin-bottom: 10px;
        padding: 10px 15px;
        border-radius: 5px;
        border: 0;
        background-color: rgb(255, 255, 255);
        color: rgb(100, 149, 237);
        width: 20%;
        font-weight: bold;
    }

    .btn:hover {
        cursor: pointer;
        background-color: rgb(240, 248, 254);
        transform: scale(0.98);
    }


    form input,
    form select {
        padding: 10px;
        margin: 10px;
        width: 60%;
        border: 0;
        border-radius: 2px;
    }

    .input-group {
        display: flex;
        margin-left: 30px;
        align-items: center;
        justify-content: space-between;
    }
    </style>
</head>
<body>
    <?php
// Fungsi untuk menghitung umur berdasarkan tanggal lahir
function hitungUmur($tanggal_lahir) {
    $today = new DateTime();
    $tanggal_lahir = new DateTime($tanggal_lahir);
    $umur = $today->diff($tanggal_lahir);
    return $umur->y;
}

// Daftar pekerjaan beserta gaji
$pekerjaan_gaji = array(
    'Dokter' => 4000000,
    'Apoteker' => 8000000,
    'Hakim' => 17000000,
    'Pengacara' => 15700000,
    'CEO' => 14700000,
    'Pilot' => 10300000,
    'Direktur' => 9840000,
    'Manajer Bank' => 13000000,
    'CFO' => 14700000,
    'Dokter Gigi' => 12800000
);

// Memproses form jika sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $pekerjaan = $_POST["pekerjaan"];

    // Validasi data
    if (empty($nama) || empty($tanggal_lahir) || empty($pekerjaan)) {
        echo "Harap lengkapi semua field!";
    } else {
        // Menghitung umur
        $umur = hitungUmur($tanggal_lahir);

        // Menampilkan output
        echo "<h2>Hasil Output</h2>";
        echo "<p><span>Nama         :</span> $nama</p>";
        echo "<p><span>Tanggal Lahir:</span> $tanggal_lahir</p>";
        echo "<p><span>Pekerjaan    :</span> $pekerjaan</p>";
        echo "<p><span>Umur         :</span> $umur tahun</p>";
        echo "<p><span>Gaji         :</span> " . number_format($pekerjaan_gaji[$pekerjaan]) . "</p>";
    }
}
?>
<h2 class="form">Form Input</h2>
<div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="input-group">
            <label for="nama">Nama </label>
            <input type="text" name="nama">
        </div>
        <div class="input-group">
            <label for="tanggal_lahir">Tanggal Lahir </label>
            <input type="date" name="tanggal_lahir">
        </div>
        <div class="input-group">
            <label for="pekerjaan">Pekerjaan </label>
            <select name="pekerjaan">
                <option value="Dokter umum">Dokter</option>
                <option value="Apoteker">Apoteker</option>
                <option value="Hakim">Hakim</option>
                <option value="Pengacara">Pengacara</option>
                <option value="CEO">CEO</option>
                <option value="Pilot">Pilot</option>
                <option value="Direktur">Direktur</option>
                <option value="Manajer Bank">Manajer Bank</option>
                <option value="CFO">CFO</option>
                <option value="Dokter Gigi">Dokter Gigi</option>
            </select>
        </div>
        
        <input type="submit" name="submit" value="Submit" class="btn">
    </form>
</div>
</body>
</html>