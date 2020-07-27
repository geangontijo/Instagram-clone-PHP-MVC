<?php

namespace Inst\Model;

class Postagem
{
    private int $id;
    private Usuario $usuario;
    private string $texto;
    private string $data_postagem;
    private Curtida $curtidas;

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto): self
    {
        $this->texto = $texto;
        return $this;
    }

    public function getDataPostagem()
    {
        return $this->data_postagem;
    }

    public function setDataPostagem($data_postagem): self
    {
        $this->data_postagem = $data_postagem;
        return $this;
    }

    public function getCurtidas():Curtida
    {
        return $this->curtidas;
    }

    public function setCurtidas(Curtida $curtidas): self
    {
        $this->curtidas = $curtidas;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id):self
    {
        $this->id = $id;
        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): void
    {
        $this->usuario = $usuario;
    }
}