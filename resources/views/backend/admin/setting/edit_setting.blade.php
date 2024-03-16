@extends('backend.admin_dashboard')
@section('content')
<div class="wrap-content">
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card mt-4">
                <div class="card-body p-4">
                    <h5 class="mb-4 mt-4">Edit Setting</h5>

                    <form class="row g-3" method="post" action="{{route('admin.update.setting')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="setting_id" value="{{ $setting->id}}" class="form-control" id="input1" placeholder="Food Id">
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Website Name</label>
                            <input type="text" name="website_name" class="form-control" id="input1" value="{{ $setting->name}}">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="input1" value="{{ $setting->phone_no}}">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="input1" value="{{ $setting->email}}">
                        </div>

                        <div class="col-md-12">
                            <label for="single-select-field" class="form-label">Day</label>
                            <select name="day" class="form-select" id="single-select-field" data-placeholder="Choose one thing">
                                <option selected=""></option>
                                {{-- @foreach ( $categories as $cat )
                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Opening_time</label>
                            <input type="text" name="open" class="form-control" id="input1" value="{{ $setting->opening_time}}">
                        </div>
                        <div class="col-md-12">
                            <label for="input1" class="form-label">Closing_time</label>
                            <input type="text" name="close" class="form-control" id="input1" value="{{ $setting->closing_time}}">
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
