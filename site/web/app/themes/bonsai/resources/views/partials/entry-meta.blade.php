<small class="text-muted"><time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time></small>
<p class="byline author vcard">
  <small>
    {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>
  </small>
</p>
