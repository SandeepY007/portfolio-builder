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
        <div class="left py-8 px-4 mt-3 ml-10 mr-2 w-1/2 rounded-xl">
            <h1><img src="/images/logo.png" alt="Image"></h1>
            <div class="aboutMe text-center">
                Hello this is Sandeep.
            </div>
        </div>
        <div class="right py-8 px-8 mt-3 ml-2 w-3/4 rounded-xl bg-purple-300">
            <div class="contentHeader text-xl underline">
                <a href="/dashboard"><h1>Build Your WebPortfolio Now</h1></a>
            </div>
            <div class="content text-3xl mx-0 my-14">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, quisquam reiciendis sit beatae
                obcaecati odio. Nesciunt, nulla delectus corporis rerum quae vel tempora consectetur officiis assumenda
                nemo sit asperiores quis qui laboriosam. Deleniti dolores delectus autem exercitationem pariatur! Facere
                dolor dolore provident cum inventore doloribus quis! Est, nemo! Placeat cumque ad sint quae architecto,
                impedit maxime!
            </div>
        </div>
    </div>

    <div class="footer w-full bg-black text-white text-center mt-4 py-5">
        <h1>This is the content of the footer</h1>
    </div>

</body>

</html>
