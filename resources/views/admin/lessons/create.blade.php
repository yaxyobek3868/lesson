@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Yangi dars qo‘shish</h2>
    <form method="POST" action="{{ route('admin.lessons.store') }}">
        @csrf
        <select name="user_id" class="form-control mb-2" required>
            <option value="">-- Foydalanuvchini tanlang --</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <input type="text" name="name" placeholder="Dars nomi" class="form-control mb-2" required>
        <textarea name="text" placeholder="Matn" class="form-control mb-2" required></textarea>
        <input type="date" name="date" class="form-control mb-2" required>
        <input type="time" name="time" class="form-control mb-2" required>
        <button class="btn btn-success">Saqlash</button>
    </form>
</div>
@endsection
