@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Yangi foydalanuvchi qo‘shish</h2>
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Ism" class="form-control mb-2" required>
        <input type="text" name="phone" placeholder="Telefon" class="form-control mb-2">
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
        <input type="password" name="password" placeholder="Parol" class="form-control mb-2" required>
        <button class="btn btn-success">Saqlash</button>
    </form>
</div>
@endsection
