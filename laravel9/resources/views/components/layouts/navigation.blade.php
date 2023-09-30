<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('posts.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
