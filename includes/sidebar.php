<div class="col-2 border-end bg-dark-subtle min-vh-100 p-4">
    <ul class="nav nav-pills flex-column gap-1">
        <li class="nav-item">
            <a href="fatah" class="nav-link rounded-1 <?php echo isset($_GET["route"]) && $_GET["route"] == 'fatah' ? 'active' : 'text-light-emphasis'; ?>">
                <i class="bi bi-house-door"></i> Fatah <?php echo isset($_GET["route"]) && $_GET["route"] ?>
            </a>
        </li>
        <li class="nav-item">
            <a href="arya" class="nav-link <?php echo isset($_GET["route"]) && $_GET["route"] == 'arya' ? 'active' : 'text-light-emphasis'; ?>">
                <i class="bi bi-person"></i> Arya
            </a>
        </li>
        <li class="nav-item">
            <a href="azri" class="nav-link <?php echo isset($_GET["route"]) && $_GET["route"] == 'azri' ? 'active' : 'text-light-emphasis'; ?>">
                <i class="bi bi-person"></i> Azri
            </a>
        </li>
        <li class="nav-item">
            <a href="dani" class="nav-link <?php echo isset($_GET["route"]) && $_GET["route"] == 'dani' ? 'active' : 'text-light-emphasis'; ?>">
                <i class="bi bi-person"></i> Dani
            </a>
        </li>
        <li class="nav-item">
            <a href="majid" class="nav-link <?php echo isset($_GET["route"]) && $_GET["route"] == 'majid' ? 'active' : 'text-light-emphasis'; ?>">
                <i class="bi bi-person"></i> Majid
            </a>
        </li>
        <li class="nav-item">
            <a href="michael" class="nav-link <?php echo isset($_GET["route"]) && $_GET["route"] == 'michael' ? 'active' : 'text-light-emphasis'; ?>">
                <i class="bi bi-person"></i> Michael
            </a>
        </li>
        <li class="nav-item">
            <a href="rohim" class="nav-link <?php echo isset($_GET["route"]) && $_GET["route"] == 'rohim' ? 'active' : 'text-light-emphasis'; ?>">
                <i class="bi bi-person"></i> Rohim
            </a>
        </li>
    </ul>
</div>