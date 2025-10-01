<div>
    @foreach ($vars as $var )
    <p>{{$var}}</p>
    @endforeach
<br>
    @foreach ($cars as $car )
    <p>{{$car}}</p>
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