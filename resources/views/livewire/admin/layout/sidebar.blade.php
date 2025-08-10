<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('home')}}">
                <img alt="logo" src="{{asset('assets/images/logo.png')}}" class="header-logo">
                <span class="logo-name">{{__('attributes.admin_panel')}}</span>
            </a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="user-image" src="{{asset('assets/images/user-1.png')}}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{$user->full_name}}</div>
                <div class="user-role">مدیر</div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i data-feather="monitor"></i><span>{{__('attributes.dashboard')}}</span>
                </a>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i data-feather="briefcase"></i><span>{{__('attributes.companies')}}
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('admin.companies.index')}}">{{__('attributes.companies_list')}}</a></li>
                    <li><a class="nav-link" href="{{route('admin.companies.create')}}">{{__('attributes.companies_create')}}</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>