<h3> SHOW ALL COMMENTS</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">about</th>
                <th scope="col">person</th>
                <th scope="col">action</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <th scope="row"> {{ $comment->id }}</th>
                    <td>{{ $comment->about }}</td>
                    <td>{{ $comment->person }}</td>
                    <td>
                        <a href="{{ route('comments.edit', $comment->id) }}" >Edit</a>
                        {{-- <form action="{{ route('comments.edit' ,$comment->id)}}" method="get">
                            <button type="submit">Edit</button>
                            @method('DELETE')
                        </form> --}}
                        <form action="{{ route('comments.destroy' ,$comment->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">SoftDelete</button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

</body>

</html>
