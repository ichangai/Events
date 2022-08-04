@extends('backend.admin.layouts.master')

{{-- @section('styles')
<style>
    #holder img{
        height: 10rem;
    }
</style>
@endsection --}}


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
            @endif

            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-10">
                    <!--begin::Wizard Form-->
                    <form class="form" method="POST" action="{{ route('admin.event.store') }}"  
                    onsubmit="e.preventDefault();"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step">
                                    <h1 class="text-dark font-weight-bold mb-10 text-center"> Add An Event</h1>

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
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600">Name</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="name"
                                                type="text" placeholder="Name of the Event" required />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600">Amount</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="amount"
                                                type="text" placeholder="Amount" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600">Host</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="host"
                                                type="text" placeholder="Host of the Event" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600">Location</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="location"
                                                type="text" placeholder="Event Location" required />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600">Start Time</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="start_time"
                                                type="time" placeholder="Start Time of the event" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600">End Time</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="end_time"
                                                type="time" placeholder="End Time of the event" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600">Start Date</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="start_date"
                                                type="date" placeholder="End Location" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600">End Date</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="end_date"
                                                type="date" placeholder="End Date" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" style="font-weight:600"> <h4>Summary</h4></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea id="mySummernote" name="summary"></textarea>
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <div class="form-group" style="display: flex; justify-content: space-between;">
                                        <label for="exampleSelectd">Category</label>
                                        <select class="form-control col-lg-9" name="category_id" id="status" required>
                                            <option value="">--Category--</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group" style="display: flex; justify-content: space-between;">
                                        <label for="exampleSelectd">Timeline</label>
                                        <select class="form-control col-lg-9" name="timeline" id="timeline">
                                            <option value="past">Past</option>
                                            <option value="upcoming">Upcoming</option>
                                        </select>
                                    </div>

                                    <div class="form-group" style="display: flex; justify-content: space-between;">
                                        <label for="exampleSelectd">Type</label>
                                        <select class="form-control col-lg-9" name="type" id="type">
                                            <option value="free">Free</option>
                                            <option value="paid">Paid</option>
                                        </select>
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
    {{-- <script>
@if (session('errors'))
@foreach ($errors->all() as $error)
Swal.fire({
  title: "Error!",
  text: "Error, please check you have filled out all the fields",
  icon: "error",
  buttonsStyling: false,
  confirmButtonText: "Go Back",
  customClass: {
   confirmButton: "btn btn-danger"
  }
 });
@endforeach
@endif
</script> --}}
@endsection
