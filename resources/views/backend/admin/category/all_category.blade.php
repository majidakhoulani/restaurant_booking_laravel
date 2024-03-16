@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="m-4">
                <a href="{{route('admin.add.category')}}" class="btn btn-primary px-4">Add Category</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <h6 class="mb-0 text-uppercase">All Categories</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($categories->count()>0)
                            @foreach ( $categories as $key=>$cat)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>{{$cat->category_name}}</td>
                                <td>
                                    <a href="{{route('admin.edit.category',$cat->id)}}" class="btn btn-success"><i class="lni lni-pencil"></i>Edit</a>
                                    <a href="{{route('admin.delete.category',$cat->id)}}"  class="btn btn-danger"><i class="lni lni-eraser"></i>Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="3" class="text-center">There are not categories yet</td>

                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


</div>


@endsection
