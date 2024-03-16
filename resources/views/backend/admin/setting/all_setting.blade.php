@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="m-4">
                <a href="{{route('admin.add.setting')}}" class="btn btn-primary px-4">Add Setting</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <h6 class="mb-0 text-uppercase">All Setting</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Website Name</th>
                                <th scope="col">Phone_No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Day</th>
                                <th scope="col">Opening_time</th>
                                <th scope="col">Closing_time</th>
                                <th scope="col" colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($setting as $key=>$item)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone_no}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->day}}</td>
                                <td>{{$item->opening_time}}</td>
                                <td>{{$item->closing_time}}</td>
                                <td>
                                    <a href="{{route('admin.edit.setting',$item->id)}}" class="btn btn-success"><i class="lni lni-pencil"></i>Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.delete.setting',$item->id)}}"  class="btn btn-danger"><i class="lni lni-eraser"></i>Delete</a>
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
