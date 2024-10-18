<style>
        .sidebar {
            transition: transform 0.3s ease;
        }
    </style>
<div class="absolute top-4 right-4">
  <div class="relative">
    <input
      type="text"
      placeholder="Search..."
      class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
    />
    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
      <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m2.35-5.65a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0z"></path>
      </svg>
    </div>
  </div>
</div>

   
    <div class="navbar bg-gray-800 text-white p-4 flex items-center">
        <span class="cursor-pointer text-xl mr-4" onclick="toggleSidebar()">☰</span>
        <h1 class="text-2xl font-semibold">GAMES</h1>
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
    </script>