@extends('dashboard.layouts.app')

@section('title', 'Posts | Dashboard')

@section('head')

@livewireStyles

@endsection


@section('content')
<div class="row">

    {{-- @if(session()->has('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"
        style="position: fixed; top: 75px; right:10px; z-index:1000">
        {{session('msg')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif --}}

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body">
            <a href="{{route('dashboard.posts.create')}}" class="btn btn-primary btn-rounded ">
                New Post
            </a>

            <div class="table-responsive">
                <livewire:post-table :posts="$posts" />
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('scripts')
@livewireScripts
@endsection