<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Factory Laravel</title>
    </head>
    <body>
        <div>
            <h1>Marques :</h1>
            <h2>{{ $opel->getMarque() }}</h2>
            <h2>{{ $renault->getMarque() }}</h2>
        </div>
    </body>
</html>