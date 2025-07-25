<section class="bg-video-bg h-screen flex items-center justify-center relative">

  <div class="relative w-[939px] h-[626px]">

    {{-- Vektorikuva vasemmalla (leikkaa sisään) --}}
    <img src="@asset('resources/images/video-vector.svg')"
         alt="Vector Left"
         class="absolute left-[-250px] top-1/2 -translate-y-1/2 w-[400px] z-0 pointer-events-none"

    {{-- Vektorikuva oikeassa yläkulmassa --}}
    <img src="@asset('resources/images/video-vector2.svg')"
         alt="Vector Top Right"
         class="absolute right-[-120px] top-[-40px] w-[220px] z-0 pointer-events-none">

    {{-- Vektorikuva oikeassa alakulmassa --}}
    <img src="@asset('resources/images/video-vector-bottomright.svg')"
         alt="Vector Bottom Right"
         class="absolute right-[-100px] bottom-[-30px] w-[180px] z-0 pointer-events-none">

    {{-- Itse video (tai kuva, jos kuvakaappaus) --}}
    <iframe class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full aspect-video z-10"
            src="https://www.youtube.com/embed/dQw4w9WgXcQ"
            title="Hyperland Video" frameborder="0"
            allowfullscreen></iframe>

  </div>

</section>
