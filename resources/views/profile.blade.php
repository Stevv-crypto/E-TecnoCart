<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-TechnoCart</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-white">
    <div class="home-page relative">
        <header class="header">
            <div class="top-header"></div>
            <div class="navbar flex justify-between items-center bg-[#b0cee3] px-8 py-3">
                <div class="logo font-bold text-lg ml-6">E-TechnoCart</div>

                <nav class="menu flex gap-8 mr-16">
                    <a href="#" class="text-black text-base hover:text-gray-700 hover:underline font-medium">Home</a>
                    <a href="#" class="text-black text-base hover:text-gray-700 hover:underline font-medium">Contact</a>
                    <a href="#" class="text-black text-base hover:text-gray-700 hover:underline font-medium">About</a>
                </nav>

                <div class="actions flex items-center gap-16 ml-24">
                    <div class="search-box relative flex items-center bg-[#e8dedd] rounded px-3 py-1">
                        <input type="text" id="search" placeholder="What are you looking for?"
                            class="bg-transparent border-none text-sm placeholder-gray-500 w-48 px-2 py-1 focus:outline-none" />
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
        <div class="account-dropdown absolute right-6 top-20 bg-gray-300/50 border border-gray-300 rounded-lg w-52 shadow-lg z-50 hidden"
            id="accountDropdown">
            <div class="option px-4 py-3 hover:bg-gray-100">
                <a href="profile.php" class="flex items-center gap-3 text-gray-800 text-sm ">
                    <i class='bx bx-user'></i> <span>Manage My Account</span>
                </a>
            </div>
            <div class="option px-4 py-3 hover:bg-gray-100">
                <a href="my-orders.php" class="flex items-center gap-3 text-gray-800 text-sm">
                    <i class='bx bxl-shopify'></i> <span>My Order</span>
                </a>
            </div>
            <div class="option px-4 py-3 hover:bg-gray-100">
                <a href="logout.php" class="flex items-center gap-3 text-red-800 text-sm">
                    <i class='bx bx-log-out'></i> <span>Logout</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Wrapper Utama untuk Grid 2 Kolom -->
    <div class="flex min-h-screen">
        <!-- Sidebar di Kiri -->
        <div class="w-1/3 flex flex-col mt-12 justify-start items-center gap-10 pl-10">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-3">
                <a href="home.html" class="text-black hover:underline opacity-50">Home</a>
                <div class="h-4 border-l border-gray-500 opacity-70 rotate-45"></div>
                <a href="manageaccount.html" class="text-black hover:underline">My Account</a>
            </div>

            <!-- Menu Sections -->
            <div class="flex flex-col items-start gap-4">
                <!-- Manage Account -->
                <div>
                    <span class="text-black font-semibold">Manage My Account</span>
                    <a href="Profile" class="text-blue-500 hover:underline block">My Profile</a>
                </div>

                <!-- Orders -->
                <div>
                    <span class="text-black font-semibold">My Orders</span>
                    <a href="OrderList" class="text-blue-500 hover:underline block">List Order</a>
                </div>
            </div>
        </div>

        <!-- Form di Kanan -->
        <div class="w-2/3">
            <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-md rounded-xl">
                <h2 class="text-2xl font-bold mb-6 text-blue-300">Edit Your Profile</h2>
                <form class="space-y-6">
                    <!-- First Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="firstName" class="mt-1 block w-full bg-[#e8dedd] px-3 py-1"
                                placeholder="Astore" />
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="lastName" class="mt-1 block w-full bg-[#e8dedd] px-3 py-1"
                                placeholder="Mastore" />
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email" class="mt-1 block w-full bg-[#e8dedd] px-3 py-1"
                                placeholder="etechnocart02@gmail.com" />
                        </div>
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input type="text" id="address" class="mt-1 block w-full bg-[#e8dedd] px-3 py-1"
                                placeholder="Jl. Ahmad Yani Batam Kota" />
                        </div>
                    </div>

                    <!-- Passwords -->
                    <div>
                        <h3 class="text-lg font-semibold mb-3 text-gray-800">Change Password</h3>
                        <div class="space-y-4">
                            <div>
                                <label for="currentPassword" class="block text-sm font-medium text-gray-700">Current
                                    Password</label>
                                <input type="password" id="currentPassword"
                                    class="mt-1 block w-full bg-[#e8dedd] px-3 py-1" />
                            </div>
                            <div>
                                <label for="newPassword" class="block text-sm font-medium text-gray-700">New
                                    Password</label>
                                <input type="password" id="newPassword"
                                    class="mt-1 block w-full bg-[#e8dedd] px-3 py-1" />
                            </div>
                            <div>
                                <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm
                                    Password</label>
                                <input type="password" id="confirmPassword"
                                    class="mt-1 block w-full bg-[#e8dedd] px-3 py-1" />
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end gap-6 mt-4">
                        <button type="button"
                            class="px-6 py-2 bg-gray-500 text-white font-medium rounded-md hover:bg-gray-600 transition">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-6 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="gap-6 mt-4 bg-gray-800 text-gray-300 py-10">
        <div class="container mx-auto px-4 md:px-0">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="ml-auto mr-auto w-fit">
                    <h2 class="text-white text-lg font-bold mb-4">E-TechnoCart</h2>
                    <p class="mb-2">Subscribe</p>
                    <p class="mb-4">Get 10% off your first order</p>
                    <div class="flex">
                        <input type="email" placeholder="Enter your email"
                            class="p-2 rounded-l bg-gray-700 text-gray-300 focus:outline-none">
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

            <footer class="bg-gray-800 text-gray-300 py-10">
                <div class="container mx-auto px-4 md:px-0">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    </div>
            </footer>


            <script>
                // Toggle dropdown
                function toggleDropdown() {
                    const dropdown = document.getElementById("accountDropdown");
                    dropdown.classList.toggle("hidden");
                }

                // Close dropdown when clicking outside
                window.addEventListener("click", function (e) {
                    const dropdown = document.getElementById("accountDropdown");
                    const profileIcon = document.querySelector(".bx-user");

                    if (!dropdown.contains(e.target) && !profileIcon.contains(e.target)) {
                        dropdown.classList.add("hidden");
                    }
                });
            </script>

</body>

</html>
