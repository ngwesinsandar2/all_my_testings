@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <a href="{{ route('contact.create') }}" class="btn btn-warning mb-4 float-end">Create New Contact</a>
            <table class="table table-info table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->description }}</td>
                            <td>
                                <a href="{{ route('contact.show', $contact->id) }}"
                                    class="btn btn-sm btn-primary">Details</a>
                                <a href="{{ route('contact.edit', $contact->id) }}"
                                    class="btn btn-sm btn-secondary">Edit</a>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
