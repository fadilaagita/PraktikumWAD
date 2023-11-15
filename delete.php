<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require ='connect'
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)

    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil

    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if($query) {
        echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";
    }  else {
        echo "<script>alert('Data gagal dihapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>"
    }
// Tutup koneksi ke database setelah selesai menggunakan database

?>