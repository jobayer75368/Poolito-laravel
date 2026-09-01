<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark" href="{{ route('admin.dashboard') }}" aria-label="adminHMD dashboard">
            <span class="brand-icon">
                <img class="" src="{{ asset('favicon.ico') }}" alt="Poolito icon">
            </span>
            <span class="brand-copy">
                <span class="brand-title">Poolito Admin</span>
                <span class="brand-subtitle">Admin Panel</span>
            </span>
        </a>
    </div>

    <nav class="sidebar-nav">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' :''}}" href="{{ route('admin.dashboard') }}" aria-current="page">
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text">Dashboard</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.user.index','admin.user.show','admin.user.edit','admin.user.inaccessible') ? 'active' :''}}" href="{{Auth::user()->role=='admin'? route('admin.user.index'):route('admin.user.inaccessible') }}">
            <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
            <span class="nav-text">Users</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.profile.show','admin.profile.edit') ? 'active' :''}}" href="{{ route('admin.profile.show') }}">
            <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
            <span class="nav-text">Profile</span>
        </a>

        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.service.index', 'admin.service.create','admin.service.edit','admin.service.show'])]) href="{{ route('admin.service.index') }}">
            <span class="nav-icon">
                <i class="bi bi-tools"></i>
            </span>
            <span class="nav-text">Service</span>
        </a>

        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.blog.index', 'admin.blog.create','admin.blog.edit','admin.blog.show'])]) href="{{ route('admin.blog.index') }}">
            <span class="nav-icon">
                <i class="bi bi-journal-text"></i>
            </span>
            <span class="nav-text">Blogs</span>
        </a>


        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.team.index', 'admin.team.create','admin.team.show','admin.team.edit'])]) href="{{ route('admin.team.index') }}">
            <span class="nav-icon">
                <i class="bi bi-people"></i>
            </span>
            <span class="nav-text">Team</span>
        </a>

        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.portfolio.index', 'admin.portfolio.create','admin.portfolio.show','admin.portfolio.edit'])]) href="{{ route('admin.portfolio.index') }}">
            <span class="nav-icon">
                <i class="bi bi-briefcase"></i>
            </span>
            <span class="nav-text">Portfolio</span>
        </a>

        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.message.index','admin.message.show'])]) href="{{ route('admin.message.index') }}">
            <span class="nav-icon">
                <i class="bi bi-chat-text"></i>
            </span>
            <span class="nav-text">Message</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.settings') ? 'active' :''}}" href="{{ route('admin.settings') }}">
            <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
            <span class="nav-text">Settings</span>
        </a>
    </nav>

    <div class="sidebar-user">
        <img class=" avatar-md sidebar-user-avatar" src="{{ asset('backend/assets/images/avatar/avatar.jpg') }}" alt="Admin">
        <strong>Admin</strong>
        <small>Active Workspace</small>
    </div>

    <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
    </div>
</aside>