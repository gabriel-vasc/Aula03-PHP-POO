<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02- POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'caneta.php';
            
            
            $c1 = new Caneta;
            
            $c1->modelo = "Bic Crista";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            //$c1->carga = 99;
            //$c1->tampada = true;
            
            $c1->rabiscar();
            $c1->destampar();
            
            print_r($c1);
                        
        ?>
        </pre>
    </body>
</html>
