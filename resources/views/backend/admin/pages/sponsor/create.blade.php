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
                    <form class="form" action="{{ route('admin.sponsor.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step">
                                    <h5 class="text-dark font-weight-bold mb-10">Sponsor Details:</h5>

                                    <!--begin::Group-->
                                    <div class="upload_edit_wrapper">
                                        <div class="upload-box">
                                            <div class="upload-img">
                                                <img alt="">
                                            </div>
                                            <label for="upload-input" class="upload-label">Upload Image</label>
                                            <input type="file" name="image" id="upload-input">
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="name"
                                                type="text" placeholder="Name" required />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="phone"
                                                type="text" placeholder="Phone" required />
                                        </div>
                                    </div>
                                    <!--end::Group-->


                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="email"
                                                type="text" placeholder="Email" required />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                        <input type="text" name="status" value="approved" hidden>
                                    <!--end::Group-->
                                    

                                    <!--begin::Group-->
                                    <div class="form-group" style="display: flex; justify-content: space-between;">
                                        <label for="exampleSelectd">Level</label>
                                        <select class="form-control col-lg-9" name="level">
                                            <option value="">--Sponsorship Level--</option>
                                            <option value="platinum">Platinum</option>
                                            <option value="gold">Gold</option>
                                            <option value="silver">Silver</option>
                                        </select>
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
