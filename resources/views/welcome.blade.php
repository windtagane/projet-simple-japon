<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Honnigo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    html, body {
        /*background-color: #CD1036;*/
        background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('../../img/bg_honnigo.jpeg');
        /*background: center url("../../img/bg_honnigo.jpeg");*/
        background-size: cover;
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 80px;
    }

    .links > a {
        color: #fff;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .links > a:hover {
        text-shadow: 0px 1px 1px #fff;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    p {
        font-size: 25px;
        letter-spacing: .2rem;
        margin-bottom: 3rem;
    }

    .btn {
        color: #fff;
        background-color: #CD1036;
        display:inline-block;
        padding:0.35em 1.2em;
        border:0.1em solid #FFFFFF;
        margin:0 0.3em 0.3em 0;
        border-radius:0.12em;
        box-sizing: border-box;
        text-decoration:none;
        font-weight:300;
        color:#FFFFFF;
        text-align:center;
        transition: all 0.2s;
    }

    .btn a {
        vertical-align: center;
    }

    .btn:hover{
        color:#000000;
        background-color:#FFFFFF;
    }

    @media all and (max-width:30em){
        .btn{
              display:block;
              margin:0.4em auto;
         }
    } 

} 


</style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Accueil</a>
            @else
            <a href="{{ route('login') }}">Se connecter</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">S'inscrire</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                HONNIGO
            </div>

            <p>Partager votre Japon</p>

            @if (Route::has('register'))
            <div class="links">
                @auth
                <a class="btn" href="{{ url('/home') }}">Consulter la liste des parcours</a>
                @else
                <a class="btn" href="{{ route('register') }}">S'inscrire</a>
                @endauth
            </div>
            @endif

        </div>
    </div>
</body>
</html>
