# Lab7Web

```
Nama    : Tiara Putri
NIM     : 312210064
Kelas   : TI.22.A.1
Matkul  : Pemrograman Web 1
```

## **Daftar Isi**
[Instruksi Praktikum](#instruksi-praktikum)         
[Langkah-langkah Praktikum](#langkah-langkah-praktikum)             
[Pertanyaan dan Tugas](#pertanyaan-dan-tugas)           
## **Instruksi Praktikum**

1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab7_php_dasar pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## **Langkah-langkah Praktikum**

1. Install XAMPP
   Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi
   portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan
   direktorinya (misal: d:\xampp).

2. Memulai PHP
   Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

3. PHP Dasar
   Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
   kode seperti berikut.

    ```php
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>PHP Dasar</title>
            </head>
            <body>
                <h1>Belajar PHP Dasar</h1>
                <?php
                echo "Hello World";
                ?>
            </body>
        </html>

    ```
    
![1](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/54893ab5-f441-4d3a-9383-9b8a12976259)


4. Variable PHP

    ```php
        <?php
        $nim = "0411500400";
        $nama = 'Abdullah';
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
        ?>
    ```
    
![2](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/6b434097-4ed0-4ce5-9fb4-755051548773)


5. Predefine Variable $_GET

    ```php
        <?php
        echo 'Selamat Datang ' . $_GET['nama'];
        ?>

    ```

![3](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/6d3bbeb1-c994-4f8b-b825-06245b95d2d5)

6. Membuat Form

    ```php
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>PHP Dasar</title>
            </head>
            <body>
                <h2>Form Input</h2>
                <form method="post">
                    <label>Nama: </label>
                    <input type="text" name="nama">
                    <input type="submit" value="Kirim">
                </form>
                <?php
                echo 'Selamat Datang ' . $_POST['nama'];
                ?>
            </body>
        </html>

    ```

![4](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/f8b44947-15ce-4cce-9c9f-6021acd48ac8)

7. Operator

    ```php
        <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
        ?>

    ```

![5](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/741c5403-8529-4cb7-a2fc-f9d1fb0d47a3)

8. Kondisi IF

    ```php
        <?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Selasa";
        }
        ?>
    ```

![6](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/2e61e146-ecdd-4c1e-a747-2e05011f1f39)

9. Kondisi Switch

    ```php
        <?php
        $nama_hari = date("l");
        switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
        ?>
    ```

![7](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/fc64f1a0-ee76-4ff1-99d9-ea384b5ed113)

10. Perulangan for

    ```php
        <?php
        echo "Perulangan 1 sampai 10 <br />";
        for ($i=1; $i<=10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
        }
        echo "Perulangan Menurun dari 10 ke 1 <br />";
        for ($i=10; $i>=1; $i--) {
            echo "Perulangan ke: " . $i . '<br />';
        }
        ?>
    ```

![8](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/84736db8-f62b-4124-925e-1f8013acaf8d)

11. Perulangan while

    ```php
        <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        while ($i<=10) {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        }
        ?>
    ```

![9](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/0a7e1b1b-26b2-409e-a64d-e2925d36e55d)

12. Perulangan dowhile

    ```php
        <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        do {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        } while ($i<=10);
        ?>
    ```

![10](https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/a2a488f8-ab70-4e64-942a-3150eda80da8)

## Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan 
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung 
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang 
berbeda-beda sesuai pilihan pekerjaan.
```html
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
```



https://github.com/tiaraputriiiiii/Lab7Web/assets/115775237/b6799c5c-69b9-4d06-9de1-0e1e5f5557df


<hr>

## Selesai, Terima kasih 🙏
