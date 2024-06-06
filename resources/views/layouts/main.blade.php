<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rpl-Laravel</title>
    <link rel="icon" href="https://i.pinimg.com/564x/1e/4b/72/1e4b72dc5a9906b86b01b3774dad180c.jpg" type="image/png">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="./node_modules/preline/dist/preline.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</head>

<body>
    <div id="app">
        <div class="main wrapper">
            @include('shared.header')
            <div class="main content">
                @yield('content')
            </div>
            @include('shared.footer')
        </div>
    </div>
</body>

</html>