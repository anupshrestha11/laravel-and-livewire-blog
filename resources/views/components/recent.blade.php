<div>
    <p class="text-uppercase mt-3 font-weight-bold">Recent Posts</p>
    <div class="list-group list-group-flush">
        @foreach ($posts as $post)
        <a href="{{ route('slug', ['slug'=>$post->slug]) }}"
            class="list-group-item list-group-item-action  p-2 @if (Request::is('blogs/'.$post->slug)) active @endif"
            style="font-size: .9rem">
            {{$post->title}}
        </a>
        @if ($loop->index == 4)
        @break
        @endif
        @endforeach
        @for ($i = 0; $i < 5; $i++) @endfor </div> </div>