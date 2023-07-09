@extends('layouts.AdminApp')

@section('content')
    <div class="container">
        <h1>Users</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->telepon }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
