<?php

namespace App\Entity;

/**
 * @Entity
 * @Table(name="usuario")
 */
class Usuario
{
    /**
     * @Id
     * @Column(type="integer", nullable=true)
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @Column(type="string", unique=true, length=100, nullable=true)
     */
    private $email;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    private $senha;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    private $lembrar_token;

    /**
     * @Column(type="datetime", length=100, nullable=true)
     */
    private $dt_criado;

    /**
     * @Column(type="datetime", length=100, nullable=true)
     */
    private $dt_atualizado;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Usuario
     */
    public function setNome(String $nome): Usuario
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param mixed $email
     * @return Usuario
     */
    public function setEmail(String $email): Usuario
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getSenha(): ?string
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     * @return Usuario
     */
    public function setSenha(String $senha): Usuario
    {
        $this->senha = $senha;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLembrarToken(): ?bool
    {
        return $this->lembrar_token;
    }

    /**
     * @param mixed $lembrar_token
     * @return Usuario
     */
    public function setLembrarToken(bool $lembrar_token): Usuario
    {
        $this->lembrar_token = $lembrar_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtCriado(): ?string
    {
        return $this->dt_criado;
    }

    /**
     * @param mixed $dt_criado
     * @return Usuario
     */
    public function setDtCriado(String $dt_criado): Usuario
    {
        $this->dt_criado = $dt_criado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtAtualizado(): ?string
    {
        return $this->dt_atualizado;
    }

    /**
     * @param mixed $dt_atualizado
     * @return Usuario
     */
    public function setDtAtualizado(String $dt_atualizado): Usuario
    {
        $this->dt_atualizado = $dt_atualizado;
        return $this;
    }

    public function hidratador($data)
    {
        isset($data['nome']) ? $this->setNome($data['nome']) : null;
        isset($data['email']) ? $this->setEmail($data['email']) : null;
        isset($data['senha']) ? $this->setSenha($data['senha']) : null;
    }
}