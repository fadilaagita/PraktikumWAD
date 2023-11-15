<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    include("navbar.php");
    include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    mysqli_query($conncet, "DELETE from tambah WHERE id=$id");
    header(Location:read.php)
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        <form action="update.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="string" class="form-control" name="nama_mobil" id="nama_mobil" value="Tampilkan data nama_mobil disini">
                <label for="nama_mobil">Nama Mobil</label>
            </div>
            <div class="form-floating mb-3">
                <input type="string" class="form-control" name="brand_mobil" id="brand_mobil" value="Tampilkan data brand_mobil disini">
                <label for="brand_mobil">Brand Mobil</label>
            </div>
            <div class="form-floating mb-3">
                <input type="string" class="form-control" name="warna_mobil" id="warna_mobil" value="Tampilkan data warna_mobil disini">
                <label for="warna_mobil">Warna Mobil</label>
            </div>
            <div class="form-floating mb-3">
                <input type="string" class="form-control" name="tipe_mobil" id="tipe_mobil" value="Tampilkan data tipe_mobil disini">
                <label for="tipe_mobil">Tipe Mobil</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="harga_mobil" id="harga_mobil" value="Tampilkan data harga_mobil disini">
                <label for="harga_mobil">Harga Mobil</label>
            </div>
            <button type="submit" name="update" id="update" class="btn btn-primary mb-3 mt-3 w-100">Simpan</button>
        </form>
        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        if($query) {
            echo "<script>alert('Data berhasil diubah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";
        }  else {
            echo "<script>alert('Data gagal diubah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>"
        }
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

?>