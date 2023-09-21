
<ul>
    @foreach ($notifications as $notification)
        <li>{{ $notification->message }}</li>
    @endforeach
</ul>
