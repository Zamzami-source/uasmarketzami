<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    <link href="/Aziaadmin/assets/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/Aziaadmin/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/Aziaadmin/assets/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="/Aziaadmin/assets/lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="/Aziaadmin/assets/css/azia.css">

</head>

<body>
    @include('template._navbar')

    @yield('content')


    <script src="/Aziaadmin/assets/lib/jquery/jquery.min.js"></script>
    <script src="/Aziaadmin/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Aziaadmin/assets/lib/ionicons/ionicons.js"></script>
    <script src="/Aziaadmin/assets/lib/jquery.flot/jquery.flot.js"></script>
    <script src="/Aziaadmin/assets/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="/Aziaadmin/assets/lib/chart.js/Chart.bundle.min.js"></script>
    <script src="/Aziaadmin/assets/lib/peity/jquery.peity.min.js"></script>

    <script src="/Aziaadmin/assets/js/azia.js"></script>
    <script src="/Aziaadmin/assets/js/chart.flot.sampledata.js"></script>
    <script src="/Aziaadmin/assets/js/dashboard.sampledata.js"></script>
    <script src="/Aziaadmin/assets/js/jquery.cookie.js" type="text/javascript"></script>

</body>

</html>
