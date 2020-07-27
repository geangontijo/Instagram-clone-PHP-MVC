<?php

use Inst\Controller\InterfaceView;
use Inst\Controller\UsuarioLogin;

require_once __DIR__. '/../vendor/autoload.php';
session_start();
$requisicao = $_SERVER['PATH_INFO'];

$rotas = require __DIR__ . '/../config/routes.php';

$classeControlador = $rotas[$requisicao];

/** @var InterfaceView $controller */
$controller = new $classeControlador();

$controller->getHtml();