<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <form action="/update/{{$companies->id}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="{{$companies->name}}">
            <input type="text" name="code" placeholder="{{$companies->code}}">
            <input type="text" name="pvm_code" placeholder="{{$companies->pvm_code}}">
            <input type="text" name="adress" placeholder="{{$companies->adress}}">
            <input type="text" name="telephone" placeholder="{{$companies->telephone}}">
            <input type="text" name="email" placeholder="{{$companies->email}}">
            <input type="text" name="CEO" placeholder="{{$companies->CEO}}">
            <button type="submit">Update</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>
</html>