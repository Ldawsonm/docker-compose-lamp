@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Slide</h1>
    <form action="{{ route('slides.update', $slide->id) }}" method="POST">
        @csrf
        @method('PUT')
        <textarea name="content" id="editor">{{ $slide->content }}</textarea>
        <input type="text" name="css_path" value="{{ $slide->css_path }}" placeholder="CSS File Path">
        <button type="submit">Save Changes</button>
    </form>
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
