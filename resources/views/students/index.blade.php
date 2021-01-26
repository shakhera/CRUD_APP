@extends('layouts.app')

@section('content')

<div class="container">
    <br>
    <br>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card header">
                    <h2>Enter new Student</h2>
                </div>

                <div class="card body">
                    <form action="{{route('students.store')}}" method="post">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Existing Students</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Cell</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->address}}</td>
                                <td>{{$student->cell}}</td>
                                <td>
                                    <a class="btn btn-danger"
                                        href="{{route('students.delete', $student->id)}}">Delete</a>
                                    <a class="btn btn-success" href="#">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
