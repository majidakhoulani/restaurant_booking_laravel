@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card mt-4">
                <div class="card-body p-4">
                    <h5 class="mb-4 mt-4">Add Food</h5>

                    <form class="row g-3" method="post" action="{{route('admin.store.food')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Food Name</label>
                            <input type="text" name="food_name" class="form-control" id="input1" placeholder="food Name">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Food Description</label>
                            <input type="text" name="food_description" class="form-control" id="input1" placeholder="food Description">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Food Price</label>
                            <input type="text" name="food_price" class="form-control" id="input1" placeholder="food Price">
                        </div>
                        <div class="col-md-12">
                            <label for="single-select-field" class="form-label">Food Category</label>
                            <select name="category_id" class="form-select" id="single-select-field" data-placeholder="Choose one thing">
                                <option selected=""></option>
                                @foreach ( $categories as $cat )
                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Food Image</label>
                            <input class="form-control" type="file" name="food_image" id="formFile">
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
