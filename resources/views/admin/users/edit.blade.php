@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Foydalanuvchini tahrirlash</h2>
    <form method="POST" action="{{ route('admin.users.update', $user) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}" placeholder="Ism" class="form-control mb-2" required>
        <input type="text" name="phone" value="{{ $user->phone }}" placeholder="Telefon" class="form-control mb-2">
        <input type="email" name="email" value="{{ $user->email }}" placeholder="Email" class="form-control mb-2" required>
        <button class="btn btn-primary">Yangilash</button>
    </form>
</div>
@endsection
