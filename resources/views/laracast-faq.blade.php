<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="/css/laracast-faq.css">
</head>
<body class="bg-grey-lighter antialiased">
    <div id="app">
        <div class="container">
            <div class="w-3/5 mx-auto">
                @foreach ($faq as $question)
                    <question :question="{{ json_encode($question) }}"></question>
                @endforeach
                @for ($i = 0; $i < 10; $i++)
                    <question :question="{{ json_encode($question) }}"></question>
                @endfor
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>