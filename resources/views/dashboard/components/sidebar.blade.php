<aside>
    <div class="toggle">
        <div class="logo">
            <img src="{{ asset('assets/icons/logo_sekolah.png') }}">
            <h2 class="text-xl font-bold">LVX<span class="danger">CINEMA</span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">
                close
            </span>
        </div>
    </div>

    <div class="sidebar">
        <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <span class="material-icons-sharp">
                dashboard
            </span>
            <h3>Dashboard</h3>
        </a>

        <a href="/dashboard/movie" class="{{ Request::is('dashboard/movie/*' || 'dashboard/movie') ? 'active' : '' }}">
            <span class="material-icons-sharp">
                insights
            </span>
            <h3>My Movies</h3>
        </a>


        <a href="/">
            <span class="material-icons-sharp">
                logout
            </span>
            <h3>Home</h3>
        </a>
    </div>
</aside>
