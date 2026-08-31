<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.html"><img src="{{ asset('/frontend/assets/img/logo-dark.svg') }}" alt="cleaning"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('services') }}">Service</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('blogs') }}">Blog</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('team_members')}}">Team</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('portfolio')}}">Portfolio</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>