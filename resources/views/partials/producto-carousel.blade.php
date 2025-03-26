<div class="swiper-container h-96">
    <div class="swiper-wrapper">
        @foreach($imagenes as $imagen)
            <div class="swiper-slide flex items-center justify-center p-8">
                <img src="{{ asset('storage/' . $imagen) }}" 
                     alt="{{ $nombre }}" 
                     class="max-h-full max-w-full object-contain">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next bg-white bg-opacity-70 rounded-full p-2"></div>
    <div class="swiper-button-prev bg-white bg-opacity-70 rounded-full p-2"></div>
</div>
