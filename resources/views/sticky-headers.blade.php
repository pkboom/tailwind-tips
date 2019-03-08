<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-grey-lighter font-sans antialiased">
    <div class="w-128 md:w-2/3 mx-auto px-8">
        @foreach ($index as $key => $index)
            <div class="flex flex-col md:flex-row items-center md:items-baseline mb-4">
                <div class="sticky pin-t w-full md:w-64 bg-grey-light md:bg-transparent text-center rounded py-3 mb-4 font-semibold text-lg">
                    {{$letter = chr($key)}}
                </div>
                <div class="flex flex-wrap md:w-4/5">
                    @foreach ($index as $item)
                        <span class="border rounded-full border-grey-dark mr-2 p-2 mb-2 hover:bg-blue-light hover:text-white hover:border-blue-light">{{ $item }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>