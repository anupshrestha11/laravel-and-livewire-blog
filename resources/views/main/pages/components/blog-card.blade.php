@foreach ($postsShow as $post)
<div class="my-4">
    <a href="{{ route('slug', ['slug'=>$post->slug]) }}" class="h5 text-black" style="color: black">{{$post->title}}</a>
    <p class="text-muted">{{Carbon\Carbon::parse($post->published_at)->diffForHumans()}} | <a href="#"
            class="text-muted" style="color: black">Commets</a></p>
    <p>{{$post->excerpt}}</p>
    <img src="{{ asset('storage/'.$post->featured_image_path) }}" alt="" class="img-fluid "
        style="max-height: 250px; width: 100%; object-fit: contain">
</div>
@endforeach