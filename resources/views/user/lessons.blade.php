@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Mening darslarim</h2>
    <table class="table table-bordered">
        <thead><tr><th>Nomi</th><th>Matn</th><th>Kuni</th><th>Soat</th></tr></thead>
        <tbody>
        @foreach($lessons as $lesson)
        <tr>
            <td>{{ $lesson->name }}</td>
            <td>{{ $lesson->text }}</td>
            <td>{{ $lesson->date }}</td>
            <td>{{ $lesson->time }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
