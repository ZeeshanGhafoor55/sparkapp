@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-3">
        <div class="card-header">
            <h4>View Team 
                <a href="{{url('admin/add-team')}}" class="btn btn-primary btn-sm float-end">Add Team</a>
            </h4>
        </div>
        <div class="card-body">

            @if (session('msg'))
                <div class="alert alert-success">{{(session('msg'))}}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($team as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->designation}}</td>
                        <td>{{$item->image}}</td>
                        <td>
                            <a href="{{url('admin/edit-team/'.$item->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-team/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection