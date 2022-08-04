<!-- =========== MAIN DASHBOARD ======================== -->
<div class="d-flex flex-column flex-root" style="padding:0 5px;">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!-- ====================WRAPPER============================-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">


            <!-- ====================TOP HEADER NAVBAR =============================-->
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Logo-->
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu"
                            class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                            <!--begin::Header Nav-->
                            <ul class="menu-nav">
                                <li class="menu-item menu-item-active" aria-haspopup="true">
                                    <a href="{{ route('admin.dashboard') }}" class="menu-link">
                                        <span class="menu-text">Dashboard</span>
                                    </a>
                                </li>

                        
                        <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="menu-text">Category</span>
                                <span class="menu-desc"></span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="{{ route('admin.category.create') }}" class="menu-link">
                                                <span style="">
                                                    <i class="fas fa-user text-success mr-5"></i>
                                                </span>
                                                <span class="menu-text">Create a category</span>
                                            </a>
                                        </li>
                                    </li>
                                    <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                      <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.category.index') }}" class="menu-link">
                                           <span style="">
                                             <i class="fas fa-users text-success mr-5"></i>
                                           </span>
                                           <span class="menu-text">View All Categories</span>
                                        </a>
                                      </li>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Events</span>
                            <span class="menu-desc"></span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.event.create') }}" class="menu-link">
                                            <span style="">
                                                <i class="fas fa-user text-success mr-5"></i>
                                            </span>
                                            <span class="menu-text">Create an Event</span>
                                        </a>
                                    </li>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('admin.event.index') }}" class="menu-link">
                                       <span style="">
                                         <i class="fas fa-users text-success mr-5"></i>
                                       </span>
                                       <span class="menu-text">View All Events</span>
                                    </a>
                                  </li>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Users</span>
                            <span class="menu-desc"></span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.user.create') }}" class="menu-link">
                                            <span style="">
                                                <i class="fas fa-user text-success mr-5"></i>
                                            </span>
                                            <span class="menu-text">Create a User</span>
                                        </a>
                                    </li>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('admin.user.index') }}" class="menu-link">
                                       <span style="">
                                         <i class="fas fa-users text-success mr-5"></i>
                                       </span>
                                       <span class="menu-text">View all Users</span>
                                    </a>
                                  </li>
                                </li>
                            </ul>
                        </div>
                    </li>

                    
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Sponsors</span>
                            <span class="menu-desc"></span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.sponsor.create') }}" class="menu-link">
                                            <span style="">
                                                <i class="fas fa-user text-success mr-5"></i>
                                            </span>
                                            <span class="menu-text">Create a Sponsor</span>
                                        </a>
                                    </li>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('admin.sponsors.index') }}" class="menu-link">
                                       <span style="">
                                         <i class="fas fa-users text-success mr-5"></i>
                                       </span>
                                       <span class="menu-text">View all Sponsors</span>
                                    </a>
                                  </li>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Brokers</span>
                            <span class="menu-desc"></span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.broker.create') }}" class="menu-link">
                                            <span style="">
                                                <i class="fas fa-user text-success mr-5"></i>
                                            </span>
                                            <span class="menu-text">Create a Broker</span>
                                        </a>
                                    </li>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="" class="menu-link">
                                       <span style="{{ route('admin.broker.index') }}">
                                         <i class="fas fa-users text-success mr-5"></i>
                                       </span>
                                       <span class="menu-text">View all Brokers</span>
                                    </a>
                                  </li>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->

        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Search-->
            <!--begin::Search-->
            <div class="dropdown mr-1" id="kt_quick_search_toggle">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg">
                        <span class="svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/General/Search.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                        <!--begin:Form-->
                        <form method="get" class="quick-search-form">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/General/Search.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24"
                                                        height="24" />
                                                    <path
                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search..." />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Scroll-->
                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325"
                            data-mobile-height="200">
                        </div>
                        <!--end::Scroll-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Search-->
            <!--end::Search-->

            <!--begin::Chat-->
            <div class="topbar-item mr-1">
                <div class="btn btn-icon btn-hover-transparent-white btn-clean btn-lg" data-toggle="modal"
                    data-target="#kt_chat_modal">
                    <span class="svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Chat6.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.4862 18L12.7975 21.0566C12.5304 21.54 11.922 21.7153 11.4386 21.4483C11.2977 21.3704 11.1777 21.2597 11.0887 21.1255L9.01653 18H5C3.34315 18 2 16.6569 2 15V6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H14.4862Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6 7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H6C5.44772 9 5 8.55228 5 8C5 7.44772 5.44772 7 6 7ZM6 11H11C11.5523 11 12 11.4477 12 12C12 12.5523 11.5523 13 11 13H6C5.44772 13 5 12.5523 5 12C5 11.4477 5.44772 11 6 11Z"
                                    fill="black" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
            </div>
            <!--end::Chat-->

            <!--begin::User-->
            <div class="topbar-item mr-3">
                <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2"
                    id="kt_quick_user_toggle">
                    <div class="symbol symbol-circle symbol-30 bg-white overflow-hidden">
                        <div class="symbol-label">
                            <img alt="Logo"
                                src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/media/svg/avatars/001-boy.svg"
                                class="h-75 align-self-end" />
                        </div>
                    </div>
                </div>
            </div>
            <!--end::User-->

            <!--========== LOGOUT =============-->
            <div class="topbar-item mr-1">
                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="btn btn-success font-weight-bold mr-2">
                    <span class="svg-icon">Log Out</span>
                </a>
                <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
            </div>
            <!--========== END OF LOGOUT =============-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
<!-- ====================END OF TOP HEADER NAVBAR =============================-->
