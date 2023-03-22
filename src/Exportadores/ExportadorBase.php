<?php

namespace BaraoVlask\TesteBagyComBr\Exportadores;

use BaraoVlask\TesteBagyComBr\Interfaces\Exportador;
use BaraoVlask\TesteBagyComBr\Interfaces\Exportavel;

abstract class ExportadorBase implements Exportador
{
    /**
     * @var Exportavel[]
     */
    protected array $exportaveis;

    private string $path;
    private string $nomeDoArquivo;

    /**
     * @param Exportavel $exportavel
     */
    public function addDadosExportaveis(Exportavel $exportavel): void
    {
        $this->exportaveis[] = $exportavel;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return ExportadorBase
     */
    public function setPath(string $path): ExportadorBase
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomeDoArquivo(): string
    {
        return $this->nomeDoArquivo;
    }

    /**
     * @param string $nomeDoArquivo
     * @return ExportadorBase
     */
    public function setNomeDoArquivo(string $nomeDoArquivo): ExportadorBase
    {
        $this->nomeDoArquivo = $nomeDoArquivo;
        return $this;
    }

    /**
     * @return string
     */
    abstract protected function extensaoDoArquivo(): string;

    /**
     * @return void
     */
    abstract protected function formata(): void;

    /**
     * TODO: Encontrar nomenclatura melhor
     * @return string|false
     */
    abstract protected function gerar(): string|false;

    /**
     * @inheritDoc
     */
    public function exportar(): void
    {
        $this->formata();

        $arquivo = fopen($this->getPath() . $this->getNomeDoArquivo() . "." . $this->extensaoDoArquivo(), "x")
        or die("Não foi possivel criar o arquivo!");
        fwrite($arquivo, $this->gerar());
        fclose($arquivo);
    }
}