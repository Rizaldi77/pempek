<?php
session_start();
include('_partials/head.php');
include('_partials/header.php');
?>
<div class="flex bg-cover bg-center h-screen w-screen mt-100" style="background-image: url('../assets/image/background.png');">
    <div class="flex content-center items-center flex-wrap align-center h-screen w-screen text-center">
        <div class="m-auto">
            <span class="font-bold text-xl text-white align-center">MENYEDIAKAN BERBAGAI MACAM</span>
            <div class="-mt-4">
                <span class="font-bold text-5xl text-white align-center">EMPEK-EMPEK TENGIRI</span>
            </div>
            <div class="mt-3">
                <a href="list-pempek.php" class="btn text-white hover:text-red-500 hover:bg-transparent bg-red-700 font-semibold py-2 px-4 border border-red-700 text-2xl rounded">Lihat Produk</a>
            </div>
        </div>
    </div>
</div>
<?php
include('_partials/foot.php')
?>