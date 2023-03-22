<?php

namespace BaraoVlask\TesteBagyComBr\Interfaces;

interface Exportador
{
    /**
     * @param Exportavel $exportavel
     * @return void
     */
    public function addDadosExportaveis(Exportavel $exportavel): void;

    /**
     * @return void
     */
    public function exportar(): void;
}