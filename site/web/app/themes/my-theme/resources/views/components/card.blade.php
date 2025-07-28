@php
  $image_url = get_the_post_thumbnail_url($post->ID, 'large');
@endphp

<div class="w-[469px] h-[744px] border border-gray-200 rounded-[4px] overflow-hidden bg-white">
  @if ($image_url)
    <img 
      src="{{ $image_url }}" 
      alt="{{ $post->post_title }}" 
      class="w-full h-[264px] object-cover rounded-t-[4px]"
    >
  @endif
  <div class="px-6 pt-12 pb-16 flex flex-col justify-between" style="height: calc(744px - 264px);">
    <div>
      <h5 class="text-h5 font-bold mb-4 h-[88px] overflow-hidden leading-tight">{{ $post->post_title }}</h5>
      <p class="text-body-m mb-10">{!! wp_trim_words($post->post_content, 50) !!}</p>
    </div>
    <a href="{{ get_permalink($post->ID) }}" class="text-see-more mt-auto flex items-center">
      <span>Lue lisää</span>
      <span class="ml-4">
        <img src="@asset('resources/images/button-arrow.svg')" alt="Arrow">
      </span>
    </a>
  </div>
</div>
