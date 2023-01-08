<footer id="footer">
    <div class="container">
        <div class="footer--wrapper flex-row">
            <div class="footer--col footer--col-content">
                <div class="footer--logo">
                    <a href="#">
                        <img src="/images/logo.svg" alt="{{ $title }}">
                    </a>
                </div>
                <div class="footer--desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuco laboris nisi ut aliquip veniam, quis nostrud exercitation ullamco in voluptate velit.</p>
                </div>
                <div class="footer--social-links">
                    <ul>
                        <li class="facebook--icon">
                            <a href="#">Facebook</a>
                        </li>
                        <li class="twitter--icon">
                            <a href="#">Twitter</a>
                        </li>
                        <li class="instagram--icon">
                            <a href="#">Instagram</a>
                        </li>
                        <li class="youtube--icon">
                            <a href="#">Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer--col">
                <div class="footer--col-header">
                    <h3>Services</h3>
                </div>
                <div class="footer-col-menu">
                    <ul>
                        <li>
                            <a href="#">Hire Freelancer</a>
                        </li>
                        <li>
                            <a href="#">Resume Writing</a>
                        </li>
                        <li>
                            <a href="#">Resume Editin</a>
                        </li>
                        <li>
                            <a href="#">Resume Help</a>
                        </li>
                        <li>
                            <a href="#">Linkedin Resume</a>
                        </li>
                        <li>
                            <a href="#">Cover Letter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer--col">
                <div class="footer--col-header">
                    <h3>Information</h3>
                </div>
                <div class="footer-col-menu">
                    <ul>
                        <li>
                            <a href="#">Career Advice</a>
                        </li>
                        <li>
                            <a href="#">Career Hub</a>
                        </li>
                        <li>
                            <a href="#">Resume Builder</a>
                        </li>
                        <li>
                            <a href="#">Question & Answers</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer--col">
                <div class="footer--col-header">
                    <h3>Company</h3>
                </div>
                <div class="footer-col-menu">
                    <ul>
                        <li class="{{ $activeLink == 'about' ? 'active' : '' }}">
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li class="{{ $activeLink == 'faq' ? 'active' : '' }}">
                            <a href="{{ route('faq') }}">Faq</a>
                        </li>
                        <li class="{{ $activeLink == 'contact' ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Contacts</a>
                        </li>
                        <li class="{{ $activeLink == 'privacy-policy' ? 'active' : '' }}">
                            <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        </li>
                        <li class="{{ $activeLink == 'terms-conditions' ? 'active' : '' }}">
                            <a href="{{ route('terms-conditions') }}">Terms & Conditions</a>
                        </li>
                        <li class="{{ $activeLink == 'refund-policy' ? 'active' : '' }}">
                            <a href="{{ route('refund-policy') }}">Refund Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="mobileMenuOverlay"></div>
<div class="mobileMenu">
    <nav>
        <ul>
            <li class="{{ $activeLink == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="{{ $activeLink == 'our-process' ? 'active' : '' }}">
                <a href="{{ route('our-process') }}">Our Process</a>
            </li>
            <li class="{{ $activeLink == 'services' ? 'active' : '' }}">
                <a href="{{ route('services') }}">Services</a>
            </li>
            <li class="{{ $activeLink == 'pricing' ? 'active' : '' }}">
                <a href="{{ route('pricing') }}">Pricing</a>
            </li>
            <li class="{{ $activeLink == 'about' ? 'active' : '' }}">
                <a href="{{ route('about') }}">About</a>
            </li>
            <li class="{{ $activeLink == 'reviews' ? 'active' : '' }}">
                <a href="{{ route('reviews') }}">Reviews</a>
            </li>
            <li class="{{ $activeLink == 'contact' ? 'active' : '' }}">
                <a href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </nav>
</div>