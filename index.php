<?php
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

//print_r($categorias);

$nome = 'Eduardo';
$idade = 8;

// var_dump($nome);
// var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    // echo 'Infantil';
    for ($i=0; $i < count($categorias); $i++) 
    { 
       if ($categorias[$i] == 'Infantil') 
       {
          echo "O nadador ", $nome, " compete na categoria Infantil!!!";
       }
    }
} else if($idade >= 13 && $idade <=18){
    // echo 'Adolescente';
    for ($i=0; $i < count($categorias); $i++) { 
        if ($categorias[$i] == 'Adolescente') {
         echo "O nadador ", $nome, " compete na categoria Adolescente!!!";
        }
     }
} elseif ($idade > 18 && $idade < 60) {
    // echo 'Adulto';
    for ($i=0; $i < count($categorias); $i++) { 
        if ($categorias[$i] == 'Adulto') {
         echo "O nadador ", $nome, " compete na categoria Adulto!!!";
        }
     }
} else {
//    echo 'Idoso';
  for ($i=0; $i < count($categorias); $i++) { 
     if ($categorias[$i] == 'Idoso') {
       echo "O nadador ", $nome, " compete na categoria Idoso!!!";
     }
  }
}









