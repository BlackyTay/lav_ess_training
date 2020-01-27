@extends('layouts.app')

@section('content')
<dl>
    @foreach($booking->getAttributes() as $name => $id)
    <dt>{{ $name }}</dt>
    <dd>{{ $booking->$name }}</dd>
    @endforeach
</dl>
@endsection