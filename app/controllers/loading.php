<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <!-- LINK -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="app/source/responsive.css">
    <!-- SCRIPT -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php 
        if(isset($_GET['pages'])){
            $pages = $_GET['pages'];
            if($pages == 'penghuni'){
                $load = 'Penghuni';
                echo '<meta http-equiv="refresh" content="2;../../public/penghuni.php">';
            }
        }
        else{
            header("location:../../public/");
        }
    ?>
    <div class="load">
        <span class="loading loading-infinity loading-lg"></span>
        <p class="pesan">Mengambil Data <?= $load?>...</p>
    </div>
    <style>
        .navbar {
            position: fixed;
            z-index: 1;
        }

        .load {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: fixed;
            z-index: 0;
        }

        .loading {
            width: 150px;
            margin-bottom: -30px;
        }

        .pesan {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 2px;
            color: white;
        }
    </style>