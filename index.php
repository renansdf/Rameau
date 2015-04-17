<!DOCTYPE html>
<html ng-app="rameauApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rameau</title>
        <meta name="description" content="A Harmonizer and chord progression tool for musicians">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/angular.min.js"></script>
    </head>
    <body ng-controller="rameauController">

        <header class="center">
            <h1 class="title">Um Gerador Progressões de Acorde e Campos Harmônicos</h1>
        </header>

        <section id="modifiers">
            <ul class="mode-selector">
                <div class="column-33">
                    <ul>
                        <li ng-repeat="modo in rameauModfiers.modes" ng-click="rameauSelectedModfiers.mode = modo.name" ng-mouseover="showDescription(modo.description)" class="modos"><p>{{modo.name}}</p></li>
                    </ul>
                    <ul>
                        <li ng-repeat="grau in rameauModfiers.graus" ng-click="rameauSelectedModfiers.grau = grau.name" ng-mouseover="showDescription(grau.description)" class="graus"><p>{{grau.name}}</p></li>
                    </ul>
                    <ul>
                        <li ng-repeat="tipo in rameauModfiers.tipos" ng-click="rameauSelectedModfiers.tipo = tipo.name" ng-mouseover="showDescription(tipo.description)" class="tipos"><p>{{tipo.name}}</p></li>
                    </ul>
                </div>
            </ul>
            <div class="column-33">
                <p>{{currentDescription}}</p>
            </div>
            <div class="column-33">
                <ul class="selected-modes">
                    <li class="mod-selecionado"><p>{{rameauSelectedModfiers.mode}}</p></li>
                    <li class="mod-selecionado"><p>{{rameauSelectedModfiers.grau}}</p></li>
                    <li class="mod-selecionado"><p>{{rameauSelectedModfiers.tipo}}</p></li>
                </ul>
            </div>
        </section>

        <section class="center" id="notes">
            <ul>
                <li ng-repeat="note in rameauNotas" ng-class="itemClass(note)" ng-click="select(note);generateProgression(note)"><p>{{note}}</p></li>
            </ul>
        </section>

        <section class="center" id="results">
            <ul>
                <li ng-repeat="m in output">{{m}}</li>
            </ul>
        </section>

        <footer class="wrapper center">
            <h3>Azuos.</h3>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </body>
</html>