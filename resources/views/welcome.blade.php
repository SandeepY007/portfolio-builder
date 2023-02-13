<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello User</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-300">

    @include('_navbar')

    <div class="container flex ">
        <div class="left bg-gray-600 py-8 px-4 mt-3 ml-10 mr-2 w-1/2 rounded-xl">
            <h1>Image</h1>
        </div>
        <div class="right bg-purple-400 py-8 px-8 mt-3 ml-2 w-3/4 rounded-xl">
            <h1>This is the main content of the Portfolio</h1>
        </div>
    </div>

</body>

</html>
