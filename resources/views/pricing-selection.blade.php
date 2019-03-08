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

<body class="font-serif p-6">
    <div class="container mx-auto">
        <div class="flex">
            @include('_partials.plan', ['name' => 'Monthly'])
            @include('_partials.plan', ['name' => 'Yearly'])
            @include('_partials.plan', ['name' => 'Lifetime'])
            @include('_partials.plan', ['name' => 'Teams'])

        </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html> 