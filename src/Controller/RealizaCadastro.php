<?php

namespace Inst\Controller;

use Inst\Database\Conexao;
use Inst\Helper\FlashMessageTrait;

class RealizaCadastro implements InterfaceView
{
    use FlashMessageTrait;

    public function getHtml(): string
    {
        $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $telefone = filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        if(!$nome){
            $this->flash('Você deve preencher o campo nome','error');
            header('Location: /login');
            exit();
        }
        if($email === false){
            $this->flash('Voce deve colocar um e-mail válido','error');
            header('Location: /login');
            exit();
        }
        if(!$telefone){
            $this->flash('Voce deve preencher o campo telefone','error');
            header('Location: /login');
            exit();
        }
        if(!$senha){
            $this->flash('Você deve preencher o campo senha','error');
            header('Location: /login');
            exit();
        }
        $conexao = Conexao::getConexao();

        # VERIFICA SE USUÁRIO JÁ EXISTE
        $query = "SELECT * FROM Usuarios where nome = '$nome' and email = '$email'";
        $stmt = $conexao->query($query);
        $result = $stmt->fetchAll();

        if(empty($result)){
        // PERSISTE CADASTRO
        $senha = password_hash($senha, PASSWORD_ARGON2I);
        $query = "INSERT INTO Usuarios (nome, email, telefone, senha) VALUES('$nome','$email','$telefone','$senha')";
        $conexao->exec($query) ? $this->flash('Cadastro Realizado', 'success'): $this->flash('Erro ao realizar o cadastro', 'error');
        header('Location: login');

        }else{
            $this->flash('Cadastro já existe', 'error');
        }
    }
}