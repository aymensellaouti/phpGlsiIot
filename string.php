<?php

$chaine = '30/04/2021';
$result = explode('/', $chaine);
var_dump($result);
var_dump(implode('-',$result));