<?php

namespace Inst\Helper;

trait FlashMessageTrait
{
    public function flash(string $mensagem, string $tipo)
    {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipoMensagem'] = $tipo;
    }
}