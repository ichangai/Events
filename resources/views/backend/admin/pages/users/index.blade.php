@extends('backend.admin.layouts.master')

@section('content')
    <div class="row" style="margin: 50px 0">
        <div class="col-xl-12">
            <!--begin::Table Widget 6-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bold font-size-h4 text-dark-75">View All Users</span>
                    </h3>
                    {{-- <form action="" type="get" action=""> --}}
                    <div class="form-group col-4" style="float: left;">
                        <div class="input-icon input-icon-right">
                            <input type="text" class="form-control" name="" id="bal_search"
                                placeholder="Search for user" />
                            <span><i class="flaticon2-search-1 icon-md"></i></span>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-head-custom table-vertical-center"
                            id="kt_advance_table_widget_1">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Joined Date</th>
                                </tr>
                            </thead>
                            <tbody id="all_data">
                                @forelse ($users as $user)
                                    <tr class="text-center">
                                        <td class="pl-0">
                                            <a href="#"
                                                class="text-dark-75 text-center text-hover-primary mb-1 font-size-lg">{{ $user->id }}</a>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#"
                                                class="text-dark-75 text-center text-hover-primary mb-1 font-size-lg">{{ $user->name }}</a>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#"
                                                class="text-dark-75 text-center text-hover-primary mb-1 font-size-lg">{{ $user->email }}</a>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary mb-1 font-size-lg">{{ $user->phone }}</a>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary mb-1 font-size-lg"> {{ \Carbon\Carbon::parse($user['created_at'])->format('M d Y') }}
                                            </a>
                                        </td>
                                        <td class="pr-0 text-center"
                                            style="display: flex; justify-content: center; align-items:center; ">
                                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                                class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"> <span
                                                    class="svg-icon svg-icon-primary svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/General/Visible.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <path
                                                                d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path
                                                                d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span> </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.user.delete', $user->id) }}"
                                                class="btn btn-icon btn-light btn-hover-info btn-sm mx-3"> <span
                                                    class="svg-icon svg-icon-info svg-icon-2x"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <path
                                                                d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span> </a>
                                        </td>
                                    </tr>
                                @empty
                                    <div>
                                        No Users registered yet
                                    </div>
                                @endforelse
                            </tbody>
                            <tbody id="search_data"></tbody>
                        </table>
                    </div>
                    <!--end::Table-->

                </div>
                <!--end::Body-->
            </div>
            <!--end::Table Widget 6-->
        </div>
    </div>
@endsection
