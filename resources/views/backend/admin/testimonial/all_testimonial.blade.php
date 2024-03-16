@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="m-4">
                <a href="{{route('admin.add.testimonial')}}" class="btn btn-primary px-4">Add Testimonial</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <h6 class="mb-0 text-uppercase">All Testimonial</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Testimonial Image</th>
                                <th scope="col">Tweeter Name</th>
                                <th scope="col">Tweeter Position</th>
                                <th scope="col">Testimonial Tweet</th>
                                <th scope="col" colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $testimonials as $key=>$item)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>
                                    <img src="{{asset($item->testimonial_tweeter_image)}}" width="50px" height="50px">
                                </td>
                                <td>{{$item->testimonial_tweeter_name}}</td>
                                <td>{{$item->testimonial_tweeter_position}}</td>
                                <td>{{$item->testimonial_tweet}}</td>
                                <td>
                                    <a href="{{route('admin.edit.testimonial',$item->id)}}" class="btn btn-success"><i class="lni lni-pencil"></i>Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.delete.testimonial',$item->id)}}"  class="btn btn-danger"><i class="lni lni-eraser"></i>Delete</a>
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
