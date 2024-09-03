<?php

    function velocidadeMaxima($vel){
        if(is_int($vel)){
            echo "O carro atinge a velocidade maxima de $vel km/h <br>";
        } else {
            echo "Passe um valor inteiro <br>";
        }
    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);

    // Nao pode
    // velocidadeMaxima();

    echo "Teste continuando... <br>";

    $velocidade = 125;

    velocidadeMaxima($velocidade);

    // PHP ignora parametro desnecessario
    velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste");

    //Mais parametros
    function descreverAnimal($nome, $raca){
        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bob", "Bulldog");
    descreverAnimal("Neguinho", "Tomba-Lata");

    // Parametros têm que estar em ordem
    descreverAnimal("Poodle", "Tita");

    //Poucos parametros
    //descreverAnimal("Neguinho");