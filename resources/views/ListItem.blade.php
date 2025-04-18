<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>List Item - E-TechnoCart</title>
  <!--<script src="/public/styles/tailwindcss3.4.1.js"></script> /public/styles/tailwindcss3.4.1.js-->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100"> <!--min-h-screen p-6-->
    <div class="home-page relative">
        <header class="header">
          <div class="top-header"></div>
          <div class="navbar flex justify-between items-center bg-[#b0cee3] px-8 py-3">
            <div class="logo font-bold text-lg ml-6">E-TechnoCart</div>
    
            <nav class="menu flex gap-8 mr-16">
              <a href="#" class="text-black text-base hover:text-gray-700 font-medium">Home</a>
              <a href="#" class="text-black text-base hover:text-gray-700 font-medium">Contact</a>
              <a href="#" class="text-black text-base hover:text-gray-700 font-medium">About</a>
            </nav>
    
            <div class="actions flex items-center gap-16 ml-24">
              <div class="search-box relative flex items-center bg-[#e8dedd] rounded px-3 py-1">
                <input
                  type="text"
                  id="search"
                  placeholder="What are you looking for?"
                  class="bg-transparent border-none text-sm placeholder-gray-500 w-48 px-2 py-1 focus:outline-none"
                />
                <i class='bx bx-search icon absolute right-2 text-base text-black'></i>
              </div>
    
              <div class="nav-icon flex items-center gap-6 text-xl text-black">
                <a href="keranjang.php"><i class='bx bx-cart-alt'></i></a>
                <a href="javascript:void(0);" onclick="toggleDropdown()"><i class='bx bx-user'></i></a>
              </div>
            </div>
          </div>
        </header>
    
        <!-- Akun Dropdown -->
        <div class="account-dropdown absolute right-6 top-20 bg-gray-300/50 border border-gray-300 rounded-lg w-52 shadow-lg z-50 hidden" id="accountDropdown">
          <div class="option px-4 py-3 hover:bg-gray-100">
            <a href="profile.php" class="flex items-center gap-3 text-gray-800 text-sm">
              <i class='bx bx-user'></i> <span>Manage My Account</span>
            </a>
          </div>
          <div class="option px-4 py-3 hover:bg-gray-100">
            <a href="my-orders.php" class="flex items-center gap-3 text-gray-800 text-sm">
              <i class='bx bxl-shopify'></i> <span>My Order</span>
            </a>
          </div>
          <div class="option px-4 py-3 hover:bg-gray-100">
            <a href="logout.php" class="flex items-center gap-3 text-gray-800 text-sm">
              <i class='bx bx-log-out'></i> <span>Logout</span>
            </a>
          </div>
        </div>
      </div>

  <div class="max-w-8xl mx-auto bg-white p-8 rounded-xl shadow"> <!--max-w-6xl mx-auto bg-white p-6 rounded-xl-->
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Barang Elektronik</h1>

    <div class="overflow-x-auto">
      <table class="min-w-full border border-gray-200 text-sm text-left text-gray-700">
        <thead class="bg-blue-100 text-gray-700 uppercase text-xs">
          <tr>
            <th class="px-4 py-3 border">No</th>
            <th class="px-4 py-3 border">Nama Barang</th>
            <th class="px-4 py-3 border">Kategori</th>
            <th class="px-4 py-3 border">Harga</th>
            <th class="px-4 py-3 border">Stok</th>
            <th class="px-4 py-3 border">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Item Rows -->
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">1</td>
            <td class="px-4 py-2 border">Kulkas LG</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 3.500.000</td>
            <td class="px-4 py-2 border">10</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">2</td>
            <td class="px-4 py-2 border">TV Samsung 32"</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 2.000.000</td>
            <td class="px-4 py-2 border">8</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">3</td>
            <td class="px-4 py-2 border">Mesin Cuci Sharp</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 2.500.000</td>
            <td class="px-4 py-2 border">6</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">4</td>
            <td class="px-4 py-2 border">AC Panasonic</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 4.200.000</td>
            <td class="px-4 py-2 border">7</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">5</td>
            <td class="px-4 py-2 border">Microwave Electrolux</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 1.800.000</td>
            <td class="px-4 py-2 border">15</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">6</td>
            <td class="px-4 py-2 border">Blender Philips</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 650.000</td>
            <td class="px-4 py-2 border">12</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">7</td>
            <td class="px-4 py-2 border">Rice Cooker Miyako</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 350.000</td>
            <td class="px-4 py-2 border">20</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">8</td>
            <td class="px-4 py-2 border">Dispenser Aqua</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 890.000</td>
            <td class="px-4 py-2 border">9</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">9</td>
            <td class="px-4 py-2 border">Setrika Maspion</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 250.000</td>
            <td class="px-4 py-2 border">18</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">10</td>
            <td class="px-4 py-2 border">Vacuum Cleaner Hitachi</td>
            <td class="px-4 py-2 border">Elektronik</td>
            <td class="px-4 py-2 border">Rp 1.200.000</td>
            <td class="px-4 py-2 border">4</td>
            <td class="px-4 py-2 border">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <footer class="bg-gray-800 text-gray-300 py-10">
    <div class="container mx-auto px-4 md:px-0">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="ml-auto mr-auto w-fit">
                <h2 class="text-white text-lg font-bold mb-4">E-TechnoCart</h2>
                <p class="mb-2">Subscribe</p>
                <p class="mb-4">Get 10% off your first order</p>
                <div class="flex">
                    <input type="email" placeholder="Enter your email" class="p-2 rounded-l bg-gray-700 text-gray-300 focus:outline-none">
                    <button class="p-2 bg-gray-600 text-white rounded-r"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div>
                <h2 class="text-white text-lg font-bold mb-4">Support</h2>
                <p>Jl. Ahmad Yani</p>
                <p>Batam Kota, Kota</p>
                <p>Batam, Kepulauan</p>
                <p>Riau, Indonesia</p>
                <p class="mt-4">etechnocart02@gmail.com</p>
                <p>+628311590529</p>
            </div>
            <div>
                <h2 class="text-white text-lg font-bold mb-4">Account</h2>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:underline">My Account</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Login / Register</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Cart</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Wishlist</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Shop</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-white text-lg font-bold mb-4">Quick Link</h2>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Terms Of Use</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">FAQ</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center text-gray-500 mt-8">
            <p>&copy; Copyright E-TechnoCart</p>
        </div>
    </div>
</footer>

  <script>
    // Toggle dropdown
    function toggleDropdown() {
      const dropdown = document.getElementById("accountDropdown");
      dropdown.classList.toggle("hidden");
    }

    // Close dropdown when clicking outside
    window.addEventListener("click", function(e) {
      const dropdown = document.getElementById("accountDropdown");
      const profileIcon = document.querySelector(".bx-user");

      if (!dropdown.contains(e.target) && !profileIcon.contains(e.target)) {
        dropdown.classList.add("hidden");
      }
    });
    </script>
</body>
</html>
