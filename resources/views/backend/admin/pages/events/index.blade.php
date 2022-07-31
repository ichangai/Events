@extends('backend.admin.layouts.master')

@section('content')

    <div class="row" style="margin: 50px 0;">
        @forelse ($events as $event)
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6" style="border-radius: 20px;">
                <!--begin::Mixed Widget 6-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-6">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Event Name: {{ $event->name }}</span>
                            @php
                                // $author_name = \App\Models\Author::where('id', $article->author_id)->value('name')
                            @endphp
                            <span class="text-muted mt-3 font-weight-bold font-size-lg"></span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Container-->
                        <div class="">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-size-cover rounded"
                                style="background-image: url({{ $event->image }}); height: 200px; width: 100%;"></div>
                            <!--end::Image-->
                            <!--begin::Location-->
                            <h4 class="text-dark-75 text-hover-primary font-weight-bold pt-6" style="font-size: 14px;">Location:
                                {{ $event->location }}</h4>
                            <!--end::Location-->

                            <!--begin::Location-->
                            <h4 class="text-dark-75 text-hover-primary font-weight-bold" style="font-size: 14px;">Host:
                                {{ $event->host }}</h4>
                            <!--end::Location-->
                            

                            <!--begin::Location-->
                            <h4 class="text-hover-primary font-weight-bold" style="font-size: 14px;">Amount:
                                {{ $event->amount }}</h4>
                            <!--end::Location-->

                            <!--begin::Location-->
                            <p class="text-dark-75 text-hover-primary font-weight-bold">Date:
                                {{ \Carbon\Carbon::parse($event['date'])->format('M d Y') }}
                            </p>
                            <!--end::Location-->

                            <div class="pt-2"
                                style="float: left; display: flex; justify-content: space-between; align-items:center;">
                                <a href="" class="btn btn-sm btn-primary font-weight-bolder py-2 mr-4">Read More</a>
                                <a href="{{ route('admin.event.edit', $event->id) }}" class="btn btn-sm btn-primary font-weight-bolder py-2 mr-4">Edit</a>
                                <form action="{{ route('admin.event.delete', $event->id) }}" method="post"> @csrf @method('delete') <a type="submit"
                                        class="dltBtn btn btn-primary font-weight-bolder py-2" data-id="{{ $event->id }}">Delete</a>
                                </form>
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 6-->
            </div> 
        @empty
    </div>
    <div style="display:flex; justify-content:center; align-items:stretch; padding: 300px 0;">
            <h3 style="color: rgba(128, 128, 128, 0.63);" >No events available</h3>
    </div>
    @endforelse

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
                    text: "Once deleted, you will not be able to recover the event!",
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
