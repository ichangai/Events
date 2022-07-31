@extends('backend.admin.layouts.master')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Row-->
                <div class="row">
                    @foreach ($categories as $category)
                        <!--begin::Col-->
                        <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body pt-4">

                                    <!--begin::User-->
                                    <div class="d-flex align-items-end py-2">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="d-flex flex-shrink-0 mr-5">
                                                <div>
                                                    {{-- <img src="{{ asset('storage/images/'.$category->image) }}" --}}
                                                    <img src="{{$category->image}}"
                                                        alt="image"
                                                        style="width: 200px; height: 100px; object-fit: cover;" />
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Desc-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">{{ Str::ucfirst($category->title) }}</a>
                                    </div>
                                    <!--end::Title-->
                                    <!--end::Desc-->

                                    <!--begin::Actions-->
                                    <div class="pt-2"
                                        style="float: left; display: flex; justify-content: space-between; align-items:center;">
                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                            class="btn btn-primary font-weight-bolder mr-4">Edit</a>
                                        <form action="{{ route('admin.category.delete', $category->id) }}" method="post">
                                            @csrf @method('delete') <a type="submit"
                                                class="dltBtn btn btn-primary font-weight-bolder"
                                                data-id="{{ $category->id }}">Delete</a> </form>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    @endforeach
                </div>
                <!--end::Row-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection

@section('scripts')
    <script>
        @if (session('success'))
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Continue!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        @else
            (session('error'))
            Swal.fire("Error!", "{{ session('error') }}", "error");
        @endif
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e) {
            var form = $(this).closest('form');
            var dataId = $(this).data('id');
            e.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover the category!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal(" has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("The category has not been deleted!");
                    }
                });
        });
    </script>
@endsection
