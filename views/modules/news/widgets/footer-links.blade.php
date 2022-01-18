<ul class="list list-footer">
@foreach($posts as $post)
    <li><a href="{{ $post->url }}">{{ $post->title }}</a></li>
@endforeach
</ul>