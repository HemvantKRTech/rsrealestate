<style>
    body {
        font-family: 'Arial', sans-serif;
    }
    .sidebar {
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        background-color: #343a40;
        padding-top: 1rem;
        transition: all 0.3s;
    }
    .sidebar.collapsed {
        width: 0;
        overflow: hidden;
    }
    .sidebar .nav-link {
        color: #ffffff;
    }
    .sidebar .nav-link:hover {
        background-color: #495057;
    }
    .sidebar .nav-link i {
        margin-right: 10px;
    }
    .sidebar .dropdown-menu {
        background-color: #495057;
    }
    .content {
        margin-left: 250px;
        padding: 1rem;
        transition: all 0.3s;
    }
    .content.collapsed {
        margin-left: 0;
    }
</style>
<div class="sidebar bg-dark">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <i class="bi bi-house"></i> Home
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-folder"></i> Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{route('addservice')}}">Add Service</a></li>
                <li><a class="dropdown-item" href="{{route('allservice')}}">All Services</a></li>
                <li><a class="dropdown-item" href="#">Action 3</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-person"></i> Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-folder"></i> More
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action 1</a></li>
                <li><a class="dropdown-item" href="#">Action 2</a></li>
                <li><a class="dropdown-item" href="#">Action 3</a></li>
            </ul>
        </li>
    </ul>
</div>




<script>
    // JavaScript to toggle the sidebar visibility
    document.getElementById('toggleSidebar').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('collapsed');
        document.querySelector('.content').classList.toggle('collapsed');
    });
</script>