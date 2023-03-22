<?php
require_once('vendor/autoload.php');

use BaraoVlask\TesteBagyComBr\Dto\PessoaFisica;
use BaraoVlask\TesteBagyComBr\Dto\PessoaJuridica;
use BaraoVlask\TesteBagyComBr\Exportadores\ExportadorXml;

$pessoas = require_once('pessoas.php');

$exportadorXml = new ExportadorXml();

foreach ($pessoas['fisicas'] as $pessoa) {
    $pessoaFisica = new PessoaFisica();
    $pessoaFisica->setId($pessoa['id'])
        ->setNome($pessoa['nome'])
        ->setSobrenome($pessoa['sobrenome'])
        ->setCpf($pessoa['cpf'])
        ->setDataDeNascimento($pessoa['dataDeNascimento']);
    $exportadorXml->addDadosExportaveis($pessoaFisica);
}

foreach ($pessoas['juridicas'] as $pessoa) {
    $pessoaJuridica
        = new PessoaJuridica();
    $pessoaJuridica
        ->setId($pessoa['id'])
        ->setNome($pessoa['nome'])
        ->setNomeFantasia($pessoa['nomeFantasia'])
        ->setCnpj($pessoa['cnpj']);
    $exportadorXml->addDadosExportaveis($pessoaJuridica
    );
}

$exportadorXml->setPath(getcwd() . DIRECTORY_SEPARATOR)
    ->setNomeDoArquivo("Exportação de pessoas " . (new DateTime())->format('d-m-Y H:i:s'))
    ->exportar();
