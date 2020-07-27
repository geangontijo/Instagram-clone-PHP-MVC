<?php

namespace Inst\Controller;

use Inst\Database\Conexao;
use Inst\Helper\FlashMessageTrait;
use Inst\Helper\HtmlView;
use Inst\Model\Usuario;

class RealizaLogin implements InterfaceView
{
    use HtmlView;
    use FlashMessageTrait;

    public function getHtml(): string
    {

        $nome = filter_input(INPUT_POST,'user',FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $query = "SELECT id, nome, email, telefone,senha FROM Usuarios where nome = '$nome'";
        $conexao = Conexao::getConexao();
        $stmt = $conexao->query($query);
        $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

        $usuario = new Usuario();
        // hidata dados
        foreach ($resultado as $key => $indice){
            $set = 'set' . ucfirst($key);
            $usuario->$set($indice);
        }
        if(!empty($resultado)){

            if(password_verify($senha , $resultado['senha'])){
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $usuario->getId();
                $_SESSION['nome_usuario'] = $usuario->getNome();
                header('Location: /feed');
            }else{
                $this->flash('Senha incorreta', 'error');
                header('Location: /login');
            }


        }else{
            $this->flash('Login incorreto', 'error');
            header('Location: /login');
        }
    }
}