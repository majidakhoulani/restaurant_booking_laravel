@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card mt-4">
                <div class="card-body p-4">
                    <h5 class="mb-4 mt-4">Edit Comment</h5>

                    <form class="row g-3" method="post" action="{{route('admin.update.comment')}}"enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="comment_id" value="{{ $comment->id}}" class="form-control" id="input1" placeholder="comment Id">
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Publisher Name</label>
                            <input type="text" name="publicher_name" value="{{ $comment->publicher_name}}" class="form-control" id="input1" >
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Publisher Email</label>
                            <input type="email" name="publicher_email" value="{{ $comment->publicher_email}}" class="form-control" id="input1">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Comment Content</label>
                            <input type="text" name="comment_content" value="{{ $comment->comment_content}}" class="form-control" id="input1" >
                        </div>
                        <div class="col-md-12">
                            <label for="single-select-field" class="form-label">Post Category</label>
                            <select name="post_id" class="form-select" id="single-select-field" data-placeholder="Choose one thing">
                                <option selected=""></option>
                                @foreach ( $posts  as $post )
                                <option value="{{ $post->id }}" {{$post->id == $comment->post_id ?'selected':''}}>{{ $post->post_title }}</option>
                                @endforeach
                            </select>
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
