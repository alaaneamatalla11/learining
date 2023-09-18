<h3> show all comeents with soft delete</h3>

<table>

    <th>id</th>
    <th>about</th>
    <th>person</th>
    <th>action</th>


    @foreach ($comments as $comment)
        <tr>
            <td> {{ $comment->id }}</td>
            <td>{{ $comment->about }}</td>
            <td>{{ $comment->person }}</td>
            <td>
                <a href="{{ route('comments.restore', $comment->id) }}">RESTORE</a>
                <form action="{{ route('comments.forcedelete', $comment->id) }}" method="get">
                    @csrf
                    <button type="submit">ForceDelete</button>

                </form>
            </td>
        </tr>
    @endforeach

    </tbody>

</table>

</body>

</html>
