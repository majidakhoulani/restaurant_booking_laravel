@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="m-4">
                <a href="{{route('admin.add.post')}}" class="btn btn-primary px-4">Add Post</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <h6 class="mb-0 text-uppercase">All Post</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Post Image</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">BlogCategory Name</th>
                                <th scope="col">Post Description</th>
                                  <th scope="col">Post Auther</th>
                                 <th scope="col">Post Tag</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $key=>$item)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>
                                    <img src="{{asset($item->post_image)}}" width="50px" height="50px">
                                </td>
                                <td>{{$item->post_title}}</td>
                                <td>{{$item['posts']['blog_category_name']}}</td>
                                <td>{{$item->post_description}}</td>
                                <td>{{$item->post_auther}}</td>
                                <td>{{$item->post_tag}}</td>
                                <td>

                                    <a href="{{route('admin.edit.post',$item->id)}}" class="btn btn-success"><i class="lni lni-pencil"></i>Edit</a>
                                    <a href="{{route('admin.delete.post',$item->id)}}"  class="btn btn-danger"><i class="lni lni-eraser"></i>Delete</a>
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
