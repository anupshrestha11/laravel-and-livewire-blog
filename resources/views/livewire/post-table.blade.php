<table class="table table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Excerpt</th>
            <th>Status</th>
            <th>Published</th>
            <th>Views</th>
            <th>Comments</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)

        <x-post-row :post='$post' :key='$post->id' />

        @empty
        <tr>
            <td colspan="1000">
                <p class="text-muted text-info text-center">
                    There are no posts.
                </p>
            </td>
        </tr>
        @endforelse

    </tbody>
</table>