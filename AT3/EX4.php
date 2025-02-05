<?php

$values = ["joao",19,"T404"];

$keys = ["nome","idade","turma"];

$combine = array_combine($keys,$values);

var_dump($combine);