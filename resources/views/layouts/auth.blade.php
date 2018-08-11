@if(!Auth::guard('student')->check() && !Auth::guard('teacher')->check())
            <div class="dropdown" style="float: right; width: 80px;">
                <button class="dropbtn">Login</button>
                <div class="dropdown-content">
                    @if(!Auth::guard('student')->check())<a href="{{ route('student_get_login') }}">Student</a>@endif
                    @if(!Auth::guard('teacher')->check())<a href="{{ route('teacher_get_login') }}">Admin</a>@endif
                </div>
            </div>
        @endif

        @if(Auth::guard('student')->check() || Auth::guard('teacher')->check())
            <div class="dropdown" style="float: right; width: 80px;">
                <button class="dropbtn">Logout</button>
                <div class="dropdown-content">
                    @if(Auth::guard('student')->check())<a href="{{ route('student_get_logout') }}">Student</a>@endif
                    @if(Auth::guard('teacher')->check())<a href="{{ route('teacher_get_logout') }}">Admin</a>@endif
                </div>
            </div>
        @endif
