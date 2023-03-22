<?php

namespace BaraoVlask\TesteBagyComBr\Interfaces;

interface Exportavel
{
    /**
     * @return string
     */
    public function getTipo(): string;

    /**
     * @return array
     */
    public function dadosExportaveis(): array;
}