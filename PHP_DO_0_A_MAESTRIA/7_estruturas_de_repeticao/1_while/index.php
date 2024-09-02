<?php
    
    // A definicao do contador
    $x = 0;

    //Inicio / Definicap da estrutura
    while($x < 10){

        // Corpo do loop
        echo $x . "<br>";

        //Incremento do contador
        $x++;
    }

    echo "continuacao... <br><hr>";


    // A definicao do contador
    $y = 0;

    //Inicio / Definicap da estrutura
    while($y <= 10){

        // Corpo do loop
        echo $y . "<br>";

        //Incremento do contador
        $y += 2; // $y = $y + 2
    }

    echo "continuacao... <br><hr>";


        // A definicao do contador
        $z = 10;

        //Inicio / Definicap da estrutura
        while($z > 0){
    
            // Corpo do loop
            echo $z . "<br>";
    
            //Incremento do contador
            $z--; // $z = $z - 1
        }
    
        echo "continuacao... <br><hr>";


        // A definicao do contador
        $a = 10;

        //Inicio / Definicap da estrutura
        while($a > 0){
    
            // Corpo do loop
            if($a % 2 != 0){
                echo $a . "<br>";
            }  
                
            //Incremento do contador
            $a--; // $a = $a - 1
        }
    
        echo "continuacao... <br><hr>";