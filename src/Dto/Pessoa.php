<?php

namespace BaraoVlask\TesteBagyComBr\Dto;

abstract class Pessoa
{
    protected string $tipo;
    protected int $id;
    protected string $nome;

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Pessoa
     */
    public function setId(int $id): Pessoa
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Pessoa
     */
    public function setNome(string $nome): Pessoa
    {
        $this->nome = $nome;
        return $this;
    }
}