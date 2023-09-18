<html>
<title>
    all posts
</title>

<head>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">body</th>
                <th scope="col">action</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row"> {{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}" role="button">Edit</a>
                        <a class="btn btn-Danger" href="{{ route('posts.delete', $post->id) }}" role="button"> Delete</a>

                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

</body>

</html>
