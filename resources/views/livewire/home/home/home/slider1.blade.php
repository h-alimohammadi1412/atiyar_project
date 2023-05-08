<section class="tns-carousel tns-controls-lg">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach (\App\Models\Slider::all() as $slider )
            
            <div class="swiper-slide">
                <img src="/storage/{{ $slider->img }}">
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
    
    <style>
        .swiper {
            width: 100%;
        }
        .swiper img{
            width: 100%;
        }
    </style>
       
    
</section>

@section('script')<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'
  
    const swiper = new Swiper('.swiper', {
  // Optional parameters
//   direction: 'vertical',
  loop: true,
  effect: 'fade',
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets : true
  },

//   Navigation arrows
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
  autoplay	: {
      delay	: 5000
  },
});
  </script>
    
@endsection