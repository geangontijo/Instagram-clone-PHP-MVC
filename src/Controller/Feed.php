<?php

namespace Inst\Controller;

use Inst\Database\Conexao;
use Inst\Helper\HtmlView;
use Inst\Model\Postagem;
use Inst\Model\Usuario;

class Feed implements InterfaceView
{
    use HtmlView;
    public function getHtml(): string
    {
        $conexao = Conexao::getConexao();
        $query = "SELECT p.id, p.texto, p.data_postagem, u.nome FROM Postagem p
        INNER JOIN Usuarios u on (p.id_usuario = u.id)
        
        LIMIT 20";
        $stmt = $conexao->query($query);
        $postagens = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        echo $this->render('Feed', ['posts' => $postagens]);
    }
}