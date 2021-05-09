@if ($errors->any())
    <div class="mb-3">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="title">Title</label>
    <input id="title" class="form-control" type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}">
</div>
<div class="form-group">
    <label for="content">Content</label>
    <input id="content" class="form-control" type="text" name="content" value="{{ old('content', optional($post ?? null)->content) }}">
</div>