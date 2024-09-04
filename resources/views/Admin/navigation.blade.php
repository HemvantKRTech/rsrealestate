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
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-folder"></i> City Details
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{route('cities.create')}}">Add City</a></li>
                <li><a class="dropdown-item" href="{{route('cities.all')}}">All City</a></li>
                <li><a class="dropdown-item" href="{{route('sectore.form')}}">Add Sector</a></li>
                <li><a class="dropdown-item" href="{{route('sector.all')}}">All Sector</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-folder"></i> Property Type
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{route('propertytype.create')}}">Add property Type</a></li>
                <li><a class="dropdown-item" href="{{route('propertytype.all')}}">All property Type</a></li>
                
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-folder"></i> Properties
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{route('newproperty.create')}}">Add New Property</a></li>
                <li><a class="dropdown-item" href="#">All Property</a></li>
                
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-folder"></i> Projects
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{route('newproject.create')}}">Add New Project</a></li>
                <li><a class="dropdown-item" href="#">All Project</a></li>
                
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('admin.inquiries')}}">
                <i class="bi bi-house"></i> New Enquiry
            </a>
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