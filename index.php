<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rameau</title>
        <meta name="description" content="A Harmonizer and chord progression tool for musicians">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <header class="w-2 center">
            <h1 class="title">Rameau</h1>
        </header>

        <section id="pitch" class="options w-6 center">
            <ul id="notas">
                <li data-nota="C">C</li>
                <li data-nota="D">D</li>
                <li data-nota="E">E</li>
                <li data-nota="F">F</li>
                <li data-nota="G">G</li>
                <li data-nota="A">A</li>
                <li data-nota="B">B</li>
            </ul>
            <ul id="semitons">
                <li data-modificador="#">#</li>
                <li data-modificador="b">b</li>
            </ul>
        </section>

        <section id="modifiers" class="options w-6 center">
            <ul>
                <li data-show="diatonic">Diatonic</li>
            </ul>
            <ul id="diatonic">
                <li data-modificador="maj" >Major</li>
                <li data-modificador="min" >Minor</li>
                <li data-modificador="nat">Natural</li>
            </ul>
        </section>

        <section id="results">
            <ul>
                <li><p>placeholder</p></li>
            </ul>
        </section>

        <footer class="wrapper">
            <h3>By Azuos</h3>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </body>
</html>