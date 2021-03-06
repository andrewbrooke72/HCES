<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/"><i class="icon-speedometer"></i> Home</a>
            </li>
            @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('employees.management'))
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#hr"><i class="icon-heart"></i> Human Resource</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employees.index') }}"><i
                                    class="icon-people"></i> Employees</a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(auth()->user()->hasPermission('testpaper.management'))
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#sysvar"><i class="icon-notebook"></i> Exam</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('testpaper.index') }}"><i
                                    class="icon-book-open"></i> Test papers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('modules.index') }}"><i
                                    class="icon-book-open"></i> Modules</a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()->hasAnyPermission(['sysvar.management', 'user.management']))
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#sysvar"><i class="icon-settings"></i> System
                        Admin</a>
                    <ul class="nav-dropdown-items">
                        @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('user.management'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}"><i class="icon-user"></i>
                                    Users</a>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('sysvar.management'))
                            <li class="nav-item nav-dropdown">
                                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-key"></i> System
                                    Variables</a>
                                <ul class="nav-dropdown-items">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('benefits.index') }}"><i
                                                class="icon-support"></i> Benefits</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('departments.index') }}"><i
                                                class="icon-flag"></i> Departments</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('shifts.index') }}"><i
                                                class="icon-clock"></i> Shifts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('positions.index') }}"><i
                                                class="icon-layers"></i> Positions</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
