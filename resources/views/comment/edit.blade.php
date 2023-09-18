{{-- <h1>WELCOME TO EDIT PAGE</h1>
<form action="{{ route('comments.update' , $comment->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="about " value="{{ $comment->about}}"><br><br>
    <input type="text" name="person " value="{{ $comment->person}}"><br><br>
    <button type="submit">SUBMIT</button>
</form> --}}

<h1>EDIT PAGE</h1>
<form action="{{route('comments.update',$comments->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="about" value="{{ $comments->about}}"><br><br>
    <input type="text" name="person" value="{{ $comments->person}}"><br><br>
    <button type="submit">SUBMIT</button>

</form>