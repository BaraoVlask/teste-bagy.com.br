<?php

namespace BaraoVlask\TesteBagyComBr\Dto;

use BaraoVlask\TesteBagyComBr\Interfaces\Exportavel;

class PessoaJuridica extends Pessoa implements Exportavel
{
    private string $nomeFantasia;
    private string $cnpj;

    public function __construct()
    {
        $this->tipo = 'juridica';
    }

    /**
     * @return string
     */
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    /**
     * @param string $nomeFantasia
     * @return PessoaJuridica
     */
    public function setNomeFantasia(string $nomeFantasia): PessoaJuridica
    {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    /**
     * @return string
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * @param string $cnpj
     * @return PessoaJuridica
     */
    public function setCnpj(string $cnpj): PessoaJuridica
    {
        $this->cnpj = $cnpj;
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
            'Nome fantasia' => $this->nomeFantasia,
            'CNPJ' => $this->cnpj,
        ];
    }
}