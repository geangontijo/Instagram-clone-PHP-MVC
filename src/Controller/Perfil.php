<?php

namespace Inst\Controller;

use Inst\Helper\HtmlView;

class Perfil implements InterfaceView
{
    use HtmlView;

    public function getHtml(): string
    {
        echo $this->render('Perfil');
    }
}