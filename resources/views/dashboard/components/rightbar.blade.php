<div class="right-section sticky">
    <div class="nav">
        <button id="menu-btn">
            <span class="material-icons-sharp"> menu </span>
        </button>
        <div class="dark-mode">
            <span class="material-icons-sharp active"> light_mode </span>
            <span class="material-icons-sharp"> dark_mode </span>
        </div>

        <div class="profile">
            <div class="info">
                <p>Hey, <b>Admin</b></p>

            </div>

        </div>
    </div>
    <!-- End of Nav -->

    <div class="user-profile">
        <div class="logo">
            <img src="{{ asset('assets/icons/logo_sekolah.png') }}" />
            <h2 class="text-lg font-bold">LVX CINEMA</h2>
            <p>Fullstack Web Developer</p>
        </div>
    </div>

    <div class="reminders">
        <div class="header">
            <h2>Reminders</h2>
            <span class="material-icons-sharp"> notifications_none </span>
        </div>

        <div class="notification">
            <div class="icon">
                <span class="material-icons-sharp"> volume_up </span>
            </div>
            <div class="content">
                <div class="info">
                    <h3>Workshop</h3>
                    <small class="text_muted"> 08:00 AM - 12:00 PM </small>
                </div>
                <span class="material-icons-sharp"> more_vert </span>
            </div>
        </div>

        <div class="notification deactive">
            <div class="icon">
                <span class="material-icons-sharp"> edit </span>
            </div>
            <div class="content">
                <div class="info">
                    <h3>Workshop</h3>
                    <small class="text_muted"> 08:00 AM - 12:00 PM </small>
                </div>
                <span class="material-icons-sharp"> more_vert </span>
            </div>
        </div>

        <a href="/dashboard/movie/create">
            <div class="notification add-reminder">
                <div>
                    <span class="material-icons-sharp"> add </span>
                    <h3>Tambahkan Data Movie</h3>
                </div>
            </div>
        </a>
    </div>
</div>
