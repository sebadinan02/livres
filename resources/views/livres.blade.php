<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livres</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>


        </style>
    </head>
    <body>

        <div class="container" style="text-align: center">
        <form action="/livres" method="post">
            @csrf
            Livres<br/><br/>
            <input type="text" name="titre" placeholder="titre"> <br/><br/>
           <input type="text" name="edition" placeholder="edition"><br/><br/>
           <input type="text" name="annee" placeholder="annee"><br/><br/>
            <input type="text" name="type" placeholder="type"><br/><br/>
            <input type="submit" value="valider"><br/>
        </form>
    </div>
    </body>
</html>
