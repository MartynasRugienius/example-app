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
        <form action="/create" method="POST">
            @csrf
            <input type="text" name="name">
            <input type="text" name="code">
            <input type="text" name="pvm_code">
            <input type="text" name="adress">
            <input type="text" name="telephone">
            <input type="text" name="email">
            <input type="text" name="CEO">
            <button type="submit">Create</button>
        </form>
    </body>
</html>
