<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Singleton Laravel</title>
    </head>
    <body>
        <div>
            <h1>Début incrément</h1>
            <h2>{{ $a->increment() }}</h2>
            <h2>{{ $b->increment() }}</h2>
            <h2>{{ $a->increment() }}</h2>
            <h1>Fin incrément</h1>
        </div>
    </body>
</html>