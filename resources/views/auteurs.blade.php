<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auteurs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>


        </style>
    </head>
    <body>
        <header>
            <div class="container0" style="display inline">
                <p><a href="/France">France</a></p>
                <p><a href="/Afrique">Afrique</a></p>
                <p><a href="/Monde">Monde</a></p>
                <p><a href="/type">type</a></p>
                <p><a href="/pays">pays</a></p>
            </div>
            </header>
        <div class="container" style="text-align: center">
        <form action="/auteurs" method="post">
            @csrf
            Auteurs<br/><br/>
            <input type="text" name="nom" placeholder="nom"> <br/><br/>
           <input type="text" name="prenoms" placeholder="prenoms"><br/><br/>
           <input type="text" name="pays" placeholder="pays"><br/><br/>
            <input type="text" name=""><br/><br/>
            <input type="submit" value="valider"><br/>
        </form>
    </div>
    </body>
</html>
