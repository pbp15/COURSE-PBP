<?php


        $name =  'hector';
        //var_dump(name); con eso imprimmos el nombre de la variable y la longitud
        var_dump($name);

        //HAY DOS TIPOS DE CADENAS :CON COMILLAS SIMPLES ('') Y COMILLAS DOBLES ("")

        $lastName = 'Benitez';
        //para comillas simples lo concatenamos con un punto la variable
        $FirstName = 'Juan Pablo . $lastName';

        //las comillas dobles intentan interpretar todo lo que este dentro de ellas
        $FirstName = "Juan Pablo  $lastName";
        echo $FirstName ;
        

        //arreglo 1 -ejemplo 1
        $jobs = [
                'PHP  developer',
                'Python dev',
                'Devops'
        ];
        

        var_dump($jobs);

        //arreglo 2 - ejemplo 2 
        //llave - valor 

        $lenguajes= [
                0 => 'PHP ',
                1 => 'Js',
                2=> 'Angular',
       'titile ' => 'developer'
        ];
        

        var_dump($lenguajes);

        //arreglo - ejemplo 3 
        //arreglos dentro de arreglos

        $peliculas = [
                [
                        'title ' => 'El duende'      
                ],
                [
                        'title ' => 'Batman'      
                ],
                [
                        'title ' => 'Spider-man'      
                ],
        ];

        // $peliculas[0]['title']

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
</head>
<body>

<ul>
          <!-- <?php
        //   $idx = 0;
        //        do { 
                // echo '<li class="work-position">';
                // echo   '<h5>'  . $jobs[$idx]['title']. ' </h5>';
                // echo  '<p>'  . $jobs[$idx ]['description'] . '<p>';
                // echo    '<strong>Achievements:</strong>';
                // echo    '   <ul>';
                // echo       '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                // echo         '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                // echo        ' <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                // echo    '   </ul>';
                // echo ' </li>';
        //               $idx = $idx + 1 ; 
        //     } while($idx < 3);

        //   ?>
        //   </ul>
        -->

</body>
</html>
//osea ahi cuando no sea visible el continue le dice que continue con el siguiente linea de codigo