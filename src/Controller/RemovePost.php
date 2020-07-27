<?php

namespace Inst\Controller;

use Inst\Database\Conexao;
use Inst\Helper\FlashMessageTrait;
use Inst\Helper\HtmlView;

class RemovePost implements InterfaceView
{
    use FlashMessageTrait;

    public function getHtml(): string
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $query = "DELETE FROM Postagem where id = $id";
        $conexao = Conexao::getConexao();
        if($conexao->exec($query)){
            $this->flash('Remoção concluida', 'success');
            header('Location: /feed');
        }
    }
}