<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased font-sans">
    <section class="text-white signup-banner py-0">
        <div class="container mx-auto">
            <div class="h-full flex items-center justify-end">
                <div class="w-1/2">
                    <h3 class="text-3xl mb-6">
                        It's Kinda Like Netflix for Your Career!
                    </h3>

                    <p class="mb-10">
                        Learn practical, modern web development, through expert screencasts. Most video tutorials are boring. These aren't. Ready
                        to binge?
                    </p>

                    <p>
                        <a href="#" class="py-3 px-6 rounded-full border border-white text-white hover:text-white hover:bg-blue hover:border-blue">Get Started!</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html> 