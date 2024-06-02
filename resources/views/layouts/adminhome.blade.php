<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

    <!-- Remixicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">

    <!-- Flowbite -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->

    <title>Dhistoire Admin</title>

    @livewireStyles
</head>

<body class="bg-gray-100">


    <!-- start navbar -->
    @include('layouts.include.admin.navbar')
    <!-- end navbar -->


    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">

        <!-- start sidebar -->
        @include('layouts.include.admin.sidebar')
        <!-- end sidbar -->

        <!-- strat content -->
        @yield('content')
        <!-- end content -->

    </div>
    <!-- end wrapper -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <!-- end script -->

    <!-- Flowbite -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> -->

    @livewireScripts

    @stack('script')
</body>

</html>