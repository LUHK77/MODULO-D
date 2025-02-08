<?php
// Essa atividade foi bem mal feita, foi mal tava com sono nesse dia
$palavras1 = ["Dava pra ", "eu nao ", "se pa ", "era dentro de "];
$palavras2 =["Davi jones","idosa de mayo", "orfanato", "dia um de setembro"];

$combinar = 
$combine = function($palavras1,$palavras2){
    $array = [];
    for($i = 0;$i < count($palavras1);$i++){
      $array[$i] = ("$palavras1[$i]" . "$palavras2[$i]");
    }
    return $array;
};

$pala = $combine($palavras1,$palavras2);

foreach($pala as $palavra){
    echo "Resultado = $palavra\n";
}