<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
        <link rel="stylesheet" href="{!! asset('sbadmin/vendor/font-awesome/css/font-awesome.min.css')!!}" >
        <link rel="stylesheet" href="{!! asset('sbadmin/vendor/datatables/dataTables.bootstrap4.css')!!}" >
        <link rel="stylesheet" href="{!! asset('sbadmin/css/sb-admin.min.css') !!}">
        <title>Twinlincoln</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        @include('layout.header')
        {{-- @yield('content') --}}
    </body>

    <script src="{!! asset('js/app.js') !!}"></script>

    <script src="{!! asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
    <script src="{!! asset('sbadmin/vendor/chart.js/Chart.min.js') !!}"></script>
    <script src="{!! asset('sbadmin/vendor/datatables/jquery.dataTables.js') !!}"></script>
    <script src="{!! asset('sbadmin/vendor/datatables/dataTables.bootstrap4.js') !!}"></script>
    <script src="{!! asset('sbadmin/js/sb-admin.min.js') !!}"></script>
    <script src="{!! asset('sbadmin/js/sb-admin-datatables.min.js') !!}"></script>
    <!-- <script src="{!! asset('sbadmin/js/sb-admin-charts.min.js') !!}"></script> -->
</html>