@extends('template')
@section('content')
    <div class="jumbotron">
        <table>

            @foreach ($user->toArray() as $key => $val)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $val }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
