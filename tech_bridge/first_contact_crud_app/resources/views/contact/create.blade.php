@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Leo Lame">
                </div>
                <div class="mb-3">
                    <label for="ph" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="ph" placeholder="09-">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                </div>
                <button class="btn btn-warning">Create</button>
            </form>
        </div>
    </div>
@endsection
