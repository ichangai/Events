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
                    <form class="form" action="{{ route('admin.broker.update', $broker->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step">
                                    <h2 class="text-dark font-weight-bold mb-10 text-center"> Update <span style="text-transform: capitalize;">{{$broker->name }}</span></h2>

                                    <!--begin::Group-->
                                    <div class="upload_edit_wrapper">
                                        <div class="upload-box">
                                            <div class="upload-img">
                                                <img src="{{ $broker->image }}" alt="">
                                            </div>
                                            <label for="upload-input" class="upload-label">Update Image</label>
                                            <input type="file" name="image" id="upload-input">
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="name"
                                                type="text" placeholder="Name" value="{{ $broker->name }}"  required />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="email"
                                                type="text" placeholder="Email" required value="{{ $broker->email }}"  />
                                        </div>
                                    </div>
                                    <!--end::Group-->                                  

                                    <!--begin::Group-->
                                    <div class="form-group" style="display: flex; justify-content: space-between;">
                                        <label for="exampleSelectd">Award Event</label>
                                        <select class="form-control col-lg-9" name="event_id">
                                           @foreach ($awards as $award)
                                           <option value="{{ $award->id }}" {{ $award->id===$broker->event_id ? 'selected': ' ' }}>{{ $award->name }}</option>
                                           @endforeach
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
