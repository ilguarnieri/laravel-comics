<header>
    <section class="container" :class="hamburgerMenu ? 'p-fix' : ''">

        <div class="menu-wrapper ">
            <!-- logo -->
            <figure class="menu-logo">
                <img src="{{ asset('assets/img/dc-logo.png') }}" alt="logo">
            </figure>

            <!-- menu -->
            <div class="menu-link">
                <ul>
                    <li class="nav-item"><a href="">Characters</a></li>
                    <li class="nav-item active"><a href="/">Comics</a></li>
                    <li class="nav-item"><a href="">Movies</a></li>
                    <li class="nav-item"><a href="">TV</a></li>
                    <li class="nav-item"><a href="">Games</a></li>
                    <li class="nav-item"><a href="">Collectibles</a></li>
                    <li class="nav-item"><a href="">Videos</a></li>
                    <li class="nav-item"><a href="">Fans</a></li>
                    <li class="nav-item"><a href="">News</a></li>
                    <li class="nav-item"><a href="">Shop</a></li>
                </ul> 
            </div>
            
        </div>
    </section>
</header>