<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

    </head>
    <body>
        <div style="width: 500px; height: 500px; margin: 50px auto; position: relative;">
            <p style="text-align: center;">
                <img src="http://localhost:8000/api/c128/?width=550&code=123456789012">
            </p>
            <p style="text-align: center;">
                <img src="http://localhost:8000/api/ean13/?width=550&code=123456789012">
            </p>
            <p style="text-align: center;">
                <img src="http://localhost:8000/api/qr/?size=7&code=https%3A%2F%2Fwww.urlencoder.org%2F">
            </p>

        </div>
    </body>
</html>
