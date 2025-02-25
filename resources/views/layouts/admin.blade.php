<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <header>
        <h1>Admin Panel</h1>
        <!-- Add your navigation here -->
        <nav>
            <a href="{{ route('admin.services.index') }}">Services</a>
            <a href="{{ route('admin.counters.index') }}">Counters</a>
            <a href="{{ route('admin.banners.index') }}">Banners</a>
            <a href="{{ route('admin.skills.index') }}">Skills</a>
            <a href="{{ route('admin.educations.index') }}">Educations</a>
            <a href="{{ route('admin.experiences.index') }}">Experiences</a>
            <a href="{{ route('admin.clients.index') }}">clients</a>
            <a href="{{ route('admin.reviews.index') }}">reviews</a>
            <a href="{{ route('admin.contacts.index') }}">contacts</a>
            <a href="{{ route('admin.social_media.index') }}">social_media</a>
            <a href="{{ route('admin.projects.index') }}">projects</a>
            
            
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- Add your footer content here -->
    </footer>
    <!-- Add your JS files here -->
  
</body>

</html>
