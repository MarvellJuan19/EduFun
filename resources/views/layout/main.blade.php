<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun</title>
    @include('links.linkbootstrap')
</head>
<body>

    @include('partials.navbar')

    <div class="content container-fluid px-0">
        @yield('container')
    </div>

    @include('partials.footer')

</body>
</html>