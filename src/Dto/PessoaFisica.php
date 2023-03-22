<?php

namespace BaraoVlask\TesteBagyComBr\Dto;


use BaraoVlask\TesteBagyComBr\Interfaces\Exportavel;

class PessoaFisica extends Pessoa implements Exportavel
{
    private string $cpf;
    private string $sobrenome;
    private string $dataDeNascimento;

    public function __construct()
    {
        $this->tipo = 'fisica';
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     * @return PessoaFisica
     */
    public function setCpf(string $cpf): PessoaFisica
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string
     */
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    /**
     * @param string $sobrenome
     * @return PessoaFisica
     */
    public function setSobrenome(string $sobrenome): PessoaFisica
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataDeNascimento(): string
    {
        return $this->dataDeNascimento;
    }

    /**
     * @param string $dataDeNascimento
     * @return PessoaFisica
     */
    public function setDataDeNascimento(string $dataDeNascimento): PessoaFisica
    {
        $this->dataDeNascimento = $dataDeNascimento;
        return $this;
    }

    /**
     * @return array
     */
    public function dadosExportaveis(): array
    {
        return [
            'ID' => $this->id,
            'Nome' => $this->nome,
            'Sobrenome' => $this->sobrenome,
            'CPF' => $this->cpf,
            'Data de nascimento' => $this->dataDeNascimento,
        ];
    }
}