@extends('main.layouts.app')

@section('title', $post->title.' - Anup Shrestha')


@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h3>{{$post->title}}</h3>
            <p class="text-muted">{{Carbon\Carbon::parse($post->published_at)->isoFormat('LL')}} |
                {{Carbon\Carbon::parse($post->published_at)->diffForHumans()}} | Views -
                {{$post->views}}</p>
            <img src="{{ asset('storage/'.$post->featured_image_path) }}" alt="" class="img-fluid my-4"
                style="max-height: 500px; width: 100%; object-fit: contain">
            {!! $post->content !!}
        </div>
        <div class="col-md-3">
            <x-sidebar :posts='$posts' />
        </div>
    </div>
</div>
@endsection