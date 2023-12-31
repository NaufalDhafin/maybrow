<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Kelas Terbang</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.20/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<style>
  body{
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  #desktop{
    display: flex;
  }
  #mobile{
    display: none;
  }
  @media screen and (max-width:600px){
    #desktop{
      display: none;
    }
    #mobile{
      display: flex;
  }

  /* SOURCE */
  }
  .spasi{
    margin-bottom: 80px;
  }
  #fw90p{
    width: 90%;
  }
  #fw100p{
    width: 100%;
  }
</style>
<div class="navbar bg-base-200" style="position:fixed;z-index:1;">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-300 rounded-box w-52">
        <li><a href="?">Beranda</a></li>
        <li><a href="?page=tugas">Tugas</a></li>
        <li><a href="?page=penghuni">Penghuni</a></li>
      </ul>
    </div>
  </div>
  <div class="navbar-center">
    <a class="btn btn-ghost text-xl" id="desktop">Kelompok Kelas Terbang</a>
    <a class="btn btn-ghost text-xl" id="mobile">Kelas Terbang</a>
  </div>
  <div class="navbar-end">
    <button class="btn btn-ghost btn-circle">
      <div class="indicator">
        <img class="mask mask-hexagon-2 bg-base-300" style="width: 60px;" src="app/imgs/logo.png" />
      </div>
    </button>
  </div>
</div>