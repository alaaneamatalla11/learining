<h4>POSTSS EDIT</h4>
<form action="{{route('posts.update',$posts->id)}}" method="post">
    @csrf
    {{-- @method('PUT') --}}
    <input type="text" name="title" value="{{$posts->title}}"><br><br>
    <input type="text" name="body" value="{{$posts->body}}" ><br><br>
    <button type="submit">submit</button >

</form>