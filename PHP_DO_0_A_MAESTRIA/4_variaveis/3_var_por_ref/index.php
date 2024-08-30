<?php

   $x = 10;
   $y =& $x;

   echo $x;
   echo "<br>";
   echo $y;
   echo "<br>";

   $y = 15;

   echo "Atribuicao apos ref <br>";
   echo $x;
   echo "<br>";
   echo $y;
   echo "<br>";

   $x = 20;

   echo "Atribuicao apos ref 2<br>";
   echo $x;
   echo "<br>";
   echo $y;
   echo "<br>";

   $nome = "rafael";
   $nome2 =& $nome;

   echo $nome;
   echo "<br>";
   echo $nome2;
   echo "<br>";

   $nome2 = "joao";

   echo $nome;
   echo "<br>";
   echo $nome2;
   echo "<br>";


