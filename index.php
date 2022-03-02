<?php
/* Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 */

require 'classes/Movie.php';

$title1 = 'Inception';
$genre1 = ['Action','Fantasy','Adventure'];
$poster1 = 'https://m.media-amazon.com/images/I/91Rc8cAmnAL._AC_SY679_.jpg';
$ratings1 = 4.5;
$cast1 = ['Leonardo Di Caprio','Cillian Murphy'];

$title2 = 'Lo Hobbit';
$genre2 = ['Epic','Fantasy','Adventure'];
$poster2 = 'https://static.posters.cz/image/750/locandine-film-in-plexiglass-lo-hobbit-one-sheet-i83386.jpg';
$ratings2 = 4.8;
$cast2 = ['Martin Freeman','Ian McKellen'];

$movie1 = new Movie($title1,$genre1,$poster1,$ratings1,$cast1);
$movie2 = new Movie($title2,$genre2,$poster2,$ratings2,$cast2);

var_dump($movie1);
var_dump($movie2);

$movie2->setRatings(4.1);
$movie2->setPoster(null);
$movie2->setTitle('Lo Hobbit due');

var_dump($movie2);
?>