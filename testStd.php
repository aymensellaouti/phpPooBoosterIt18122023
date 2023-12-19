<?php 
 $todo = json_decode('{
    "userId": 1,
    "id": 1,
    "title": "delectus aut autem",
    "completed": false
  }');
  $todo->update = "j'ai mis à jour mon Todo";
  foreach ($todo as $cle => $valeur) {
    echo "attribu : $cle, valeur: $valeur".PHP_EOL;
  }