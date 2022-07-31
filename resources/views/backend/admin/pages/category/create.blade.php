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
                <div class="col-xl-12 col-xxl-10">
                    <!--begin::Wizard Form-->
                    <form class="form" action="{{ route('admin.category.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step">
                                    <h1 class="text-dark font-weight-bold mb-10 text-center">Add A New Category</h1>
                                    <!--begin::Group-->
                                        <div class="upload_image_container">
                                            <div className="upload">
                                                <div class="upload_img_wrapper">
                                                    <div class="preview_image">
                                                        <img id="img_preview">
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                        <div class="text">No file chosen, yet! </div>
                                                    </div>
                                                    <div id="cancel-btn"><i class="fas fa-times"></i></div>
                                                    <div class="file-name">File name here</div>
                                                </div>
                                                <input id="default-btn" type="file" name="image">
                                                <button id="custom-btn" onclick="defaultBtnActive()">Choose a file</button>
                                            </div>
                                        </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label"><h4>Title</h4></label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control form-control-solid form-control-lg" name="title"
                                                type="text" placeholder="Enter Category Title" required />
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label"> <h4>Summary</h4></label>
                                        <div class="col-lg-12 col-xl-12">
                                            <textarea id="mySummernote" name="summary"></textarea>
                                        </div>
                                    </div>
                                    <!--end::Group-->
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
