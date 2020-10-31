@extends('dashboard.layouts.app')

@section('title', 'New Post | Dashboard')

@section('head')

@livewireStyles

@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                New Post
            </div>
            <div class="card-body">
                <div class="form">
                    <form class="forms-sample" enctype="multipart/form-data" method="post"
                        action="{{route('dashboard.posts.store')}}">

                        @csrf
                        <livewire:post-form />
                        <div class="form-group">
                            <label for="">Post Content</label>

                            <textarea name="content" id="content" class="content"></textarea>

                        </div>

                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" name="status" value="-1" class="form-check-input">
                                Save to Draft
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card my-5">
            <div class="card-header">
                Post Preview
            </div>
            <div class="card-body" id="postPreview">

            </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')
@livewireScripts
<script src="{{ asset('royalui/js/file-upload.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'content',{
        height: 500,
        uiColor:'#EAF0F1',
        filebrowserUploadUrl: '{{route('upload', ['_token'=> csrf_token()])}}',
        filebrowserUploadMethod: 'form'
    } );
    const content = document.getElementById('content');
    const postPreview = document.getElementById('postPreview');

    setInterval(function(){
        if(CKEDITOR.instances.content.getData() ===''){
            postPreview.innerHTML = "<div class='text-center text-muted'>Preview your post here</div>"
        }
        else{

            postPreview.innerHTML = CKEDITOR.instances.content.getData()
        }
    }, 1000);
</script>

@endsection