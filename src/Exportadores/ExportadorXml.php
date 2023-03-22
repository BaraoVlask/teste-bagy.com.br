<?php

namespace BaraoVlask\TesteBagyComBr\Exportadores;

use DOMDocument;
use SimpleXMLElement;

class ExportadorXml extends ExportadorBase
{
    private SimpleXMLElement $XMLElement;

    /**
     * @return string
     */
    protected function extensaoDoArquivo(): string
    {
        return 'xml';
    }

    /**
     * @return string|false
     */
    public function gerar(): string|false
    {
        $dom = new DOMDocument('1.0');
        $dom->loadXML($this->XMLElement->asXML());

        return $dom->saveXML();
    }

    /**
     * @return void
     */
    public function formata(): void
    {
        $this->XMLElement = new SimpleXMLElement("<pessoas/>");

        foreach ($this->exportaveis as $exportavel) {
            $child = $this->XMLElement->addChild($exportavel->getTipo());
            foreach ($exportavel->dadosExportaveis() as $rotulo => $dado) {
                $child->addChild(
                    str_replace(
                        ' ',
                        null,
                        ucwords($rotulo)
                    ),
                    $dado
                );
            }
        }
    }
}