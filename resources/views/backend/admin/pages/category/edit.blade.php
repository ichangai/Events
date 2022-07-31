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
                    <form class="form" action="{{ route('admin.category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step">
                                    <h5 class="text-dark font-weight-bold mb-10">Category Details:</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="image"
                                                type="file" value="{{ $category->image }}" />
                                        </div>
                                        <div style="margin: 30px auto; text-align: center;">
                                            @if($category->image)
                                                <img src="{{ asset('storage/images/'. $category->image) }}" style="height:200px; width: 300px; border-radius:20px; object-fit: cover;">
                                            @else
                                                <p>No image found</p>
                                            @endif
                                         </div>
                                    </div>
                                    <div class="form-group">

                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Title</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-solid form-control-lg"
                                                    name="title" value="{{ $category->title }}" type="text"
                                                    placeholder="Title" />
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Summary</label>
                                            <div class="col-lg-9 col-xl-9" style="margin-left: 220px;">
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
