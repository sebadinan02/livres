<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>


        </style>
    </head>
     </head>
     
    <body>
       
    <body>

        <div class="container" style="text-align: center">
        <form action="/admin" method="post">
            @csrf
            Accueil <br/><br/>
            <input type="text" name="nom" placeholder="nom"> <br/><br/>
           <input type="text" name="prenom" placeholder="prenom"><br/><br/>
           <input type="text" name="email" placeholder="email"><br/><br/>
            <input type="text" name="password" placeholder="password"><br/><br/>
            <input type="text" name="phone" placeholder="phone"><br/><br/>
            <input type="submit" value="valider"><br/>
        </form>
    </div>
    </body>
</html>
