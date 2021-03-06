<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{config('app.name')}} | @yield('title')</title>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('admin.includes.navbar')
            @include('admin.includes.sidebar')

            <div class="content-wrapper">
                @yield('content')
            </div>

            @include('admin.includes.footer')

        </div>

        <!-- REQUIRED SCRIPTS -->
        <script src="{{asset('js/app.js')}}"></script>
        @yield('scripts')

        <script>
            $(document).ready( function () {
                $('#orderTable').DataTable(
                    {
                        "stateSave": true
                    }
                );
                $('#defTable').DataTable(
                    {
                        "order": [[0, 'desc']],
                        "stateSave": true
                    }
                );
                $('#atkTable').DataTable(
                    {
                        "order": [[0, 'desc']],
                        "stateSave": true
                    }
                );
            } );
        </script>
    </body>
</html>
