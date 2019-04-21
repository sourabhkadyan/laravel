<!DOCTYPE html>
<html lang="en">
<head>

@include('backEnd.includes.head')
    <title>@yield('page-title')</title>
@yield('stylesheet')

</head>
<body id="page-top">
<div id="wrapper">

    @include('backEnd.includes.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

           @include('backEnd.includes.topNav')

            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">@yield('page-heading')</h1>
                </div>
                @yield('content')
            </div>
        </div>

    @include('backEnd.includes.footer')

    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

@include('backEnd.includes.script')
@yield('script')
</body>

</html>
