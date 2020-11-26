<!--Block 07: Brands-->
<div class="brand-slide sm-margin-top-100px background-fafafa xs-margin-top-80px xs-margin-bottom-80px">
    <div class="container">
        <ul  class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":true,"autoplaySpeed":500, "autoplay": true, "slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 1}}]}'>
                @foreach ($tabbrand as $br)
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                    <figure><img style="-webkit-filter: grayscale(50%); /* Safari 6.0 - 9.0 */
                        filter: grayscale(50%);" src="{{asset('hinhthuonghieu')}}/{{$br->img_thuonghieu}}" width="214" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
                @endforeach
        </ul>
    </div>
</div>