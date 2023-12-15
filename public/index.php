<form method="post">
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="text" name="nim" placeholder="nim"><br>
    <input type="text" name="kelas" placeholder="kelas"><br>
    <input type="text" name="whatsapp" placeholder="whatsapp"><br>
    <input type="submit" name="create">
</form>

<?php 
    include '../app/configs/db.php';
    include '../app/configs/function.php';

    $tabel = 'penghuni';
    if(isset($_POST['create'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $whatsapp = $_POST['whatsapp'];

        CreatePenghuni($conn,$tabel,$nama,$nim,$kelas,$whatsapp);
    }
?>