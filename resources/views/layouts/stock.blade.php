<html
@if(app()->getLocale() == "ar") dir=rtl @endif
lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>

<head>
    <title>Product Management</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>

            </style>
                @yield('styles')
</head>
<body>

<table style='background-color:white;width:90%;margin:auto'>
    <tr style="height: 150px; vertical-align:top;">
        <td>
            @yield('content')
        </td>
    </tr>
    <tr>
        <td>CopyRights &copy; 2024 Alla rights reserved ...</td>
    </tr>
</table>

<script>
    $("#lstLangues").on("change",function(){
        var locale = $(this).val();
        window.location.href = "/changeLocale/"+locale;
    })
</script>

    @yield('scripts')
</body>
</html>