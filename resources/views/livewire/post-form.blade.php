<div>
    <div class="form-group">
        <label for="title" class="d-flex">Title
            @error('title')
            <span class=" text-danger ml-auto">{{ $message }}</span>
            @enderror
        </label>
        <input type="text" class="form-control @error('title') border-danger  @enderror " id="title"
            placeholder="Post Title" name="title" wire:model='title' autofocus>
    </div>
    <div class="form-group">
        <label for="slug" class="d-flex">Slug <span class="text-muted small">(auto
                generated)</span>
            @error('slug')
            <span class=" text-danger ml-auto">{{ $message }}</span>
            @enderror
        </label>
        <input type="text" name="slug" class="form-control @error('slug') border-danger @enderror" id="slug"
            placeholder="slug (auto generated)" wire:model='slug' readonly>
    </div>
    <div class="form-group">
        <label for="excerpt" class="d-flex">Excerpt @error('excerpt')
            <span class=" text-danger ml-auto">{{ $message }}</span>
            @enderror</label>
        <input type="text" class="form-control @error('excerpt') border-danger  @enderror" name="excerpt" id="excerpt"
            placeholder="Excerpt" wire:model='excerpt'>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <select name="type" id="type" class="custom-select col-lg-4 d-block" wire:model="type">
            <option selected disabled>Choose type</option>
            <option value="1">Code</option>
            <option value="2">Travel</option>
            <option value="3">Tech</option>
        </select>
    </div>
    <div class="form-group">
        <label class="d-flex">Featured Image
            @error('featured_image') <span class="text-danger ml-auto">{{$message}}</span> @enderror
        </label>
        <input type="file" name="featured_image" id="featuredImage" class="file-upload-default"
            wire:model='featured_image' readonly="readonly">
        <div class="input-group col-xs-12  ">
            <input type="text" class="form-control file-upload-info @error('featured_image') border-danger @enderror"
                disabled placeholder="Upload Image">
            <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
            </span>
        </div>
    </div>
    <div wire:loading wire:target="featured_image" class="form-group">Uploading...</div>
    @if ($featured_image)
    <div class="form-group" wire:loading.remove>
        <label for="" class="d-block">Featured Image Preview </label>
        <img src="{{ $featured_image->temporaryUrl() }}" class="img-fluid d-block"
            style="max-width: 300px;max-height: 300px; object-fit: contain; width:100%">
    </div>
    @endif

</div>