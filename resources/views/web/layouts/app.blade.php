<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="JMB Packaging - printing and Manufactoring">
    <link href="web/assets/images/favicon/favicon.png" rel="icon">
    <title>JMB Packaging - printing and Manufactoring</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cRubik:400,500,700&display=swap">
    <link rel="stylesheet" href="web/assets/css/libraries.css">
    <link rel="stylesheet" href="web/assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        @include('web.components.header')
        @yield('content')
        <!-- Footer -->
        @include('web.components.footer')
    </div>



    <script data-cfasync="false" src="web/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="web/assets/js/jquery-3.3.1.min.js"></script>
    <script src="web/assets/js/plugins.js"></script>
    <script src="web/assets/js/main.js"></script>
</body>

</html>
