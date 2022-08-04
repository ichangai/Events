@extends('backend.admin.layouts.master')


@section('content')

    <!--begin::Card-->
    <div class="card card-custom card-shadowless rounded-top-0" style="margin-top: 50px; border-radius: 30px;">
        <!--begin::Body-->
        <div class="card-body p-0">
            @if ($errors->any())
                <div class="alert alert-danger" id="danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif;

            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-10"
                enctype="multipart/form-data">
                    <!--begin::Wizard Form-->
                    <form class="form" action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step">
                                    <h1 class="text-dark font-weight-bold text-center">Update Category</h1>
                                    <!--begin::Group-->
                                    <div class="upload_edit_wrapper">
                                        <div class="upload-box">
                                            <div class="upload-img">
                                                <img src="{{ $category->image }}" alt="">
                                            </div>
                                            <label for="upload-input" class="upload-label">Update Image</label>
                                            <input type="file" name="image" id="upload-input">
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label"><h4>Title</h4></label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control form-control-solid form-control-lg"
                                                    name="title" value="{{ $category->title }}" type="text"
                                                    placeholder="Title" />
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label"><h4>Summary</h4></label>
                                            <div class="col-lg-12 col-xl-12">
                                                <textarea id="mySummernote" name="summary">{{ $category->summary }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" style="margin-top: 60px;">Submit</button>
                            </div>
                    </form>
                    <!--end::Wizard Form-->
                </div>
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->

@endsection

@section('scripts')
@endsection
