<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

$job1 =  new Job('PHP Developer' ,'Esto es la descripcion de PHP DEVELOPER');
$job1->months = 16;

$job2 =  new Job('Pyhton ' , 'Esto es la descripcion de Pyhton  DEVELOPER' );
$job2->months = 23;

$job3 =  new Job(' ', 'Esto es la descripcion de Laravel & Vue.js DEVELOPER');
$job3->months = 14;

$job4 =  new Job('Laravel & Vue ', 'Esto es la descripcion de Laravel & Vue.js DEVELOPER');
$job4->months = 6;


$project1 = new Project('Project 1 ' , 'Description 1');




$jobs = [
  $job1 ,
  $job2 , 
  $job3,
  $job4
];

$projects = [
  $project1
];



function printElement( Printable $job){
  if($job->visible == false){
    return ; //LA PALABRA RETURN TIENE EL OBJETIVO DE TERMINAR LA FUNCION
  }
    echo '<li class="work-position">';
    echo   '<h5>'  . $job->getTitle() .' </h5>';
    echo  '<p>'  . $job->getDescription() . '<p>';
    echo  '<p>'  . $job->getDuracionAsString() . '<p>';  
    echo    '<strong>Achievements:</strong>';
    echo    '   <ul>';
    echo       '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo         '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo        ' <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo    '   </ul>';
    echo ' </li>';
  }
