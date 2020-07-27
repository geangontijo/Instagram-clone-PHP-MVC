<?php

use Inst\Controller\{CriarPost, Feed, Logout, Perfil, RealizaCadastro, RealizaLogin, RemovePost, UsuarioLogin};

return array(
    '/login' => UsuarioLogin::class,
    '/realiza-cadastro' => RealizaCadastro::class,
    '/realiza-login' => RealizaLogin::class,
    '/feed' => Feed::class,
    '/logout' => Logout::class,
    '/criar-post' => CriarPost::class,
    '/remove-post' => RemovePost::class,
    '/perfil' => Perfil::class
);