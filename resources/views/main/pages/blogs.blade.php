@extends('main.layouts.app')

@section('title', 'Blogs - Anup Shrestha')


@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8">
            @include('main.pages.components.blog-card')
            <div class="d-flex justify-content-center align-items-center">
                {!! $postsShow->links('vendor.pagination.bootstrap-4') !!}
            </div>
        </div>
        <div class="col-md-4">
            <x-sidebar :posts='$posts' />
        </div>
    </div>
</div>
@endsection