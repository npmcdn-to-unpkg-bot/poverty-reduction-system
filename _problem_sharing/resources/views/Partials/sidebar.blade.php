<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>
                    @if(Auth::check())
                        <a href="{{url((Auth::user()->isdonor == 1) ? '/donner' : '/needy')}}">
                        {{(Auth::user()->localUser->firstname)}}
                        </a>
                    @endif
                </p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        @if(Auth::check())

            {{--user is donor--}}
            @if(Auth::user()->isdonor == 1)
                @include('Partials.Sidebars.donor')

            {{--user is needy--}}
            @else
                @include('Partials.Sidebars.needy')

            @endif

        @endif

    </section>
    <!-- /.sidebar -->
</aside>