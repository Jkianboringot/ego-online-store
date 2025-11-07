<div>
    @foreach ($vars as $var )
    <p>{{$var}}</p>
    @endforeach
<br>
    @foreach ($bikes as $bike )
    <p>{{$bike}}</p>
    @endforeach
<br>

    @foreach ($favorites as $favorite )
    <p>{{$favorite}}</p>
    @endforeach

    <br>

    @foreach ($users as $user )
    <p>{{$user}}</p>
    @endforeach
</div>