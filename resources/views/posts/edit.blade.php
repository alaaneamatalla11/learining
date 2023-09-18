<h4>POSTSS EDIT</h4>
<form action="{{ route('posts.update', $posts->id) }}" method="POST">
    {{-- @method('PUT') --}}
    @csrf
    <input type="text" name="title" value="{{ $posts->title }}"><br><br>
    <input type="text" name="body" value="{{ $posts->body }}"><br><br>
    <button type="submit">submit</button>

</form>
