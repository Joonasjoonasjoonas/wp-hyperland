<div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col h-full">
  @if (has_post_thumbnail($post))
    <a href="{{ get_permalink($post) }}">
      {!! get_the_post_thumbnail($post, 'large', ['class' => 'w-full h-48 object-cover']) !!}
    </a>
  @endif

  <div class="p-6 flex flex-col justify-between flex-grow">
    <div>
      <h3 class="text-h5 mb-2">
        <a href="{{ get_permalink($post) }}">{{ get_the_title($post) }}</a>
      </h3>
      <p class="text-body-m mb-4">
        {{ wp_trim_words(get_the_excerpt($post), 20) }}
      </p>
    </div>

    <a href="{{ get_permalink($post) }}" class="btn-secondary self-start mt-auto">
      Lue lisää
    </a>
  </div>
</div>