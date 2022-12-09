<header id="header">
    <div class="container">
        <div class="header--wrapper">
            <div class="header--logo">
                <a href="{{ route('home') }}">
                    <img src="/images/logo.svg" alt="{{ $title }}">
                </a>
            </div>
            <div class="header--nav">
                <nav>
                    <ul>
                        <li class="{{ $activeLink == 'home' ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="{{ $activeLink == 'our-process' ? 'active' : '' }}">
                            <a href="#">Our Process</a>
                        </li>
                        <li class="{{ $activeLink == 'services' ? 'active' : '' }}">
                            <a href="#">Services</a>
                        </li>
                        <li class="{{ $activeLink == 'pricing' ? 'active' : '' }}">
                            <a href="#">Pricing</a>
                        </li>
                        <li class="{{ $activeLink == 'about' ? 'active' : '' }}">
                            <a href="#">About</a>
                        </li>
                        <li class="{{ $activeLink == 'reviews' ? 'active' : '' }}">
                            <a href="#">Reviews</a>
                        </li>
                        <li class="{{ $activeLink == 'contact' ? 'active' : '' }}">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header--cta">
                <a href="#" class="btn">Upgrade My Resume</a>
            </div>
        </div>
    </div>
</header>