<?php 
    function CreatePenghuni($conn,$tabel,$a,$b,$c,$d){
        $query = $conn->query("INSERT INTO $tabel set 
        nama = '$a',
        nim = '$b',
        kelas = '$c',
        whatsapp = '$d'");

        if($query){
            echo '<script>window.alert("Berhasil")</script>';
        }
        else{
            echo '<script>window.alert("Gagal")</script>';
        }
    }
?>