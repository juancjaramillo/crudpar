@extends('layout/boostrap')

@section('contenedor')
<div class="container">
    <h1>List of Items</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->Name }}</td>
                <td>{{ $item->identification }}</td>
                <td>
                    <!-- Add your action links here -->
                    <a href="{{ route('InfoPersonas.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('InfoPersonas.destroy', $item->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 