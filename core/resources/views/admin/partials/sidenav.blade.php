<div class="sidebar {{ sidebarVariation()['selector'] }} {{ sidebarVariation()['sidebar'] }} {{ @sidebarVariation()['overlay'] }} {{ @sidebarVariation()['opacity'] }}"
     data-background="{{getImage('assets/admin/images/sidebar/2.jpg','400x800')}}">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="{{route('admin.dashboard')}}" class="sidebar__main-logo"><img
                    src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="@lang('image')"></a>
            <a href="{{route('admin.dashboard')}}" class="sidebar__logo-shape"><img
                    src="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}" alt="@lang('image')"></a>
            <button type="button" class="navbar__expand"></button>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item {{menuActive('admin.dashboard')}}">
                    <a href="{{route('admin.dashboard')}}" class="nav-link ">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title">@lang('Dashboard')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item  {{menuActive('admin.city.index')}}">
                    <a href="{{route('admin.city.index')}}" class="nav-link"
                       data-default-url="{{ route('admin.city.index') }}">
                        <i class="menu-icon las la-city"></i>
                        <span class="menu-title">@lang('Manage City') </span>
                    </a>
                </li>


                 <li class="sidebar-menu-item  {{menuActive('admin.location.index')}}">
                    <a href="{{route('admin.location.index')}}" class="nav-link"
                       data-default-url="{{ route('admin.location.index') }}">
                        <i class="menu-icon las la-location-arrow"></i>
                        <span class="menu-title">@lang('Manage Location') </span>
                    </a>
                </li>

                <li class="sidebar-menu-item  {{menuActive('admin.blood.index')}}">
                    <a href="{{route('admin.blood.index')}}" class="nav-link"
                       data-default-url="{{ route('admin.blood.index') }}">
                        <i class="menu-icon las la-syringe"></i>
                        <span class="menu-title">@lang('Blood Group') </span>
                    </a>
                </li>

                 <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.donor*',3)}}">
                        <i class="menu-icon las la-user"></i>
                        <span class="menu-title">@lang('Manage Donor') </span>
                        @if(0 < $pending_donor_count)
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        @endif
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.donor*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.donor.index')}} ">
                                <a href="{{route('admin.donor.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('All')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.donor.pending')}} ">
                                <a href="{{route('admin.donor.pending')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Pending')</span>
                                    @if($pending_donor_count)
                                        <span
                                            class="menu-badge pill bg--primary ml-auto">{{$pending_donor_count}}</span>
                                    @endif
                                </a>
                            </li>

                             <li class="sidebar-menu-item {{menuActive('admin.donor.approved')}} ">
                                <a href="{{route('admin.donor.approved')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Approved')</span>
                                </a>
                            </li>

                             <li class="sidebar-menu-item {{menuActive('admin.donor.banned')}} ">
                                <a href="{{route('admin.donor.banned')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Banned')</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


{{--                <li class="sidebar-menu-item  {{menuActive('admin.subscriber.index')}}">--}}
{{--                    <a href="{{route('admin.subscriber.index')}}" class="nav-link"--}}
{{--                       data-default-url="{{ route('admin.subscriber.index') }}">--}}
{{--                        <i class="menu-icon las la-thumbs-up"></i>--}}
{{--                        <span class="menu-title">@lang('Subscribers') </span>--}}
{{--                    </a>--}}
{{--                </li>--}}


                <li class="sidebar__menu-header">@lang('Settings')</li>

                <li class="sidebar-menu-item {{menuActive('admin.setting.index')}}">
                    <a href="{{route('admin.setting.index')}}" class="nav-link">
                        <i class="menu-icon las la-life-ring"></i>
                        <span class="menu-title">@lang('General Setting')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('admin.setting.logo.icon')}}">
                    <a href="{{route('admin.setting.logo.icon')}}" class="nav-link">
                        <i class="menu-icon las la-images"></i>
                        <span class="menu-title">@lang('Logo & Favicon')</span>
                    </a>
                </li>

{{--                <li class="sidebar-menu-item {{menuActive('admin.extensions.index')}}">--}}
{{--                    <a href="{{route('admin.extensions.index')}}" class="nav-link">--}}
{{--                        <i class="menu-icon las la-cogs"></i>--}}
{{--                        <span class="menu-title">@lang('Extensions')</span>--}}
{{--                    </a>--}}
{{--                </li>--}}


                <li class="sidebar-menu-item {{menuActive('admin.frontend.manage.pages')}}">
                    <a href="{{route('admin.frontend.manage.pages')}}" class="nav-link ">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title">@lang('Manage Pages')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.frontend.sections*',3)}}">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title">@lang('Manage Section')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.frontend.sections*',2)}} ">
                        <ul>
                            @php
                               $lastSegment =  collect(request()->segments())->last();
                            @endphp
                            @foreach(getPageSections(true) as $k => $secs)
                                @if($secs['builder'])
                                    <li class="sidebar-menu-item  @if($lastSegment == $k) active @endif ">
                                        <a href="{{ route('admin.frontend.sections',$k) }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">{{__($secs['name'])}}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- sidebar end -->
