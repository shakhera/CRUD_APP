@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
             <form action= "{{route('students.store')}}" method ="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="cell" class="form-label">Cell</label>
                    <input type="text" class="form-control" id="cell" name="cell">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="textarea" class="form-control" id="address" name="address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
