<tr>
    <td class="text-truncate" style="max-width:150px">{{$post->title}}</td>
    <td class="text-truncate" style="max-width: 300px">{{$post->excerpt}}</td>
    <td>
        @if ($post->status == '1')
        <label class="badge badge-success">
            Published
        </label>
        @endif
        @if ($post->status == '-1')
        <label class="badge badge-info">
            on Draft
        </label>
        @endif

    </td>
    <td>
        @if ($post->published_at == null)
        <i class="text-warning">NULL</i>
        @else
        {{Carbon\Carbon::parse($post->published_at)->diffForHumans()}}
        @endif
    </td>
    <td>{{$post->views}}</td>
    <td>{{$post->comment_count}}</td>
    <td class="p-0">
        <div class="d-flex">
            <a href="{{ route('dashboard.posts.show', ['post'=> $post->id]) }}" target="_blank"
                class="btn btn-info btn-rounded btn-icon m-1 d-flex align-items-center flex-wrap justify-content-center"
                type="button">
                <i class="ti-eye text-white"></i>
            </a>
            <a class="btn btn-warning btn-rounded btn-icon m-1 d-flex align-items-center flex-wrap justify-content-center"
                type="button">
                <i class="ti-pencil-alt text-white"></i>
            </a>
            <a class="btn btn-danger btn-rounded btn-icon m-1 d-flex align-items-center flex-wrap justify-content-center"
                type="button" wire:click="$emit('postDelete', [{{$post->id}}, 1])">
                <i class="ti-trash text-white"></i>
            </a>
        </div>
    </td>
</tr>