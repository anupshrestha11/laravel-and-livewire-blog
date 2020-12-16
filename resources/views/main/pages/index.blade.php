@extends('main.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <x-intro :posts='$popular' />
        </div>
        <div class="col-md-4">
            <x-sidebar :posts='$recent' />
        </div>
    </div>
</div>
@endsection