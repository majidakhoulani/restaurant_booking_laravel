@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card mt-4">
                <div class="card-body p-4">
                    <h5 class="mb-4 mt-4">Add Blog</h5>
                    <form class="row g-3" method="post" action="{{route('admin.store.blog')}}">
                        @csrf
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Category Name</label>
                            <input type="text" name="blog_category_name" class="form-control" id="input1" placeholder="Category Name">
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
