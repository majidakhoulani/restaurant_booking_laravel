@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card mt-4">
                <div class="card-body p-4">
                    <h5 class="mb-4 mt-4">Add Post</h5>

                    <form class="row g-3" method="post" action="{{route('admin.store.post')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Post Title</label>
                            <input type="text" name="post_title" class="form-control" id="input1" placeholder="Post Title">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Post Description</label>
                            <input type="text" name="post_description" class="form-control" id="input1" placeholder="post Description">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Post Auther</label>
                            <input type="text" name="post_auther" class="form-control" id="input1" placeholder="post auther Price">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Post Tag</label>
                            <input type="text" name="post_tag" class="form-control" id="input1" placeholder="post tag">
                        </div>
                        <div class="col-md-12">
                            <label for="single-select-field" class="form-label">Post BlogCat</label>
                            <select name="blogcat_id" class="form-select" id="single-select-field" data-placeholder="Choose one thing">
                                <option selected=""></option>
                                @foreach ( $blogcategories as $cat )
                                <option value="{{ $cat->id }}">{{ $cat->blog_category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Post Image</label>
                            <input class="form-control" type="file" name="post_image" id="formFile">
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
