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
            breakpoints: {
              // when window width is >= 320px
              320: {
                slidesPerView: 2,
                spaceBetween: 20
              },
              // when window width is >= 480px
              480: {
                slidesPerView: 3,
                spaceBetween: 30
              },
              // when window width is >= 640px
              900: {
                slidesPerView: 4,
                spaceBetween: 40
              },
              // when window width is >= 640px
              1000: {
                slidesPerView: 5,
                spaceBetween: 40
              },
              // when window width is >= 640px
              1300: {
                slidesPerView: 6,
                spaceBetween: 50
              }
            }
        });
        var featured_category = new Swiper(".featured_category", {
            slidesPerView: 3,
            grid: {
                rows: 2,
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination-featured_category",
                clickable: true,
            },
        });
    </script>
@endsection
