@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Tugas</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" required>{{ $task->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" name="deadline" id="deadline" class="form-control" value="{{ $task->deadline }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="Penting sekali" {{ $task->status == 'Penting sekali' ? 'selected' : '' }}>Penting sekali</option>
                <option value="Menengah" {{ $task->status == 'Menengah' ? 'selected' : '' }}>Menengah</option>
                <option value="Tidak harus" {{ $task->status == 'Tidak harus' ? 'selected' : '' }}>Tidak harus</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Delegasi ke</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $task->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }} ({{ $user->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_completed" class="form-check-input" id="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
            <label class="form-check-label" for="is_completed">Tandai selesai</label>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
