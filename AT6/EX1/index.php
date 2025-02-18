<?php

include "UserPDO.php";

$db = new PDO('sqlite:database.sqlite');

$b = new UserPDO();
$b->menu();

