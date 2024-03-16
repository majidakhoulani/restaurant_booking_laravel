@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card mt-4">
                <div class="card-body p-4">
                    <h5 class="mb-4 mt-4">Edit Testimonial</h5>

                    <form class="row g-3" method="post" action="{{route('admin.update.testimonial')}}"enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="testimonial_id" value="{{ $testimonial->id}}" class="form-control" id="input1" placeholder="Food Id">
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Tweeter Name</label>
                            <input type="text" name="testimonial_tweeter_name" value="{{ $testimonial->testimonial_tweeter_name}}" class="form-control" id="input1" >
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Tweeter Position</label>
                            <input type="text" name="testimonial_tweeter_position" value="{{ $testimonial->testimonial_tweeter_position}}" class="form-control" id="input1" >
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Chef Info</label>
                            <input type="text" name="testimonial_tweet" value="{{ $testimonial->testimonial_tweet}}" class="form-control" id="input1">
                        </div>
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Chef Image</label>
                            <input class="form-control" type="file" name="testimonial_tweeter_image" value="{{ $testimonial->testimonial_tweeter_image}}" id="formFile">
                        </div>
                        <div class="col-md-12">
                            <img src="{{asset($testimonial->testimonial_tweeter_image)}}" class="rounded-circle p-1 bg-primary" width="50px" height="50px">
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection
