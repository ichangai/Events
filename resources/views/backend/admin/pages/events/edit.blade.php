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
            @endif;

            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-10" 
                enctype="multipart/form-data">
                    <!--begin::Wizard Form-->
                    <form class="form" method="POST" 
                    action="{{ route('admin.event.update', $event->id) }}" 
                    enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step">
                                    <h5 class="text-dark font-weight-bold mb-10">Event Details:</h5>
                                    <!--begin::Group-->
                                    <div class="upload_edit_wrapper">
                                        <div class="upload-box">
                                            <div class="upload-img">
                                                <img src="{{ $event->image }}" alt="">
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
                                                value="{{ $event->name }}" type="text"
                                                placeholder="Name of the Event" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Amount</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="amount"
                                                value="{{ $event->amount }}" type="text" placeholder="Amount" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Host</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="host"
                                                value="{{ $event->host }}" type="text"
                                                placeholder="Host of the Event" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Location</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="location"
                                                value="{{ $event->location }}" type="text"
                                                placeholder="Event Location" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Start Time</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="start_time"
                                                type="time" placeholder="Start Time of the event"
                                                value="{{ $event->start_time }}" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">End Time</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="end_time"
                                                type="time" placeholder="End Time of the event"
                                                value="{{ $event->end_time }}" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Date</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="date"
                                                value="{{ $event->start_date }}" type="date" />
                                        </div>
                                    </div>
                                    <!--end::Group-->

                                    <!--begin::Group-->
                                    <div class="form-group row" style="margin: 50px 0">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Date</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg" name="date"
                                                value="{{ $event->end_date }}" type="date" />
                                        </div>
                                    </div>

                                    <!--end::Group-->

                                    <div class="form-group" style="display: flex; justify-content: space-between;">
                                        <label for="exampleSelectd">Status</label>
                                        <select class="form-control col-lg-9" name="timeline" id="timeline">
                                            <option value="past" {{ $event->timeline == 'past' ? 'selected' : ' ' }}>
                                                Past
                                            </option>
                                            <option value="upcoming"
                                                {{ $event->timeline == 'upcoming' ? 'selected' : ' ' }}>Upcoming</option>
                                        </select>
                                    </div>

                                    <div class="form-group" style="display: flex; justify-content: space-between;">
                                        <label for="exampleSelectd">Type</label>
                                        <select class="form-control col-lg-9" name="type" id="type">
                                            <option value="free" {{ $event->status == 'free' ? 'selected' : ' ' }}>Free
                                            </option>
                                            <option value="paid" {{ $event->status == 'paid' ? 'selected' : ' ' }}>Paid
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Summary</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea name="summary" rows="6" cols="60">{{ $event->summary }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group" style="display: flex; justify-content: space-between;">
                                        <label for="exampleSelectd">Status</label>
                                        <select class="form-control col-lg-9" name="status" id="status">
                                            <option value="conference"
                                                {{ $event->status == 'conference' ? 'selected' : ' ' }}>Conference</option>
                                            <option value="competition"
                                                {{ $event->status == 'competition' ? 'selected' : ' ' }}>Competition
                                            </option>
                                            <option value="webinar" {{ $event->status == 'webinar' ? 'selected' : ' ' }}>
                                                Webinar</option>
                                            <option value="awards" {{ $event->status == 'awards' ? 'selected' : ' ' }}>
                                                Awards</option>
                                            <option value="expo" {{ $event->status == 'expo' ? 'selected' : ' ' }}>Expo
                                            </option>
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
