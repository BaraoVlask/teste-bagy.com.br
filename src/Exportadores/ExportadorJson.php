<?php

namespace BaraoVlask\TesteBagyComBr\Exportadores;

class ExportadorJson extends ExportadorBase
{
    private array $dados;

    /**
     * @return string
     */
    protected function extensaoDoArquivo(): string
    {
        return 'json';
    }

    /**
     * @return string|false
     */
    public function gerar(): string|false
    {
        return json_encode($this->dados);
    }

    /**
     * @return void
     */
    public function formata(): void
    {
        foreach ($this->exportaveis as $exportavel) {
            $this->dados[] = array_merge(
                ['tipo' => $exportavel->getTipo()],
                $exportavel->dadosExportaveis()
            );
        }
    }
}