
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta charset="utf-8" />
        <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        App favicon
        <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <meta charset="utf-8" />
                <title>{{config('app.name')}} - Dashboard</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="{{config('app.name')}}" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">



         <!-- App css -->
         <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body id="body" class="dark-sidebar">

        <div id="app">


        @include('layouts.backend.components.leftsidebar')

        {{-- Header  --}}

        @include('layouts.backend.components.header')

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    @yield('content')
                </div>
                @include('layouts.backend.components.footer')

            </div>
            <!-- end page content -->
        </div>
    </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->



        <script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{asset('assets/pages/analytics-index.init.js')}}"></script>
        <script>

  // window.appname={!! json_encode(config('app.name'),true)!!};window.primarycolor="#1e204f";
       @auth
              window.user = {!! json_encode(Auth::user(), true) !!};
          //  window.permissions = {!! json_encode(Auth::user()->permissions->pluck('name'), true) !!};
          //  let roles_permissions = {!! json_encode(Auth::user()->getPermissionsViaRoles()->pluck('name'), true) !!};
          //  roles_permissions.map((item)=>{
          //     if(permissions.indexOf(item) === -1) {
          //       permissions.push(item);
          //     }
          //  });
           window.permissions = ['dashboard-view','user-management-dropdown','users-view','services-view','listing-view'];
       @else
           window.user = [];
           window.permissions = ['dashboard-view','user-management-dropdown','users-view','services-view','listing-view'];
       @endauth
       @if(session('login')=="true" || session('login')==true)
       setTimeout(function() {
       // toastr['success'](
       // 'You have successfully logged in to {{config('app.name')}}.',
       // '👋 Welcome {{Auth::user()->name}}!', {
       //     closeButton: true,
       //      tapToDismiss: false
       // }
       // );
       }, 1000);
       @php
       session(['login' => '']);
       @endphp
       @endif
  </script>
        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <!-- Scripts -->

    </body>
    <!--end body-->
</html>
