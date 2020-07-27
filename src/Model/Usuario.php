<?php

namespace Inst\Model;

class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $senha;


    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setTelefone(string $telefone): self
    {
        $this->telefone = $telefone;
        return $this;
    }


    public function setSenha($senha):self
    {
        $this->senha = $senha;
        return $this;
    }

    public function setId($id):self
    {
        $this->id = $id;
        return $this;
    }
}
