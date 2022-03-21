<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="index.html">
            <img src="{{ asset('') }}assets/images/brand/logo.png" class="header-brand-img desktop-lgo"
                alt="Dayonelogo">
            <img src="{{ asset('') }}assets/images/brand/logo-white.png" class="header-brand-img dark-logo"
                alt="Dayonelogo">
            <img src="{{ asset('') }}assets/images/brand/favicon.png" class="header-brand-img mobile-logo"
                alt="Dayonelogo">
            <img src="{{ asset('') }}assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo"
                alt="Dayonelogo">
        </a>
    </div>
    <div class="app-sidebar3">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="{{ asset('') }}assets/images/users/16.jpg" alt="user-img"
                        class="avatar-xxl rounded-circle mb-1">
                </div>
                <div class="user-info">
                    <h5 class=" mb-2">{{auth()->user()->name}}</h5>
                    <span class="text-muted app-sidebar__user-name text-sm">App Developer</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">

            <li class="side-item side-item-category mt-4">Dashboards</li>
            @can('Manage-branch')
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('branches.index') }}">
                        <i class="fa fa-pagelines sidemenu_icon"></i>
                        <span class="side-menu__label">{{ trans('branches.Branches') }}</span>
                    </a>
                </li>
            @endcan
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">HR <span class="nav-list"></span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>

                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">HR Dashboard</a></li>
                    @can('Manage-department')
                    <li>
                        <a href="{{ route('departments.index') }}"
                            class="slide-item {{ request()->segment(count(request()->segments())) == 'departments' ? 'active' : '' }}">
                            {{ __('hr::hr.Departments') }}
                        </a>
                    </li>
                    @endcan
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                class="sub-side-menu__label">Employees</span><i
                                class="sub-angle fa fa-angle-right"></i></a>
                        @can('Manage-employee')
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{route('employees.index')}}">Employees List</a></li>
{{--                            <li><a class="sub-slide-item" href="hr-empview.html">View Employee</a></li>--}}
                            <li><a class="sub-slide-item" href="{{route('employees.create')}}">Add Employee</a></li>
                        </ul>
                        @endcan
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#">
                            <span class="sub-side-menu__label">
                                @lang('app.Attendance')
                            </span>
                            <i class="sub-angle fa fa-angle-right">
                            </i>
                        </a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{route('employees_attendences.index')}}">Attendance List</a></li>
{{--                            <li><a class="sub-slide-item" href="hr-attuser.html">Attendance By User</a></li>--}}
{{--                            <li><a class="sub-slide-item" href="hr-attview.html">Attendance View</a></li>--}}
{{--                            <li><a class="sub-slide-item" href="hr-overviewcldr.html">Overview Calender</a></li>--}}
{{--                            <li><a class="sub-slide-item" href="hr-attmark.html">Attendance Mark </a></li>--}}
{{--                            <li><a class="sub-slide-item" href="hr-leaves.html">Leave Settings</a></li>--}}
{{--                            <li><a class="sub-slide-item" href="hr-leavesapplication.html">Leave--}}
{{--                                    Applications</a></li>--}}
{{--                            <li><a class="sub-slide-item" href="hr-recentleaves.html">Recent Leaves </a></li>--}}
                        </ul>
                    </li>
                    <li><a href="hr-award.html" class="slide-item">Awards</a></li>
                    <li><a href="hr-holiday.html" class="slide-item">Holidays</a></li>
                    <li><a href="hr-notice.html" class="slide-item">Notice Board</a></li>
                    <li><a href="hr-expenses.html" class="slide-item">Expenses</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                class="sub-side-menu__label">Payroll</span><i
                                class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="hr-empsalary.html">Employee Salary</a></li>
                            <li><a class="sub-slide-item" href="hr-addpayroll.html">Add Payroll</a></li>
                            <li><a class="sub-slide-item" href="hr-editpayroll.html">Edit Payroll</a></li>
                        </ul>
                    </li>
                    <li><a href="hr-events.html" class="slide-item">Events</a></li>
                    <li><a href="hr-settings.html" class="slide-item">Settings</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                class="sub-side-menu__label">Setup</span><i
                                class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{route('departments.index')}}">{{trans('company.Add Department')}}</a></li>
                            <li><a class="sub-slide-item" href="{{route('job-titles.index')}}">{{trans('company.Add Job Title')}}</a></li>
{{--                            <li><a class="sub-slide-item" href="#"></a></li>--}}
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">User <span class="nav-list">Management</span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    @can('Manage-user')
                    <li><a href="{{ url('admin/users') }}" class="slide-item">Users</a></li>
                    @endcan
                    @can('Manage-role')
                    <li><a href="{{ url('admin/roles') }}" class="slide-item">Roles</a></li>
                    @endcan
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather  feather-users sidemenu_icon"></i>
                    <span class="side-menu__label">Employee <span class="nav-list">Dashboard</span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Employee Dashboard</a></li>
                    <li><a href="index2.html" class="slide-item">Dashboard</a></li>
                    <li><a href="{{route('attendances.index')}}" class="slide-item"> @lang('app.Attendance')</a></li>
                    <li><a href="{{route('apply-leaves.index')}}" class="slide-item">@lang('app.Apply Leaves') </a></li>
                    <li><a href="employee-myleaves.html" class="slide-item">My Leaves </a></li>
                    <li><a href="employee-payslips.html" class="slide-item">Payslips </a></li>
                    <li><a href="employee-expenses.html" class="slide-item">Expenses</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-clipboard sidemenu_icon"></i>
                    <span class="side-menu__label">Task<span class="nav-list">Dashboard</span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Task Dashboard</a></li>
                    <li><a href="index3.html" class="slide-item">Dashboard</a></li>
                    <li><a href="task-list.html" class="slide-item">Task List</a></li>
                    <li><a href="task-running.html" class="slide-item">Running Tasks</a></li>
                    <li><a href="task-hold.html" class="slide-item">OnHold Tasks</a></li>
                    <li><a href="task-complete.html" class="slide-item">Completed Tasks</a></li>
                    <li><a href="task-view.html" class="slide-item">View Task</a></li>
                    <li><a href="task-overclndr.html" class="slide-item">Overview Calendar</a></li>
                    <li><a href="task-board.html" class="slide-item">Task Board</a></li>
                    <li><a href="task-new.html" class="slide-item">New Task</a></li>
                    <li><a href="task-profile.html" class="slide-item">User Profile</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-book sidemenu_icon"></i>
                    <span class="side-menu__label">Project <span class="nav-list">Dashboard</span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Project Dashboard</a></li>
                    <li><a href="index4.html" class="slide-item">Dashboard</a></li>
                    <li><a href="project-list.html" class="slide-item">Project List</a></li>
                    <li><a href="project-view.html" class="slide-item">View Project</a></li>
                    <li><a href="project-overclndr.html" class="slide-item">Overview Calendar</a></li>
                    <li><a href="project-new.html" class="slide-item">New Project</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-user sidemenu_icon"></i>
                    <span class="side-menu__label">Client <span class="nav-list">Dashboard</span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Client Dashboard</a></li>
                    <li><a href="index5.html" class="slide-item">Dashboard</a></li>
                    <li><a href="client-list.html" class="slide-item">Client List</a></li>
                    <li><a href="client-view.html" class="slide-item">View Client</a></li>
                    <li><a href="client-new.html" class="slide-item">New Client</a></li>
                    <li><a href="client-profile.html" class="slide-item">User Profile</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-briefcase sidemenu_icon"></i>
                    <span class="side-menu__label">Job <span class="nav-list">Dashboard</span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Job Dashboard</a></li>
                    <li><a href="index6.html" class="slide-item">Dashboard</a></li>
                    <li><a href="job-list.html" class="slide-item">Job Lists</a></li>
                    <li><a href="job-view.html" class="slide-item">Job View</a></li>
                    <li><a href="job-applictaion.html" class="slide-item">Job Applications</a></li>
                    <li><a href="job-apply.html" class="slide-item">Apply Job</a></li>
                    <li><a href="job-new.html" class="slide-item">New Job</a></li>
                    <li><a href="job-user.html" class="slide-item">User Profile</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-headphones sidemenu_icon"></i>
                    <span class="side-menu__label">Support<span class="nav-list"> System</span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Support System</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                class="sub-side-menu__label">Landing Pages</span><i
                                class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="support-landing.html">Landing Page</a></li>
                            <li><a class="sub-slide-item" href="support-knowledge.html">Knowledge Page</a></li>
                            <li><a class="sub-slide-item" href="support-knowledgeview.html">Knowledge View</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                class="sub-side-menu__label">User Pages</span><i
                                class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="support-userdash.html">Dashboard</a></li>
                            <li><a class="sub-slide-item" href="support-editprofile.html">Profile</a></li>
                            <li class="sub-slide2">
                                <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span
                                        class="sub-side-menu__label2">Tickets</span><i
                                        class="sub-angle2 fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu2">
                                    <li><a href="support-ticketlist.html" class="sub-slide-item2">Ticket
                                            List</a></li>
                                    <li><a href="support-ticketactive.html" class="sub-slide-item2">Active
                                            Tickets</a></li>
                                    <li><a href="support-ticketclosed.html" class="sub-slide-item2">Closed
                                            Tickets</a></li>
                                    <li><a href="support-ticketcreate.html" class="sub-slide-item2">Create
                                            Ticket</a></li>
                                    <li><a href="support-ticketview.html" class="sub-slide-item2">View
                                            Ticket</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a href="#" class="sub-side-menu__item" data-bs-toggle="sub-slide"><span
                                class="sub-side-menu__label">Admin</span><i
                                class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="support-admindash.html">Dashboard</a></li>
                            <li><a class="sub-slide-item" href="support-admineditprofile.html">Edit Profile</a>
                            </li>
                            <li class="sub-slide2">
                                <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span
                                        class="sub-side-menu__label2">Tickets</span><i
                                        class="sub-angle2 fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu2">
                                    <li><a href="support-adminticketlist.html" class="sub-slide-item2">Ticket
                                            List</a></li>
                                    <li><a href="support-adminticketactive.html" class="sub-slide-item2">Active
                                            Tickets</a></li>
                                    <li><a href="support-adminticketclosed.html" class="sub-slide-item2">Closed
                                            Tickets</a></li>
                                    <li><a href="support-adminticketnew.html" class="sub-slide-item2">New
                                            Ticket</a></li>
                                    <li><a href="support-adminticketview.html" class="sub-slide-item2">View
                                            Ticket</a></li>
                                </ul>
                            </li>
                            <li><a class="sub-slide-item" href="support-admincustomer.html">Customers</a></li>
                            <li><a class="sub-slide-item" href="support-admincategories.html">Categories</a>
                            </li>
                            <li><a class="sub-slide-item" href="support-adminarticles.html">Articles</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a href="#" class="sub-side-menu__item" data-bs-toggle="sub-slide"><span
                                class="sub-side-menu__label">Agent</span><i
                                class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="support-agentdash.html">Dashboard</a></li>
                            <li class="sub-slide2">
                                <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span
                                        class="sub-side-menu__label2">Tickets</span><i
                                        class="sub-angle2 fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu2">
                                    <li><a href="support-agentticketlist.html" class="sub-slide-item2">Ticket
                                            List</a></li>
                                    <li><a href="support-agentticketactive.html" class="sub-slide-item2">Active
                                            Tickets</a></li>
                                    <li><a href="support-agentticketclosed.html" class="sub-slide-item2">Closed
                                            Tickets</a></li>
                                    <li><a href="support-agentticketview.html" class="sub-slide-item2">View
                                            Ticket</a></li>
                                </ul>
                            </li>
                            <li><a class="sub-slide-item" href="support-agentassign.html">Assigned
                                    Categories</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-settings sidemenu_icon"></i>
                    <span class="side-menu__label">Theme <span class="nav-list">settings</span></span><i
                        class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Theme-settings</a></li>
                    <li><a href="theme-settings-1.html" class="slide-item">Theme-style-1</a></li>
                    <li><a href="theme-settings-2.html" class="slide-item">Theme-style-2</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-airplay sidemenu_icon"></i>
                    <span class="side-menu__label">Admin</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Admin</a></li>
                    <li><a href="admin-general.html" class="slide-item">General Settings</a></li>
                    <li><a href="admin-api.html" class="slide-item">API Settings</a></li>
                    <li><a href="admin-role.html" class="slide-item">Role Access</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-slack sidemenu_icon"></i>
                    <span class="side-menu__label">Super Admin</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Super Admin</a></li>
                    <li><a href="index7.html" class="slide-item">Dashboard</a></li>
                    <li><a href="superadmin-company.html" class="slide-item">Companies</a></li>
                    <li><a href="superadmin-subscription.html" class="slide-item">Subscription Plans</a></li>
                    <li><a href="superadmin-invoices.html" class="slide-item">Invoices</a></li>
                    <li><a href="superadmin-admins.html" class="slide-item">Super Admins</a></li>
                    <li><a href="superadmin-settings.html" class="slide-item">Settings</a></li>
                    <li><a href="superadmin-role.html" class="slide-item">Role Access</a></li>
                </ul>
            </li>


        </ul>

    </div>
</aside>
