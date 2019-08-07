<?php

require ('vendor/autoload.php');
require ('App/HomeAutoload/autoload.php'); //partie de l'autoload maison

include ('template.html');

use App\TestTrait\uneClasse;
use App\Shapes\Circle;

echo '<h1>Pratique du Trait en PHP</h1>';
$classe = new uneClasse('<br>Je suis une classe sans méthode qui utilise un trait.<br>');
echo $classe;
$classe->testTrait();

echo '<h1>Pratique des namespaces avec un autoload maison</h1>';
$classeA = new App\HomeAutoload\A('<br><p>Je suis une classe autoloadée</p>');
echo $classeA;

echo '<h1>Exercice: formes géométriques</h1><br>';
$circle = new Circle(new \App\Shapes\Point(50,50),"#6600FF");
echo($circle);
echo '<p>On appelle la classe SVGRenderer pour dessiner le cercle:</p><br>';
$svgCircle = new \App\Shapes\SVGFactory($circle);
echo($svgCircle->getShapeRender());
$square = new \App\Shapes\Square(new \App\Shapes\Point(50,50),"#00CC33");
echo '<br>';
echo($square);
echo '<br><p>On appelle la classe SVGRenderer pour dessiner le carré:</p>';
$svgSquare = new \App\Shapes\SVGFactory($square);
echo($svgSquare->getShapeRender());
?>
