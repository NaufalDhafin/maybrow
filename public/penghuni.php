<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghuni Kelas Terbang</title>
    <!-- LINK -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../app/source/responsive.css">
    <!-- SCRIPT -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="navbar bg-base-300">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52">
              <li><a>Beranda</a></li>
              <li><a>Penghuni</a></li>
            </ul>
          </div>
        </div>
        <div class="navbar-center">
          <a class="btn btn-ghost text-xl" id="title-lebar">Kelompok Kelas Terbang</a>
          <a class="btn btn-ghost text-xl" id="title-kecil">KKT</a>
        </div>
        <div class="navbar-end">
          <button class="btn btn-ghost btn-circle">
            <div class="indicator">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
              <span class="badge badge-xs badge-primary indicator-item"></span>
            </div>
          </button>
        </div>
    </div>
    <div id="batas1"></div>
    <div class="overflow-x-auto" style="width: 95%;">
        <table class="table bg-base-200">
            <div class="totalPenghuni bg-base-200" style="padding: 3px;width: 170px;text-align: center;border-radius: 5px;">
                Penghuni : 10 Orang.
            </div>
            <div id="batas2"></div>
          <!-- head -->
          <thead>
            <tr>
              <th style="font-size: 15px;color: rgb(196, 196, 196);">NAMA</th>
              <th style="text-align: center;font-size: 15px;color: rgb(196, 196, 196);">NIM</th>
              <th style="text-align: center;font-size: 15px;color: rgb(196, 196, 196);">KELAS</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              include '../app/controllers/database.php';
              include '../app/controllers/penghuni.php';
            ?>
          </tbody>
        </table>
      </div>