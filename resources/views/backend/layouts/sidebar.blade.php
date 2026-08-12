<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark" href="{{ route('admin.dashboard') }}" aria-label="adminHMD dashboard">
            <span class="brand-icon">
                <img class="" src="{{ asset('favicon.ico') }}" alt="Poolito icon">
            </span>
            <span class="brand-copy">
                <span class="brand-title">Poolito Admin</span>
                <span class="brand-subtitle">Admin Template</span>
            </span>
        </a>
    </div>

    <nav class="sidebar-nav">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' :''}}" href="{{ route('admin.dashboard') }}" aria-current="page">
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text">Dashboard</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.users') ? 'active' :''}}" href="{{ route('admin.users') }}">
            <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
            <span class="nav-text">Users</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.profile') ? 'active' :''}}" href="{{ route('admin.profile') }}">
            <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
            <span class="nav-text">Profile</span>
        </a>

        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.services', 'admin.service_add'])]) href="{{ route('admin.services') }}">
            <span class="nav-icon">
                <i class="bi bi-tools"></i>
            </span>
            <span class="nav-text">Service</span>
        </a>

        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.blogs', 'admin.create_blog'])]) href="{{ route('admin.blogs') }}">
            <span class="nav-icon">
                <i class="bi bi-journal-text"></i>
            </span>
            <span class="nav-text">Blogs</span>
        </a>


        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.team_members', 'admin.member_add'])]) href="{{ route('admin.team_members') }}">
            <span class="nav-icon">
                <i class="bi bi-people"></i>
            </span>
            <span class="nav-text">Team</span>
        </a>

        <a @class(['nav-link', 'active'=> request()->routeIs(['admin.portfolios', 'admin.create_portfolio'])]) href="{{ route('admin.portfolios') }}">
            <span class="nav-icon">
                <i class="bi bi-briefcase"></i>
            </span>
            <span class="nav-text">Portfolio</span>
        </a>

        <a @class(['nav-link', 'active'=> request()->routeIs(['message.index'])]) href="{{ route('message.index') }}">
            <span class="nav-icon">
                <i class="bi bi-chat-text"></i>
            </span>
            <span class="nav-text">Message</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.components') ? 'active' :''}}" href="{{ route('admin.components') }}">
            <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
            <span class="nav-text">Components</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.alerts') ? 'active' :''}}" href="{{ route('admin.alerts') }}">
            <span class=" nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
            <span class="nav-text">Alerts</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.modals') ? 'active' :''}}" href="{{ route('admin.modals') }}">
            <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
            <span class="nav-text">Modals</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.settings') ? 'active' :''}}" href="{{ route('admin.settings') }}">
            <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
            <span class="nav-text">Settings</span>
        </a>

        <a class="nav-link" href="/admin/blank">
            <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
            <span class="nav-text">Blank Page</span>
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