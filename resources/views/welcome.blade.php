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

    <div class="container flex">
        <div class="left py-8 px-4 mt-3 ml-10 mr-10 w-3/4 rounded-xl ">
            <img src="/images/logo.png" alt="Image" class=" w-full h-full">

        </div>
        <div class="right py-2 px-20 mt-3 m-full w-full rounded-xl bg-gray-400">
            <div class="contentHeader text-xl underline">
                <a href="/dashboard">
                    <h1>Build Your WebPortfolio Now</h1>
                </a>
            </div>
            <div class="content text-3xl mx-0 my-14">
                Hello users buiding a portfolio key thing to show case your abilty in your respective industry.
                Here you can build your portfolio which is dynamic with the crud functionality.
                After building a portflio you will get url of portfolio which will contain your respective information.
            </div>
        </div>
    </div>

    <div class="footer w-full bg-black text-white content-center mt-4 py-5 flex">
        <h1 class="ml-10 pl-20">Subscribe our service</h1>
        <a href="/subscribe" class="button bg-green-300 border border-black rounded-xl px-3 ml-10">Subscrie</a>
        <h1 class="button border border-black bg-gray-300 rounded-xl px-3 ml-10">Help</h1>
    </div>

</body>

</html>
