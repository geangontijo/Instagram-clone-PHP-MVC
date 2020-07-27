<?php

namespace Inst\Controller;

use Inst\Database\Conexao;
use Inst\Helper\HtmlView;

class UsuarioLogin implements InterfaceView
{
    use HtmlView;

    public function getHtml(): string
    {
        echo $this->render('login');
    }
}
