<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><i class="flaticon-cross"></i> <span>SPRINGS OF</span>
            <span>RESTORATION CHURCH</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"
                        class="nav-link">Home</a></li>
                <li class="nav-item {{ request()->is('about*') ? 'active' : '' }}"><a href="{{ url('about') }}"
                        class="nav-link">About</a></li>
                <li class="nav-item {{ request()->is('events*') ? 'active' : '' }}"><a href="{{ url('events') }}"
                        class="nav-link">Events</a></li>
                <li class="nav-item {{ request()->is('sermons*') ? 'active' : '' }}"><a href="{{ url('sermons') }}"
                        class="nav-link">Sermons</a></li>
                <li class="nav-item {{ request()->is('prayerrequest*') ? 'active' : '' }}"><a
                        href="{{ url('prayerrequest') }}" class="nav-link">Prayer Request</a></li>
                <li class="nav-item {{ request()->is('contact*') ? 'active' : '' }}"><a href="{{ url('contact') }}"
                        class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
