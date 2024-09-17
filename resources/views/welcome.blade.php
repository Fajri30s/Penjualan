<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .button {
        background-color: blue; 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .button2 {background-color: green;}
        h1 {text-align: center;}
        div {text-align: center;}
        </style>
        <title>FJR Web</title>

       
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50" style="background-color:black;">
    <h1 style="color:white;">Selamat Datang</h1>
    <img src="https://cdn.images.express.co.uk/img/dynamic/143/590x/Final-Fantasy-7-Remake-Part-2-1411470.webp?r=1616029003234" alt="logo" width="250" height="200" style="display: block; margin-left:auto; margin-right:auto;">
                    <div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                <button class="button button2"><a href="{{ route('login') }}" style="color:white;">Log in</a></button>
                                
                            (Route::has('register'))
                                <button class="button"><a href="{{ route('register') }}"style="color:white;">Register</a></button>
                            </nav>
                        @endif
                    </div>
                    </header>
    </body>
</html>
