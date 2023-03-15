<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio Builder</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-300">

    @include('_navbar')

    <div class="container flex">
        <div class="left py-8 px-4 mt-3 ml-10 mr-10 w-3/4 rounded-xl ">
            <img src="/images/logo.png" alt="Image" class=" w-full h-full">

        </div>
        <div class="right py-2 px-20 mt-3 m-full w-full rounded-xl bg-gray-400">
            <div class="contentHeader text-xl mt-20 underline">
                <a href="/dashboard">
                    <h1>Build Your WebPortfolio Now</h1>
                </a>
            </div>
            <div class="content text-3xl mx-0 my-14">
                Hello users buiding a portfolio is key thing to show case your abilty in your respective industry.
                Here you can build your portfolio which is dynamic with the crud functionality.
                After building a portflio you will get url of portfolio which will contain your respective information.
            </div>
        </div>
    </div>
    <div class="bg-black text-white mt-2 flex justify-center space-x-3 py-5">
        <p>Subscribe Our Service</p>
        <a href="#" class="button border border-black bg-gray-200 rounded-xl px-3 ">Subscribe</a>
    </div>
    

</body>

</html>
