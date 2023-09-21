<h4>WELCOME TO CREATE PAGE</h4>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" value="{{ old('title') }}" required placeholder="enter post title"><br><br>
    <input type="text" name="body" value="{{ old('body') }}" required placeholder="enter post body"><br><br>
    <button type="submit">submit</button>

</form>
