<section class="dc__categories">

    <div class="container">


        @php
            $categories = [
                [
                    'text'=> 'Digital Comics',
                    'src'=> asset('assets/img/buy-comics-digital-comics.png'),
                    'link'=> '#'
                ],
                [
                    'text'=> 'Dc Merchandise',
                    'src'=> asset('assets/img/buy-comics-merchandise.png'),
                    'link'=> '#'
                ],
                [
                    'text'=> 'Subscription',
                    'src'=> asset('assets/img/buy-comics-subscriptions.png'),
                    'link'=> '#'
                ],
                [
                    'text'=> 'Comic Shop Locator',
                    'src'=> asset('assets/img/buy-comics-shop-locator.png'),
                    'link'=> '#'
                ],
                [
                    'text'=> 'Dc Power Visa',
                    'src'=> asset('assets/img/buy-dc-power-visa.svg'),
                    'link'=> '#'
                ]
            ]                
        @endphp

        <ul class="categories__wrapper">

            @foreach ($categories as $category)

            <li class="categories__item">
                <a href="{{ $category['link'] }}">
                    <img src="{{ $category['src'] }}">
                    <p>{{ $category['text'] }}</p>
                
                </a>
            </li>
                
            @endforeach

        </ul>
    </div>
    
</section>