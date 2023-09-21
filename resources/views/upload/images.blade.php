<form action="{{route('images.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" ><br>
    <button type="submit">SUBMIT</button>
</form>
