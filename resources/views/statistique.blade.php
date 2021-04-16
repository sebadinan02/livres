@foreach ($data as $key => $value)
    <strong>{{$value[0]}}</strong>:<strong>{{$value[1]}}</strong><br />
@endforeach

@foreach ($nombreauteur as $key => $value)
 <strong>{{ $key }} : {{ $value }}</strong>
@endforeach
