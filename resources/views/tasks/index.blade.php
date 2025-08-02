@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Dashboard Tugas</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach ($tasks as $status => $groupedTasks)
        <h3 class="mt-4">{{ $status }}</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Delegasi ke</th>
                    <th>Selesai?</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($groupedTasks as $task)
                    <tr @if (!$task->is_completed) style="background-color: #fff3cd;" @endif>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ \Carbon\Carbon::parse($task->deadline)->translatedFormat('d F Y') }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->user->name ?? 'Tidak ada' }}</td>
                        <td>
                            @if ($task->is_completed)
                                <span class="badge bg-success">Selesai</span>
                            @else
                                <span class="badge bg-warning text-dark">Belum</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus tugas ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7">Tidak ada tugas dalam 3 hari ke depan.</td></tr>
                @endforelse
            </tbody>
        </table>
    @endforeach
@endsection
