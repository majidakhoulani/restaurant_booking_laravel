@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="m-4">
                <a href="{{route('admin.add.blog')}}" class="btn btn-primary px-4">Add Category</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <h6 class="mb-0 text-uppercase">All Blog</h6>
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
                            {{-- @if ($blogcategories->count()>0) --}}
                            @foreach ( $blogcategories as $key=>$cat)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>{{$cat->blog_category_name}}</td>
                                <td>
                                    <a href="{{route('admin.edit.blog',$cat->id)}}" class="btn btn-success"><i class="lni lni-pencil"></i>Edit</a>
                                    <a href="{{route('admin.delete.blog',$cat->id)}}"  class="btn btn-danger"><i class="lni lni-eraser"></i>Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            {{-- @else
                            <tr>
                                <td colspan="3" class="text-center">There are not categories yet</td>

                            </tr>
                            @endif --}}
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


</div>


@endsection
