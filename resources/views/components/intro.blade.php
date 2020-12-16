<div>
    <h1 class="mt-4 mb-2">Anup's Blog</h1>
    {{-- <p class="text-muted">
        {{Carbon\Carbon::now('Asia/Kathmandu')->isoFormat('LL')}} |
    {{Carbon\Carbon::now('Asia/Kathmandu')->diffForHumans() }}
    </p> --}}
    <p class="content text-justify">
        Hi, I'm Anup Shrestha, I'm full-stack developer, with more than 2 years of web development experience.
        Currently, I'm living at Kathmandu, Nepal offering freelance job as full-stack developer. Thanks for visiting my
        blog
    </p>
    <p>
        Below are the most popular 🔥 blog posts from the last 30 days.
    </p>
    <p>
        <ol>
            @foreach ($posts as $post)
            <li>
                <a href="{{ route('slug', ['slug'=>$post->slug]) }}" class="text-black "
                    style="color: black">{{$post->title}}</a>
            </li>
            @endforeach



        </ol>
    </p>
    <p>
        More posts can be found on blog page
    </p>
    <p class="text-muted">
        Posted by: Anup Shrestha 😎
    </p>
</div>