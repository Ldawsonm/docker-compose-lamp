@extends('layouts.app')

@section('title', 'List of Adventures')

@section('content')
<div class="container">
    <h1>List of Adventures</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Adventure Name</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adventures as $adventure)
                <tr>
                    <td>{{ $adventure->id }}</td>
                    <td>{{ $adventure->adventure_name }}</td>
                    <td>{{ $adventure->order }}</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <form action="{{ route('adventure.destroy', $adventure->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this adventure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
