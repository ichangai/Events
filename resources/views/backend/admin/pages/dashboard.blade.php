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
            <div class="text-center">
                <div  class="col-xl-12 py-5 my-5" style="background-color: #fff;  border-radius: 15px;">
                    <h2 class="text-success" style="font-weight: 600;"> General Stats & Analytics </h2>
                </div>
            </div>
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
                            @php
                                $events = \App\Models\Event::all();
                                $event_count = $events->count();
                            @endphp
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">{{ $event_count }}</span>
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
                            @php
                                $users_no = \App\Models\User::all();
                                $users_count = $users_no->count();
                            @endphp
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">{{ $users_count }}</span>
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
                                    <span class="card-label  font-size-h4 text-white">Total Number of Brokers</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            @php
                                $broker = \App\Models\Broker::all();
                                $broker_count = $broker->count();
                            @endphp
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">{{ $broker_count }}</span>
                                 <i class="flaticon2-avatar" style="font-size: 50px; float: right; margin-right: 50px; color: white;"></i>
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
                                    <span class="card-label  font-size-h4 text-white">Total Number of Conferences</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            @php
                                $conf = \App\Models\Event::where('category_id', 3)->get();
                                $conf = $conf->count();
                            @endphp
                            <!--begin::Body-->
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">{{ $conf }}</span>
                                 <i class="flaticon2-group" style="font-size: 50px; float: right; margin-right: 50px; color: white;"></i>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 14-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Stats Widget 14-->
                        <div class="card card-custom bg-warning card-stretch gutter-b" style="height: 150px;">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-6">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label  font-size-h4 text-white">Total Number of Competitions</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            @php
                                $compe = \App\Models\Event::where('category_id', 2)->get();
                                $compe = $compe->count();
                            @endphp
                            <!--begin::Body-->
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">{{ $compe }}</span>
                                 <i class="flaticon-medal" style="font-size: 50px; float: right; margin-right: 50px; color: white;"></i>
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
                                    <span class="card-label  font-size-h4 text-white">Total Number of Awards</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                             @php
                                $awards = \App\Models\Event::where('category_id', 1)->get();
                                $awards = $awards->count();
                            @endphp
                            <div class="card-toolbar" style="margin-left: 40px;">
                                <span class=" font-size-h1 text-white" style="font-weight: 600">{{ $awards }}</span>
                                 <i class="flaticon-trophy" style="font-size: 50px; float: right; margin-right: 50px; color: white;"></i>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 14-->
                    </div>
                </div>
                <!--end::Row-->
            <div class="text-center">
                <div  class="col-xl-12 py-5 my-5" style="background-color: #fff;  border-radius: 15px;">
                    <h2 class="text-success" style="font-weight: 600;"> Events </h2>
                </div>
            </div>
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


                   <!--begin:: Brokers Row-->
            <div class="row">
                <div class="col-12">
                <!--begin::Tables Widget 4-->
                    <div class="card card-custom my-5">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Latest Brokers Added</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-1 pb-4">
                            <div class="tab-content mt-5" id="myTabTable4">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr class="text-center">
                                                    <th class="p-0 w-50px">ID</th>
                                                    <th class="p-0 w-50px">Img</th>
                                                    <th class="p-0 min-w-120px">Name</th>
                                                    <th class="p-0 min-w-100px">Email</th>
                                              
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($brokers as $broker)
                                                <tr class="text-center">
                                                    <td class="px-5" >
                                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg" >{{ $broker->id }}</a>
                                                    </td>
                                                    <td style="padding:15px 100px;">
                                                            <img src="{{ $broker->image }}" alt="" style="width: 50px; object-fit:cover; border-radius: 50%;">
                                                    </td>
                                                    <td style="padding:15px 50px;">
                                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">{{ $broker->name }}</a>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 d-block font-size-lg">{{ $broker->email }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Tablet-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                <!--end::Tables Widget 4-->
                </div>
            </div>
            <!--end::Row-->     

            <!--begin::Users Row-->
            <div class="row">
                <div class="col-12">
                <!--begin::Tables Widget 4-->
                    <div class="card card-custom my-5">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Latest Users Registered</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-1 pb-4">
                            <div class="tab-content mt-5" id="myTabTable4">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr class="text-center">
                                                    <th class="p-0 w-50px">ID</th>
                                                    <th class="p-0 min-w-120px">Name</th>
                                                    <th class="p-0 min-w-100px">Email</th>
                                                    <th class="p-0 min-w-100px">Phone</th>
                                                    <th class="p-0 min-w-100px">Join Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr class="text-center">
                                                    <td class="px-5" >
                                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg" >{{ $user->id }}</a>
                                                    </td>
                                                    <td style="padding:15px 50px;">
                                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">{{ $user->name }}</a>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 d-block font-size-lg">{{ $user->email }}</span>
                                                    </td>
                                                     <td>
                                                        <span class="text-dark-75 d-block font-size-lg">{{ $user->phone }}</span>
                                                    </td>
                                                     <td>
                                                        <span class="text-dark-75 d-block font-size-lg">{{ \Carbon\Carbon::parse($user['created_at'])->format('M d Y') }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Tablet-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                <!--end::Tables Widget 4-->
                </div>
            </div>
            <!--end::Users Row-->     

        <!--begin::Users Row-->
            <div class="row">
                <div class="col-12">
                <!--begin::Tables Widget 4-->
                    <div class="card card-custom my-5">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Latest Voters Registered</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-1 pb-4">
                            <div class="tab-content mt-5" id="myTabTable4">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr class="text-center">
                                                    <th class="p-0 w-50px">ID</th>
                                                    <th class="p-0 min-w-120px">Name</th>
                                                    <th class="p-0 min-w-100px">Email</th>
                                                    <th class="p-0 min-w-100px">Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($voters as $voter)
                                                <tr class="text-center">
                                                    <td class="px-5" >
                                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg" >{{ $voter->id }}</a>
                                                    </td>
                                                    <td style="padding:15px 50px;">
                                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">{{ $voter->name }}</a>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 d-block font-size-lg">{{ $voter->email }}</span>
                                                    </td>
                                                     <td>
                                                        <span class="text-dark-75 d-block font-size-lg">{{ $voter->phone }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Tablet-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                <!--end::Tables Widget 4-->
                </div>
            </div>
            <!--end::Row-->     
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
    <!-- =============================END OF CONTENT======================-->

@endsection