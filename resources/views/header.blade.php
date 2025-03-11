<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><i class="flaticon-cross"></i> <span>Wisdom</span>
            <span>Church</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ url('events') }}" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="{{ url('sermons') }}" class="nav-link">Sermons</a></li>
                <li class="nav-item"><a href="{{ url('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
