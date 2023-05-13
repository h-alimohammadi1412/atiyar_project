<section class="tns-carousel tns-controls-lg">
    <div class="swiper swiper_slider ">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach (\App\Models\Slider::all() as $slider)
                <div class="swiper-slide">
                  <a href="{{ $slider->link }}">
                    <img src="/storage/{{ $slider->img }}" style="height: 500px; object-fit: cover;">
                  </a>
                </div>
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        {{-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> --}}

        <!-- If we need scrollbar -->
    </div>


</section>

@section('script')
    <script>
        const swiper = new Swiper('.swiper_slider', {
            loop: true,
            effect: 'fade',
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true
            },
            autoplay: {
                delay: 5000
            },
        });
        const swiper1 = new Swiper('.swiper_specials', {
            slidesPerView: 6,
            spaceBetween: 50,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
@endsection
