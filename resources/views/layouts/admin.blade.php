<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="{{ asset('assets/images/icons/favicon.png') }}"/>
    <title>
        E - Sunshine
    </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous"/>
    <link href="{{ asset('assets/css/nucleo-svg.css')  }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.5') }}" rel="stylesheet" />
    @yield('styles')
</head>
    <style>
        .fa-edit, .fa-trash, .fa-eye, .fa-plus, .fa-times, .fa-save{
            color: #67748e;
        }
        .fa-eye:hover{
            color: #2196f3;
        }
        .fa-plus:hover{
            color: blue;
        }
        .fa-edit:hover, .fa-save:hover{
            color: green;
        }
        .fa-trash:hover{
            color: red;
        }
        .fa-times:hover{
            color: red;
        }
        .text-back-index{
            color: #67748e;
        }
        .text-back-index:hover{
            color: #109525;
        }
        .breadcrumb-item.active {
            color: #109525;
        }
    </style>
    <body class="g-sidenav-show  bg-gray-100">

            @include('admin.admin-sidebar')

            <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

            <!-- Content -->
            <div class="container-fluid py-4">

                @yield('content')

                @include('admin.admin-footer')
            </div>
            <!-- End Of Content -->

        </main>

        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>


        <!-- Script For Scrollbar -->
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- End of Script For Scrollbar -->

        <script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.0.17/dist/flasher.min.js"></script>
        @yield('scripts')

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.5') }}"></script>
    </body>

</html>