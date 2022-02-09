<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Facade Laravel</title>
    </head>
    <body>
        <div>
            <h1>Voiture :</h1>
            <h2>{{ $voiture->getMarque() }}</h2>
            <h1>Concession : {{$nomConcession}}</h1>
            <h2><pre>{{ $concession->getConcession() }}</pre></h2>
            <h1>Facture :</h1>
            <h2><pre>{{ $facture->getFacture() }}</pre></h2>
        </div>
    </body>
</html>