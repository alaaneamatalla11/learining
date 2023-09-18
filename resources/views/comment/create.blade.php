<h1>WELCOME TO CREATE PAGE</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('comments.store')}}" method="POST">
    @csrf
    <input type="text" name="about"  required value="{{ old('about')}}"  placeholder="enter about post"><br>
    <input type="text" name="person" required value="{{old('person')}}" placeholder="enter person"><br>
    <button type="submit">SUBMIT</button>
</form>
