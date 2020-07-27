<?php

namespace Inst\Controller;

use Inst\Helper\FlashMessageTrait;

class Logout implements InterfaceView
{
    use FlashMessageTrait;

    public function getHtml(): string
    {
        session_destroy();
        $this->flash('Logout realizado', 'success');
        header('Location: /login');
    }
}