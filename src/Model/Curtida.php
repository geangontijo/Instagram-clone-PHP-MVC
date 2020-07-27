<?php

namespace Inst\Model;

class Curtida
{
    private Usuario $usuario;
    private Postagem $postagem;

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): self
    {
        $this->usuario = $usuario;
        return $this;
    }


    public function getPostagem(): Postagem
    {
        return $this->postagem;
    }

    public function setPostagem(Postagem $postagem): self
    {
        $this->postagem = $postagem;
        return $this;
    }
}