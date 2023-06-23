@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <p># - {{ $contact->id }}</p>
            <p>Name - {{ $contact->name }}</p>
            <p>Phone - {{ $contact->phone }}</p>
            <p>Description - {{ $contact->description }}</p>

            <div>
                <a href="{{ route('contact.index') }}" class="btn btn-sm btn-primary">Home</a>
                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
