<?php
session_start();
?>
<div class="bg-black py-4 z-50 fixed w-full">
  <div class="flex mx-auto px-16 justify-between text-white">
    <span class="self-center font-sans font-bold text-2xl hover:text-red-700">EMPEK-EMPEK AR</span>
    <div class="flex self-center">
      <a class="px-2 text-xl hover:text-red-700" href="index.php">Home</a>
      <a class="px-3 text-xl hover:text-red-700" href="#">Produk</a>
      <?php
      if (isset($_SESSION['username'])) { 
        if(isset($_SESSION['role_id']) === 0) { ?>
          <a class="px-1 text-xl hover:text-red-700" href="#">Admin</a>
       <?php } ?>

        <div x-data="{ open: false }">
          <button @click="open = true" class="text-white pl-3 text-xl hover:text-red-700 focus:outline-none">   
            <?= $_SESSION['username'] ?>
          </button>
          <ul
              class="px-5 py-2 mr-4 rounded-lg block text-black absolute bg-white"
              x-show="open"
              @click.away="open = false"
          >
            <a href="#" class="block mb-1 hover:text-red-700">Profil</a>
            <a href="actions/logout.php" class="block hover:text-red-700">Logout</a>
          </ul>
      </div>
      <?php } else {?>
        <a class="pl-3 text-xl hover:text-red-700" href="login.php">Login</a>
      <?php }?>
    </div>
  </div>
</div>