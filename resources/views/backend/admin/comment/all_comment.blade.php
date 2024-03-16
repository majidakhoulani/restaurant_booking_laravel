@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="m-4">
                <a href="{{route('admin.add.comment')}}" class="btn btn-primary px-4">Add Comment</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <h6 class="mb-0 text-uppercase">All Comment</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Publisher Name</th>
                                <th scope="col">Publisher Email</th>
                                <th scope="col">Post title</th>
                                <th scope="col">Comment Content</th>
                                <th scope="col" colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $key=>$item)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>{{$item->publicher_name}}</td>
                                <td>{{$item->publicher_email}}</td>
                                <td>{{$item['comments']['post_name']}}</td>
                                <td>{{$item->comment_content}}</td>
                                <td>
                                    <a href="{{route('admin.edit.comment',$item->id)}}" class="btn btn-success"><i class="lni lni-pencil"></i>Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.delete.comment',$item->id)}}"  class="btn btn-danger"><i class="lni lni-eraser"></i>Delete</a>
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
