<?php 
    if(isset($_GET['pages'])){
        $pages = $_GET['pages'];

        if($pages == 'penghuni'){
            header("location:../app/controllers/loading.php?pages=penghuni");
        }
        else{
            include '../app/source/index.php';
        }
    }

    else{
        include '../app/source/index.php';
    }
?>