<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="./admin/img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="admin/css/style.css">
    <!-- Scripts -->
    <title>JMB Admin</title>
</head>

<body class="bg-gray-100">
    @include('admin.components.navbar')
    <div class="h-screen flex flex-row flex-wrap">
        @include('admin.components.sidebar')
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            @yield('admincontent')
        </div>
    </div>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="admin/js/scripts.js"></script>
</body>
