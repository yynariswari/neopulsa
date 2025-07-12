@extends('layouts.admin')

@section('content')
<h2 class="mb-4 text-primary">Log Aktivitas</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Waktu</th>
            <th>User</th>
            <th>Aktivitas</th>
            <th>IP</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($logs as $log)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $log->created_at }}</td>
            <td>{{ $log->user }}</td>
            <td>{{ $log->activity }}</td>
            <td>{{ $log->ip }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
