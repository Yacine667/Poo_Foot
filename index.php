<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poo Football</title>
</head>
<body>

<?php


spl_autoload_register(function ($class_name) {
    require 'class/' . $class_name . '.php';
});


$pays1 = new Country('France');
$pays2 = new Country('Espagne');
$pays3 = new Country('Angleterre');
$pays4 = new Country('Italie');

$equipe1 = new Team('PSG',$pays1);
$equipe2 = new Team('Racing Club Stras',$pays1);
$equipe3 = new Team('Real Madrid',$pays2);
$equipe4 = new Team('Fc Barcelone',$pays2);
$equipe5 = new Team('Manchester United',$pays3);
$equipe6 = new Team('Juventus',$pays4);

$joueur1 = new Player('Mbappe','Kylian','1996-06-11',$pays1);
$joueur2 = new Player('Messi','Lionel','1988-07-08',$pays2);
$joueur3 = new Player('Neymar','Junior','1990-01-03',$pays2);
$joueur4 = new Player('Ronaldo','Cristiano','1989-02-05',$pays3);

$career1 = new Career($joueur1,$equipe1,'2017');
$career2 = new Career($joueur2,$equipe4,'2004');
$career3 = new Career($joueur2,$equipe1,'2021');
$career4 = new Career($joueur4,$equipe3,'2009');
$career5 = new Career($joueur4,$equipe6,'2018');
$career6 = new Career($joueur4,$equipe5,'2021');
$career7 = new Career($joueur3,$equipe4,'2013');
$career8 = new Career($joueur3,$equipe1,'2017');



$pays1->showCountry(); 
$pays2->showCountry();
$pays3->showCountry();
$pays4->showCountry();


$equipe1->showTeam();
$equipe2->showTeam();
$equipe3->showTeam();
$equipe4->showTeam();
$equipe5->showTeam();
$equipe6->showTeam();



?>
    
</body>
</html>