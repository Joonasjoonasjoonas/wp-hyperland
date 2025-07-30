<a href="{{ $post->permalink }}" class="block group w-[469px] h-[744px] border border-gray-200 rounded-[4px] overflow-hidden bg-white transition hover:shadow-lg">
  @if ($post->thumbnail)
    <img 
      src="{{ $post->thumbnail }}" 
      alt="{{ $post->title }}" 
      class="w-full h-[264px] object-cover rounded-t-[4px] transition group-hover:scale-105 duration-300"
    >
  @endif

  <div class="px-6 pt-12 pb-16 flex flex-col justify-between" style="height: calc(744px - 264px);">
    <div>
      <h5 class="text-h5 font-bold mb-4 h-[88px] overflow-hidden leading-tight group-hover:underline">
        {{ $post->title }}
      </h5>
      <p class="text-body-m mb-10 text-gray-700">{!! wp_trim_words($post->content, 50) !!}</p>
    </div>
    <div class="text-see-more mt-auto flex items-center text-primary group-hover:underline">
      <span>Lue lisää</span>
      <span class="ml-4">
        <img src="@asset('resources/images/button-arrow.svg')" alt="">
      </span>
    </div>
  </div>
</a>
