<?php

namespace App;

require_once './App/vendor/autoload.php';

$productClass = new \App\Model\ProductClass();
$productClass->setName_product("Furadeira de Impacto Profissional EOS MaxPro 1/2 polegada 750W 110v - 127V");
$productClass->setDescription_product("A Furadeira de Impacto 1/2pol EOS MaxPro é a melhor aliada para obras profissionais ou domésticas");
$productClass->setDate_Insert_product("2020-07-24 03:04:03");

var_dump($productClass);
