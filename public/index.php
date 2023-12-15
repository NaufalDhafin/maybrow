<?php 
    require '../app/init.php';
    head();

    if(isset($_GET['page'])){
        $pages = $_GET['page'];
        if($pages == 'beranda'){
            beranda();
        }

        elseif($pages == 'penghuni'){
            penghuni();
        }

        else{
            beranda();
        }
    }
    
    else{
        beranda();
    }