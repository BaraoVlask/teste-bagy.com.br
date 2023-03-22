# Teste bagy.com.br

```text
Escreva um programa que recebe uma classe de pessoa e converta em xml.

Pré-requisitos:
- Esse programa deve receber Pessoa física e jurídica
 - Pessoa física deve conter
  - ID
  - Nome
  - Sobrenome
  - CPF
  - Data de nascimento
 - Pessoa jurídica
  - ID
  - Nome
  - Nome fantasia
  - CNPJ
A intenção não validar se os tipos dos campos estão corretos, é verificar como a solução é desenvolvida, quais práticas foram aplicadas
```

## Utilização

Para a execução destes scripts é necessário um ambiente com PHP 8.0+ (embora não tenha sido utilizado algum recurso
especifico desta versão) e composer após rodar `composer install`, utilize um dos exemplos abaixo.

```shell
php exportarXml.php
```

```shell
php exportarJson.php
```

### Benchmark

Teste simples para a geração de duzentos mil registros

```text
➜  teste-bagy.com.br git:(develop) ✗ time php exportarJson.php
php exportarJson.php  15.69s user 1.22s system 98% cpu 17.148 total
➜  teste-bagy.com.br git:(develop) ✗ time php exportarXml.php 
php exportarXml.php  18.42s user 1.53s system 98% cpu 20.236 total
```
