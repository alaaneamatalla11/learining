<h4>WELCOME TO CREATE PAGE</h4>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" value="{{ old('title') }}" placeholder="enter post title"><br><br>
    <input type="text" name="body" value="{{ old('body') }}" placeholder="enter post body"><br><br>
    <button type="submit">submit</button>

</form>
