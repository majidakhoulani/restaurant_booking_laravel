@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="m-4">
                <a href="{{route('admin.add.food')}}" class="btn btn-primary px-4">Add Food</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <h6 class="mb-0 text-uppercase">All Foods</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Food Image</th>
                                <th scope="col">Food Name</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Food Description</th>
                                <th scope="col">price</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foods as $key=>$item)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>
                                    <img src="{{asset($item->food_image)}}" width="50px" height="50px">
                                </td>
                                <td>{{$item->food_name}}</td>
                                <td>{{$item['category']['category_name']}}</td>
                                <td>{{$item->food_description}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    {{-- {{route('admin.edit.category',$cat->id)}} {{route('admin.delete.category',$cat->id)}} --}}
                                    <a href="{{route('admin.edit.food',$item->id)}}" class="btn btn-success"><i class="lni lni-pencil"></i>Edit</a>
                                    <a href="{{route('admin.delete.food',$item->id)}}"  class="btn btn-danger"><i class="lni lni-eraser"></i>Delete</a>
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
