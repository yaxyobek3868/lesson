@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Darslar</h2>
    <a href="{{ route('admin.lessons.create') }}" class="btn btn-primary mb-3">+ Yangi dars</a>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    <table class="table table-bordered">
        <thead><tr><th>ID</th><th>Foydalanuvchi</th><th>Nomi</th><th>Kuni</th><th>Soat</th><th>Amal</th></tr></thead>
        <tbody>
        @foreach($lessons as $lesson)
        <tr>
            <td>{{ $lesson->id }}</td>
            <td>{{ $lesson->user->name }}</td>
            <td>{{ $lesson->name }}</td>
            <td>{{ $lesson->date }}</td>
            <td>{{ $lesson->time }}</td>
            <td>
                <a href="{{ route('admin.lessons.edit', $lesson) }}" class="btn btn-sm btn-warning">Edit</a>
                <form method="POST" action="{{ route('admin.lessons.destroy', $lesson) }}" style="display:inline">@csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Ishonchingiz komilmi?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
