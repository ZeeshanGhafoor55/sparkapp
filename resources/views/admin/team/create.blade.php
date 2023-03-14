@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-3">
        <div class="card-header">
            <h4>Add Team</h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/add-team')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="">Team Member Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Team Member Desigantion</label>
                    <input type="text" name="designation" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Team Member Description</label>
                    <textarea name="description" id="" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Profile Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Gender</label>
                    <select name="gender" id="" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Phone#</label>
                    <input type="text" name="number" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Joining Date</label>
                    <input type="date" name="join" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit" class="form-control btn btn-danger">Submit</button>
                </div>


            </form>
        </div>
    </div>
</div>



@endsection