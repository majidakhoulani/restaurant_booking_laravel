@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="m-4">
                <a href="{{route('admin.add.chef')}}" class="btn btn-primary px-4">Add Chef</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <h6 class="mb-0 text-uppercase">All Chefs</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Chef Image</th>
                                <th scope="col">Chef Name</th>
                                <th scope="col">Chef Position</th>
                                <th scope="col">Chef Info</th>
                                <th scope="col" colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chefs as $key=>$item)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>
                                    <img src="{{asset($item->chef_image)}}" width="50px" height="50px">
                                </td>
                                <td>{{$item->chef_name}}</td>
                                <td>{{$item->chef_position}}</td>
                                <td>{{$item->chef_info}}</td>
                                <td>
                                    <a href="{{route('admin.edit.chef',$item->id)}}" class="btn btn-success"><i class="lni lni-pencil"></i>Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.delete.chef',$item->id)}}"  class="btn btn-danger"><i class="lni lni-eraser"></i>Delete</a>
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
