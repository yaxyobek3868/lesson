@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Darsni tahrirlash</h2>
    <form method="POST" action="{{ route('admin.lessons.update', $lesson) }}">
        @csrf
        @method('PUT')
        <select name="user_id" class="form-control mb-2" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}" @if($lesson->user_id == $user->id) selected @endif>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
        <input type="text" name="name" value="{{ $lesson->name }}" class="form-control mb-2" required>
        <textarea name="text" class="form-control mb-2" required>{{ $lesson->text }}</textarea>
        <input type="date" name="date" value="{{ $lesson->date }}" class="form-control mb-2" required>
        <input type="time" name="time" value="{{ $lesson->time }}" class="form-control mb-2" required>
        <button class="btn btn-primary">Yangilash</button>
    </form>
</div>
@endsection
