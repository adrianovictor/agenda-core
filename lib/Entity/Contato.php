<?php

namespace Agenda\Core\Entity;

class Contato
{
    private $id;
    private $data_cadastro;
    private $nome;
    private $email;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDataCadastro() {
        return $this->data_cadastro;
    }

    public function setDataCadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}
