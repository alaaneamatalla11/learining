<table >
    <th>#</th>
    <th>path</th>
@foreach ($images as $image)
    
    <tr>
        <td>{{$image->id}}</td>
        {{-- <td><img src="{{asset('images/DS-images/logo-footer.webp')}}"></td> --}}
        <td><img src="{{asset('images/'.$image->path)}}"  height="70" width="50"></td>


    </tr>
    @endforeach
</table>