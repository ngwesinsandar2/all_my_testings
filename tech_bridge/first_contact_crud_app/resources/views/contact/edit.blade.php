@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('contact.update', $contact->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $contact->name }}" class="form-control" id="name"
                        placeholder="Leo Lame">
                </div>
                <div class="mb-3">
                    <label for="ph" class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control" id="ph"
                        placeholder="09-">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5">{{ $contact->description }}</textarea>
                </div>
                <div>
                    <a href="{{ route("contact.index") }}" class="btn btn-primary" type="button">Home</a>
                    <button class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
