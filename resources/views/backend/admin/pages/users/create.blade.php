@extends('backend.admin.layouts.master')

@section('content')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom card-transparent">
                    <div class="card-body p-0">
                        <!--begin::Wizard-->
                        <div class="wizard wizard-4" id="">
                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless rounded-top-0">
                                <!--begin::Body-->
                                <div class="card-body p-0">
                                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                        <div class="col-xl-12 col-xxl-10">
                                            <!--begin::Wizard Form-->
                                            <form action="{{ route('admin.user.store') }}" method="POST" class="form"
                                                id="">
                                                @csrf
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-9">
                                                        <!--begin::Wizard Step 1-->
                                                        <div class="my-5 step">
                                                            <div class="top_details">
                                                                <h5 class="text-dark font-weight-bold mb-10">ADD USER
                                                                    DETAILS:</h5>
                                                            </div>
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger" id="danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }} </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Full
                                                                    Name</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        name="name" id="name" type="text"
                                                                        placeholder="Full Name" />
                                                                    <span class="text-danger">
                                                                        @error('name')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->

                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        name="email" id="email" type="email"
                                                                        placeholder="Email" />
                                                                    <span class="text-danger">
                                                                        @error('email')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->

                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-xl-3 col-lg-3 col-form-label">Password</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        name="password" id="password" type="password"
                                                                        placeholder="Email" />
                                                                    <span class="text-danger">
                                                                        @error('password')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->

                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Contact
                                                                    Phone</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div
                                                                        class="input-group input-group-solid input-group-lg">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-phone"></i>
                                                                            </span>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="phone" id="phone"
                                                                            placeholder="Phone" /> <br />
                                                                        <span class="text-danger">
                                                                            @error('phone')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->

                                                            <div class="separator separator-dashed my-10"></div>

                                                            <button type="submit" id="regBtn"
                                                                class="btn btn-success font-weight-bolder px-10 py-3"
                                                                style="float: right;">Submit</button>
                                                        </div>
                                                        <!--end::Wizard Step 1-->

                                                    </div>
                                                </div>
                                            </form>
                                            <!--end::Wizard Form-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Wizard-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

@endsection

@section('scripts')
    {{-- <script>
		$(document).ready(function(){
			$('#createTenant').submit( function(e){
				e.preventDefault();

				var name = $('input[name="name"]').val();
				var id_no = $('input[name="id_no"]').val();
				var phone = $('input[name="phone"]').val();
				var business = $('input[name="business"]').val();
				var rent = $('input[name="total_rent"]').val();
				var deposit = $('input[name="deposit"]').val();
				var stall = $('#stall').val();
				var token = $('input[name="_token"]').val();
				var url = "{{ route('admin.tenant.register') }}";

				$.ajax({
					url: url,
					type: "POST",
					dataType: "JSON",
					data: {
						'_token':token,
						'name': name,
						'id_no' : id_no,
						'phone' : phone,
						'business' : business, 
						'rent' : rent,
						'deposit' : deposit,
						'stall' : stall,
					},
					success: function(res){
						console.log(res)
					}
				})
			
			})
		});
</script> --}}

    {{-- <script>
	$(document).ready(function(){

			// AJAX CALL TO CHECK LENGTH OF ID NUMBER
			$('#id_no').on({
			keyup: function(){
				if($('#id_no').val().length < 8){
					$('#id_num').html('<span style="color: crimson; font-weight: 700;"> The ID number is too short </span>');
				}else{
					$('#id_num').html('<span style="color: green; font-weight: 700;"> The ID Number is Valid </span>');
				}
			}
		})

		var token="{{csrf_token()}}";
		form = $('#regTenant');
		// AJAX CALL TO CHECK ID NUMBER EXISTENCE
		$('#id_no').on({
			change: function(e){
				e.preventDefault();
				$.ajax({
					type: "POST",
					dataType: 'JSON',
					url: "{{ route('admin.tenant.register') }}",
					data: form.serialize(),
					success: function(data){
						// console.log(data.msg)
						Swal.fire({
							title: "Warning!",
							text: data.msg,
							icon: "warning",
							buttonsStyling: false,
							confirmButtonText: "Redo!",
							customClass: {
							confirmButton: "btn btn-warning"
							}
						});
					}
				})
			}
		})
		 // AJAX CALL TO CHECK PHONE EXISTENCE
		$('#phone').on({
			change: function(e){
				e.preventDefault();
				$.ajax({
					type: "POST",
					dataType: 'JSON',
					url: "{{ route('admin.tenant.register') }}",
					data: form.serialize(),
					success: function(data){
						// console.log(data.msg)
						Swal.fire({
							title: "Warning!",
							text: data.msg,
							icon: "warning",
							buttonsStyling: false,
							confirmButtonText: "Redo!",
							customClass: {
							confirmButton: "btn btn-warning"
							}
						});
					}
				})
			}
		})
	})

</script>

<script>
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
	// <li>{{$error}} </li>
@endforeach
@endif
</script> --}}
@endsection
