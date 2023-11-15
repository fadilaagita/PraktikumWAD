<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    require =(connect)

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
    include('config.php');
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $nama = $_POST['Nama Mobil'];
    // b. Ambil data brand mobil
    $brand = $_POST['Brand Mobil'];
    // c. Ambil data warna mobil
    $warna = $_POST['Warna Mobil'];
    // d. Ambil data tipe mobil
    $tipe = $_POST['Tipe Mobil'];
    // e. Ambil data harga mobil
    $harga = $_POST['Harga Mobil'];
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query = mysqli_query($conncet, "INSERT INTO showroom_mobil(nama, brand, warna, tipe, harga) VALUES ('$nama', '$brand', '$warna', '$tipe', '$harga')");

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if($query) {
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }  else {
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
        echo "<script>alert('Data gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>"
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>