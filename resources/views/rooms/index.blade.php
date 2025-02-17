@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>
                Room Number
            </th>
            <th>
                Type
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>
                    {{ $room->number }} 
                    <!-- lazy loading -->
                </td>
                <td>
                    {{ $room->roomType->name }}    
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection