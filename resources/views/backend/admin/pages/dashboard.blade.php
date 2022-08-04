@extends('backend.admin.layouts.master')

@section('content')

          <!-- =============================MAIN CONTENT======================-->
      <!--begin::Content-->
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Dashboard-->
 
                <!--begin::Row-->
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 14-->
                        <div class="card card-custom bg-danger card-stretch gutter-b" style="height: 150px;">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-6">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label  font-size-h4 text-white">Total Number of Events</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">6</span>
                                 <i class="fas fa-glass-cheers" style="font-size: 50px; float: right; margin-right: 50px; color: white;"></i>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 14-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 14-->
                        <div class="card card-custom bg-success card-stretch gutter-b" style="height: 150px;">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-6">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label  font-size-h4 text-white">Total Number of Users</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">9</span>
                                 <i class="fas fa-users" style="font-size: 50px; float: right; margin-right: 50px; color: white;"></i>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 14-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 14-->
                        <div class="card card-custom bg-primary card-stretch gutter-b" style="height: 150px;">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-6">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label  font-size-h4 text-white">Total Number of Articles</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">23</span>
                                 <i class="flaticon2-checking" style="font-size: 50px; float: right; margin-right: 50px; color: white;"></i>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 14-->
                    </div>
                </div>
                <!--end::Row-->

            <!--begin::Row-->
            <div class="row">
                @foreach ($events as $event)
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 6-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-6">
                            <h3 class="card-title align-items-start flex-column">
                                @php
                                      $category_name = \App\Models\Category::where('id', $event->category_id)->value('title');
                                @endphp
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">{{ $category_name }}</span>
                                <span class="card-label mt-5" style="font-size: 16px;">{{ $event->name }}</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Container-->
                            <div class="pt-1">
                                <!--begin::Image-->
                                <div class="bgi-no-repeat bgi-size-cover rounded min-h-200px" style="background-image: url({{ $event->image }})"></div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold pt-8">{{ $event->location }}</h3>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <p class="text-dark-75 font-size-lg font-weight-normal pt-3 mb-4">{{ $event->summary }}.</p>
                                <!--end::Text-->
                                <a href="#" class="btn btn-sm btn-primary font-weight-bolder py-2">Read More</a>
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 6-->
                </div>
                @endforeach
            </div>
            <!--end::Row-->


           <!--begin::Row-->
            <div class="row">
                <div class="col-xl-6">
                    <!--begin::Mixed Widget 8-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-6">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Brokers</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-lg">Total 12</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        @forelse ($brokers as $broker)                            
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Items-->
                            <div class="flex-grow-1">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                         <img alt="Pic" src="{{ $broker->image }}" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-wrap flex-row-fluid">
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column pr-5 flex-grow-1">
                                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">{{ $broker->name }}</a>
                                            <span class="text-muted font-weight-bold">{{ $broker->email }}</span>
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center py-2">
                                            <!--begin::Label-->
                                           <span class="btn btn-success btn-sm">View More</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                        @empty
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column pb-20">
                            <h4>Add brokers to display them here</h4>
                        </div>
                        <!--end::Body-->
                        @endforelse

                    </div>
                    <!--end::Mixed Widget 8-->
                </div>

                         <div class="col-xl-6">
                    <!--begin::Mixed Widget 8-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-6">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Voters</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-lg">Total 12</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        @forelse ($voters as $voter)                            
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Items-->
                            <div class="flex-grow-1">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    {{-- <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                         <img alt="Pic" src="{{ $voter->image }}" />
                                    </div> --}}
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-wrap flex-row-fluid">
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column pr-5 flex-grow-1">
                                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">{{ $voter->name }}</a>
                                            <span class="text-muted font-weight-bold">{{ $voter->email }}</span>
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center py-2">
                                            <!--begin::Label-->
                                           <span class="btn btn-success btn-sm">View More</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                        @empty
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column pb-20">
                            <h4>Add voters to display them here</h4>
                        </div>
                        <!--end::Body-->
                        @endforelse

                    </div>
                    <!--end::Mixed Widget 8-->
                </div>
            </div>
            <!--end::Row-->     
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
    <!-- =============================END OF CONTENT======================-->

@endsection