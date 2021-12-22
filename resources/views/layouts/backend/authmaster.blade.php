
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Auth | {{config('app.name')}}</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Sign in to continue to {{config('app.name')}}" name="description" />
            <meta content="Wasit Mirani" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.ico">



     <!-- App css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('assets/images/p-1.png'); background-size: cover; background-position: center center;">
   <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            @yield('content')
        </div>
    </div>
    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>
