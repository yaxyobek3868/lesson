@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Foydalanuvchilar</h2>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">+ Yangi foydalanuvchi</a>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    <table class="table table-bordered">
        <thead><tr><th>ID</th><th>Ism</th><th>Tel</th><th>Email</th><th>Amal</th></tr></thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->phone }}</td><td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                <form method="POST" action="{{ route('admin.users.destroy', $user) }}" style="display:inline">@csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Ishonchingiz komilmi?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
