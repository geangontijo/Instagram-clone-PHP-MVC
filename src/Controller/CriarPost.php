<?php

namespace Inst\Controller;

use Inst\Database\Conexao;
use Inst\Helper\FlashMessageTrait;

class CriarPost implements InterfaceView
{
    use FlashMessageTrait;

    public function getHtml(): string
    {
        $conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_STRING);
        $idUsuario = $_SESSION['id_usuario'];
        $curtidas = 0;
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d h:i:s');

        if(!$conteudo){
            $this->flash('Escreva alguma coisa no post', 'error');
            header('Location: /feed');
            exit();
        }

        $query = "INSERT INTO Postagem (id_usuario, texto, data_postagem, curtidas) VALUES ('$idUsuario', '$conteudo', '$data', $curtidas)";
        $conexao = Conexao::getConexao();
        if($conexao->exec($query)) {
            $this->flash('Postagem publicada com sucesso!', 'success');
        }
        header('Location: /feed');
    }
}