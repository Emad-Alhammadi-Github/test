<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset("/css/admin/Admin.css") }}>
    @yield('css')
    <title>Admin</title>
</head>
<body>
    @include('AdminPages.Drower')
    <div id="body">
        <div id="Nav">
            <h1>Dashborad</h1>
            <h1>Mustafa</h1>
        </div>
        <div id="Content">
            @yield('content')
        </div>
    </div>
</body>
</html>
