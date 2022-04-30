<footer>

    <section class="footer__body">
        <div class="container">

            <!-- first col -->
            <div class="col">
                <div class="widget">
                    <h4 class="widget__title">Dc Comics</h4>
                    <ul class="widget__menu">
                        <li>
                            <a href="#">
                                Characters
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Comics
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Movies
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tv
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Games
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                News
                            </a>
                        </li>
                    </ul>
                </div>

                 <div class="widget">
                    <h4 class="widget__title">Shop</h4>
                    <ul class="widget__menu">
                        <li>
                            <a href="#">
                                Shop DC
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Shop DC Collectibles
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- second col -->
            <div class="col">
                <div class="widget">
                    <h4 class="widget__title">DC</h4>
                    <ul class="widget__menu">
                        <li>
                            <a href="#">
                                Terms Of use
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy policy (New)
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Ad Choices
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Advertising
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jobs
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Subscriptions
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Talent Workshops
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                CPSC Certificates
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Ratings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Shop Help
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- third col -->
            <div class="col">
                <div class="widget">
                    <h4 class="widget__title">Sites</h4>
                    <ul class="widget__menu">
                        <li>
                            <a href="#">
                                DC
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                MAD Magazine
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Kids
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Universe
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                DC Power Visa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="rights__general">
                @include('componentes.rightsAG')
            </div>

        </div>
    </section>

    <section class="footer__social">
        <div class="container">
            <button class="btn-sign">
                Sign-up now!
            </button>

            <div class="link__social">
                <h4 class="link__title">Follow Us</h4>

                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/footer-facebook.png') }}" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/footer-twitter.png') }}" alt="twitter">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/footer-youtube.png') }}" alt="fyoutube">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/footer-pinterest.png') }}" alt="pinterest">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/footer-periscope.png') }}" alt="periscope">
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <section class="footer__rights">
        @include('componentes.rightsAG')
    </section>

</footer>