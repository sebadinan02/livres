<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Type</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>


        </style>
    </head>
    <body>
        <header>
            <div class="container0" style="display inline">
                <p><a href="/generaux">generaux</a></p>
                <p><a href="/litterature">litterature</a></p>
                <p><a href="/encyclopedie">encyclopedie</a></p>
                <p><a href="/sciences">sciences</a></p>
                <p><a href="/autres">autres</a></p>
            </div>
            </header>
        <div class="container" style="text-align: center">
        <form action="/type" method="post">
            @csrf
            Type<br/><br/>
            <input type="text" name="nom" placeholder="nom"> <br/><br/>
           <input type="text" name="edition" placeholder="edition"><br/><br/>
           <input type="text" name="annee" placeholder="annee"><br/><br/>
            <input type="text" name="ISBN" placeholder="ISBN"><br/><br/>
            <input type="submit" value="valider"><br/>
        </form>
    </div>
    </body>
</html>
