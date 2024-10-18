<style>
    .sidebar {
        transition: transform 0.3s ease;
    }
</style>

<div class="navbar bg-gray-800 text-white p-4 flex items-center justify-between">
    <span class="cursor-pointer text-xl mr-4" onclick="toggleSidebar()">☰</span>
    <h1 class="text-2xl font-semibold">GAMES</h1>
    
    <form method="GET" action="" class="flex gap-2 ml-auto">
        <input name="search" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cari game..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>" />
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Search</button>
    </form>
</div>

<div class="sidebar bg-gray-700 text-white fixed top-0 left-0 h-full w-48 p-4 transform -translate-x-full" id="sidebar">
    <ul class="space-y-4">
        <li><a href="fatah" class="block py-2 px-4 hover:bg-gray-600 rounded <?php echo isset($_GET["route"]) && $_GET["route"] == 'fatah' ? 'active': ''; ?>">Fatah</a></li>
        <li><a href="arya" class="block py-2 px-4 hover:bg-gray-600 rounded <?php echo isset($_GET["route"]) && $_GET["route"] == 'arya' ? 'active': ''; ?>">Arya</a></li>
        <li><a href="azri" class="block py-2 px-4 hover:bg-gray-600 rounded <?php echo isset($_GET["route"]) && $_GET["route"] == 'azri' ? 'active': ''; ?>">Azri</a></li>
        <li><a href="aurandy" class="block py-2 px-4 hover:bg-gray-600 rounded <?php echo isset($_GET["route"]) && $_GET["route"] == 'aurandy' ? 'active': ''; ?>">Aurandy</a></li>
        <li><a href="dani" class="block py-2 px-4 hover:bg-gray-600 rounded <?php echo isset($_GET["route"]) && $_GET["route"] == 'dani' ? 'active': ''; ?>">Dani</a></li>
        <li><a href="majid" class="block py-2 px-4 hover:bg-gray-600 rounded <?php echo isset($_GET["route"]) && $_GET["route"] == 'majid' ? 'active': ''; ?>">Majid</a></li>
        <li><a href="michael" class="block py-2 px-4 hover:bg-gray-600 rounded <?php echo isset($_GET["route"]) && $_GET["route"] == 'michael' ? 'active': ''; ?>">Michael</a></li>
        <li><a href="rohim" class="block py-2 px-4 hover:bg-gray-600 rounded <?php echo isset($_GET["route"]) && $_GET["route"] == 'rohim' ? 'active': ''; ?>">Rohim</a></li>
    </ul>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    }

   
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar');
        const navbar = document.querySelector('.navbar');
        const isClickInsideSidebar = sidebar.contains(event.target);
        const isClickInsideNavbar = navbar.contains(event.target);
        
        if (!isClickInsideSidebar && !isClickInsideNavbar) {
            sidebar.classList.add('-translate-x-full');
        }
    });
</script>
