<?php
$faker = new Faker\Generator();
$faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
$faker->addProvider(new Faker\Provider\pt_BR\Company($faker));
$faker->addProvider(new Faker\Provider\DateTime($faker));

$pessoas = [];
$limit = 100000;

for ($i = 0; $i < $limit; $i++) {
    $pessoas['fisicas'][] = [
        'id' => $i,
        'nome' => $faker->firstName(),
        'sobrenome' => $faker->lastName(),
        'cpf' => $faker->cpf(),
        'dataDeNascimento' => $faker->dateTimeBetween('- 80 years')->format('d/m/Y')
    ];
}
for ($i = 0; $i < $limit; $i++) {
    $pessoas['juridicas'][] = [
        'id' => $i,
        'nome' => $faker->name(),
        'nomeFantasia' => $faker->company(),
        'cnpj' => $faker->cnpj(),
    ];
}

return $pessoas;